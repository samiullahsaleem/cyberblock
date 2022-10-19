import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-movies',
  templateUrl: './movies.component.html',
  styleUrls: ['./movies.component.scss']
})
export class MoviesComponent implements OnInit {
  static coversrcD: string;

  constructor() { }
  @Input() coversrc:any; 
  @Input() infoMovie:any;
  @Input() review:any; 
  ngOnInit(): void {
    
  }

}
