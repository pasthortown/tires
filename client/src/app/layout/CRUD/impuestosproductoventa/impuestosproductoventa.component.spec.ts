import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { ImpuestosProductoVentaComponent } from './impuestosproductoventa.component';

describe('ImpuestosProductoVentaComponent', () => {
   let component: ImpuestosProductoVentaComponent;
   let fixture: ComponentFixture<ImpuestosProductoVentaComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ ImpuestosProductoVentaComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(ImpuestosProductoVentaComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});