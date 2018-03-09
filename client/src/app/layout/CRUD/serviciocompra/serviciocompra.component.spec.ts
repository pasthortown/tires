import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { ServicioCompraComponent } from './serviciocompra.component';

describe('ServicioCompraComponent', () => {
   let component: ServicioCompraComponent;
   let fixture: ComponentFixture<ServicioCompraComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ ServicioCompraComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(ServicioCompraComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});