import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { DetalleFacturaCompraProductoComponent } from './detallefacturacompraproducto.component';

describe('DetalleFacturaCompraProductoComponent', () => {
   let component: DetalleFacturaCompraProductoComponent;
   let fixture: ComponentFixture<DetalleFacturaCompraProductoComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ DetalleFacturaCompraProductoComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(DetalleFacturaCompraProductoComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});