import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { InsumoVentaComponent } from './insumoventa.component';

describe('InsumoVentaComponent', () => {
   let component: InsumoVentaComponent;
   let fixture: ComponentFixture<InsumoVentaComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ InsumoVentaComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(InsumoVentaComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});