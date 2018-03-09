import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { DetalleFacturaVentaServicioComponent } from './detallefacturaventaservicio.component';

describe('DetalleFacturaVentaServicioComponent', () => {
   let component: DetalleFacturaVentaServicioComponent;
   let fixture: ComponentFixture<DetalleFacturaVentaServicioComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ DetalleFacturaVentaServicioComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(DetalleFacturaVentaServicioComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});