import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { InsumoCompraComponent } from './insumocompra.component';

describe('InsumoCompraComponent', () => {
   let component: InsumoCompraComponent;
   let fixture: ComponentFixture<InsumoCompraComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ InsumoCompraComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(InsumoCompraComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});