import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { DetalleFacturaCompraInsumoComponent } from './detallefacturacomprainsumo.component';

describe('DetalleFacturaCompraInsumoComponent', () => {
   let component: DetalleFacturaCompraInsumoComponent;
   let fixture: ComponentFixture<DetalleFacturaCompraInsumoComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ DetalleFacturaCompraInsumoComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(DetalleFacturaCompraInsumoComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});