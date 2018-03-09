import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { ImpuestosProductoCompraComponent } from './impuestosproductocompra.component';

describe('ImpuestosProductoCompraComponent', () => {
   let component: ImpuestosProductoCompraComponent;
   let fixture: ComponentFixture<ImpuestosProductoCompraComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ ImpuestosProductoCompraComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(ImpuestosProductoCompraComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});