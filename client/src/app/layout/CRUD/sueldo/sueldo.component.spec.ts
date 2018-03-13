import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { SueldoComponent } from './sueldo.component';

describe('SueldoComponent', () => {
   let component: SueldoComponent;
   let fixture: ComponentFixture<SueldoComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ SueldoComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(SueldoComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});