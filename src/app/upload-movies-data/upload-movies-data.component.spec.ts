import { ComponentFixture, TestBed } from '@angular/core/testing';

import { UploadMoviesDataComponent } from './upload-movies-data.component';

describe('UploadMoviesDataComponent', () => {
  let component: UploadMoviesDataComponent;
  let fixture: ComponentFixture<UploadMoviesDataComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ UploadMoviesDataComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(UploadMoviesDataComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
