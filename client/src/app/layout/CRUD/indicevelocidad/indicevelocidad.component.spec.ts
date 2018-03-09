import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IndiceVelocidadComponent } from './indicevelocidad.component';

describe('IndiceVelocidadComponent', () => {
   let component: IndiceVelocidadComponent;
   let fixture: ComponentFixture<IndiceVelocidadComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ IndiceVelocidadComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(IndiceVelocidadComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});