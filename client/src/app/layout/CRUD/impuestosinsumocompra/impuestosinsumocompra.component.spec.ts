import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { ImpuestosInsumoCompraComponent } from './impuestosinsumocompra.component';

describe('ImpuestosInsumoCompraComponent', () => {
   let component: ImpuestosInsumoCompraComponent;
   let fixture: ComponentFixture<ImpuestosInsumoCompraComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ ImpuestosInsumoCompraComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(ImpuestosInsumoCompraComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});