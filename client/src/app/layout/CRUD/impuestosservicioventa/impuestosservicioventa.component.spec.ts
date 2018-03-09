import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { ImpuestosServicioVentaComponent } from './impuestosservicioventa.component';

describe('ImpuestosServicioVentaComponent', () => {
   let component: ImpuestosServicioVentaComponent;
   let fixture: ComponentFixture<ImpuestosServicioVentaComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ ImpuestosServicioVentaComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(ImpuestosServicioVentaComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});