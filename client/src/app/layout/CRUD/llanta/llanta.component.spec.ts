import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { llantaComponent } from './llanta.component';

describe('llantaComponent', () => {
   let component: llantaComponent;
   let fixture: ComponentFixture<llantaComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ llantaComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(llantaComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});