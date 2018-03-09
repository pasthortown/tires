import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { ImpuestosInsumoVentaComponent } from './impuestosinsumoventa.component';

describe('ImpuestosInsumoVentaComponent', () => {
   let component: ImpuestosInsumoVentaComponent;
   let fixture: ComponentFixture<ImpuestosInsumoVentaComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ ImpuestosInsumoVentaComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(ImpuestosInsumoVentaComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});