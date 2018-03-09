import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { ImpuestosServicioCompraComponent } from './impuestosserviciocompra.component';

describe('ImpuestosServicioCompraComponent', () => {
   let component: ImpuestosServicioCompraComponent;
   let fixture: ComponentFixture<ImpuestosServicioCompraComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ ImpuestosServicioCompraComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(ImpuestosServicioCompraComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});