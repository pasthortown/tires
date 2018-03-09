import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { DetalleFacturaVentaProductoComponent } from './detallefacturaventaproducto.component';

describe('DetalleFacturaVentaProductoComponent', () => {
   let component: DetalleFacturaVentaProductoComponent;
   let fixture: ComponentFixture<DetalleFacturaVentaProductoComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ DetalleFacturaVentaProductoComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(DetalleFacturaVentaProductoComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});