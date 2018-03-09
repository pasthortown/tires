import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { CabeceraFacturaCompraComponent } from './cabecerafacturacompra.component';

describe('CabeceraFacturaCompraComponent', () => {
   let component: CabeceraFacturaCompraComponent;
   let fixture: ComponentFixture<CabeceraFacturaCompraComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ CabeceraFacturaCompraComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(CabeceraFacturaCompraComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});