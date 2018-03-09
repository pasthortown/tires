import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { PaisOrigenComponent } from './paisorigen.component';

describe('PaisOrigenComponent', () => {
   let component: PaisOrigenComponent;
   let fixture: ComponentFixture<PaisOrigenComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ PaisOrigenComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(PaisOrigenComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});