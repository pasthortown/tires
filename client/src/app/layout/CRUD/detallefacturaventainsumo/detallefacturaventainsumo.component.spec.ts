import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { DetalleFacturaVentaInsumoComponent } from './detallefacturaventainsumo.component';

describe('DetalleFacturaVentaInsumoComponent', () => {
   let component: DetalleFacturaVentaInsumoComponent;
   let fixture: ComponentFixture<DetalleFacturaVentaInsumoComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ DetalleFacturaVentaInsumoComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(DetalleFacturaVentaInsumoComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});