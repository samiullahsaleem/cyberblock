import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {

  constructor() { }
  @Input() showAddValue:any;
  
@Output() newItemEvent = new EventEmitter<number>();
@Output() newLibrary = new EventEmitter<number>();
@Output() newLibrary1 = new EventEmitter<number>();
  
  toggleShow() {

    this.showAddValue = ! this.showAddValue;
    this.newItemEvent.emit(this.showAddValue);
    }
    openLibrary()
    {
      this.newLibrary.emit(1);
    }
    toggleShowHome()
    {
      this.newLibrary1.emit(0);
    }
  ngOnInit(): void {
  }

}
