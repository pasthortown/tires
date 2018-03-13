import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { RegistroDatosPersonalesComponent } from './registroDatosPersonales.component';

describe('RegistroDatosPersonalesComponent', () => {
   let component: RegistroDatosPersonalesComponent;
   let fixture: ComponentFixture<RegistroDatosPersonalesComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ RegistroDatosPersonalesComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(RegistroDatosPersonalesComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});
