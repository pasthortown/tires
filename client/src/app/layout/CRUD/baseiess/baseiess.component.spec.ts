import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { BaseIESSComponent } from './baseiess.component';

describe('BaseIESSComponent', () => {
   let component: BaseIESSComponent;
   let fixture: ComponentFixture<BaseIESSComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ BaseIESSComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(BaseIESSComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});