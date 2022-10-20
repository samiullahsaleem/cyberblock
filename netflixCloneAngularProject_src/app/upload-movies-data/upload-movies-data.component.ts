import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';
import{AngularFirestore} from '@angular/fire/compat/firestore';
import { getDownloadURL, ref, Storage, uploadBytesResumable } from '@angular/fire/storage';
import { UploadMovie } from '../upload';


@Component({
  selector: 'app-upload-movies-data',
  templateUrl: './upload-movies-data.component.html',
  styleUrls: ['./upload-movies-data.component.scss']
})
export class UploadMoviesDataComponent implements OnInit {
  @Output() CloseAddMovieContainer = new EventEmitter<number>();
  closeData:any = false;
  ngOnInit(): void {
  }

  movieObj:UploadMovie= {
    id: '',
    movieName: '',
    imageSource: '',
    poster:'',
    discription:'',
    review:0.0
  };

  UmovieName:string='';
  UimageSource:string='';   
  UmainImageSource:string='';   
  UmovieReview:number=0.0;
  UmovieN:any=[];
  UimageSrc:any=[]; 
public file:any = {};
public file1:any = {};
myArray: any[] = [];
UmovieDiscription:any="";

UploadProgress1:number=0;
UploadProgress2:number=0;
imgLoading:any;

imageSourceSend:any;
movieNameSend:any

  constructor(private afs:AngularFirestore,private storage:Storage)
  {}
  RetriveMovieData()
  {
   this.afs.collection("UploadMovie").get().subscribe((ss) => {
     ss.docs.forEach((doc) => {
       this.myArray.push(doc.data());
     });
    
   });
   console.log("UploadedData"+ this.myArray);
  }
  addMovie(uMovie : UploadMovie)
  {
    uMovie.id = this.afs.createId();
     return this.afs.collection('/UploadMovie').add(uMovie);
  }
  resetdata()
  {
    this.UmovieName="";
  this.UimageSource="";
  this.UmovieReview=0.0;
  this.UmovieDiscription = "";
  }
  chooseFile(event:any)
  {
    this.file = event.target.files[0];
  } chooseMainFile(event:any)
  {
    this.file1 = event.target.files[0];
  }
 
  uploadMovieData()
  {
    this.imgLoading = "../assets/74H8.gif";
    this.movieObj.id = '';
    this.movieObj.movieName = this.UmovieName;
    this.movieObj.review = this.UmovieReview;
    this.movieObj.discription = this.UmovieDiscription;
    
    console.log(this.UmovieName);
    console.log(this.UimageSource);
        
    const storageRef = ref(this.storage, this.file.name);
    const uploadTask = uploadBytesResumable(storageRef, this.file);
    uploadTask.on('state_changed',
    (snapshot) => 
    {
      var  progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
      // console.log('Upload is ' + progress + '% done');
      this.UploadProgress1 = progress;
    },
    (error)=>
    {
      console.log(error.message);
    },
    ()=>
    {
      getDownloadURL(uploadTask.snapshot.ref).then((downloadURL) => {
        // console.log('File available at', downloadURL);
        this.movieObj.imageSource = downloadURL;  
      });
    }
   )

   const storageRefnew = ref(this.storage, this.file1.name);
    const uploadTasknew = uploadBytesResumable(storageRefnew, this.file1);
    uploadTasknew.on('state_changed',
    (snapshot) => 
    {
       var progress1 = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
      // console.log('Upload is ' + progress1 + '% done');
      this.UploadProgress2 = progress1;
    },
    (error)=>
    {
      console.log(error.message);
    },
    ()=>
    {
      this.imgLoading = "";
      getDownloadURL(uploadTasknew.snapshot.ref).then((downloadURL) => {
        // console.log('File available at', downloadURL);
        this.movieObj.poster = downloadURL;
        this.addMovie(this.movieObj);  
        this.resetdata();   
      this.myArray=[];
      this.closeMovieAdd();
      });
    }
   )
  }   

  closeMovieAdd()
  {
    this.CloseAddMovieContainer.emit(this.closeData);
  }
}
