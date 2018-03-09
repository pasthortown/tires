import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { DetalleFacturaCompraServicioComponent } from './detallefacturacompraservicio.component';

describe('DetalleFacturaCompraServicioComponent', () => {
   let component: DetalleFacturaCompraServicioComponent;
   let fixture: ComponentFixture<DetalleFacturaCompraServicioComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ DetalleFacturaCompraServicioComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(DetalleFacturaCompraServicioComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});