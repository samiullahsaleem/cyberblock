import { Component,OnInit } from '@angular/core';
import { AngularFirestore } from '@angular/fire/compat/firestore';
import { UploadMovie } from './upload';



@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})

  export class AppComponent  implements OnInit{
    isShown:boolean = false;
    showValue:boolean = false;
    diaplayMoviesHome="inline-block";
    diaplayLibrary="none";
    newArray:any[] = [];
    mainImageSrc = "../assets/1.jpg";
    movieTitle:string='Movie Title Here';
    movieDisc:any='movie Discription here';
    libraryPosterimgLoc:any="";
    currentId = "";
    promptText="";
   pBox = "";
   pBoxOpacity="0";
   StorageLoc:any;

    movieObj:UploadMovie= {
      id: '',
      movieName: '',
      imageSource: '',
      poster:'',
      discription:'',
      review:0.0
    };

    constructor(private afs:AngularFirestore){
 
    }
    

    addItem(data:any)
    {
      console.log(data);
      this.showValue = data;
      this.newArray = [];
      this.RetriveMovieData();
    }
    ngOnInit(): void {
      this.StorageLoc = "UploadMovie";
      this.RetriveMovieData();
    }
    
    RetriveMovieData()
    {
      this.newArray = [];
      console.log("location = "+ this.StorageLoc);
     this.afs.collection(this.StorageLoc).get().subscribe((ss) => {
       ss.docs.forEach((doc) => {
         this.newArray.push(doc.data());
       });
      console.log("UploadedData = "+ this.newArray);
     });
     
    }
      
    changeMainImg(imgSrc: any , movieN:any , movieD:any,id:any,srcImg:any)
    {
      
        this.mainImageSrc = imgSrc;
        this.movieTitle=movieN;
        this.movieDisc=movieD;     
        this.currentId =   id;
        this.libraryPosterimgLoc = srcImg;
        
    }
    
    addMovieLibray()
    {
      this.movieObj.movieName = this.movieTitle;
      this.movieObj.id = this.currentId;
      this.movieObj.discription = this.movieDisc;
      this.movieObj.imageSource = this.libraryPosterimgLoc;
       this.promptText = "SuccessFully Added";
       this.pBox = "100px";
       this.pBoxOpacity = "1";
     return this.afs.collection('/MyLibrary').add(this.movieObj);
    }
    closePrompt()
    {
      this.pBox = "0px";
     this.pBoxOpacity = "0";
    }
    openLibrary(data:any)
    {
      this.StorageLoc = "MyLibrary";
      console.log("location = "+ this.StorageLoc);
      
      this.RetriveMovieData();
      
    }
    toggleShowHome(data:any)
    {
      this.StorageLoc = "UploadMovie";
      console.log("location = "+ this.StorageLoc);
      
      this.RetriveMovieData();
    }
  }
  
  