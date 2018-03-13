import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { MotivoFinComponent } from './motivofin.component';

describe('MotivoFinComponent', () => {
   let component: MotivoFinComponent;
   let fixture: ComponentFixture<MotivoFinComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ MotivoFinComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(MotivoFinComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});