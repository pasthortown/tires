import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { CabeceraFacturaVentaComponent } from './cabecerafacturaventa.component';

describe('CabeceraFacturaVentaComponent', () => {
   let component: CabeceraFacturaVentaComponent;
   let fixture: ComponentFixture<CabeceraFacturaVentaComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ CabeceraFacturaVentaComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(CabeceraFacturaVentaComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});