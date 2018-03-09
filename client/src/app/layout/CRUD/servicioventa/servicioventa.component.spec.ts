import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { ServicioVentaComponent } from './servicioventa.component';

describe('ServicioVentaComponent', () => {
   let component: ServicioVentaComponent;
   let fixture: ComponentFixture<ServicioVentaComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ ServicioVentaComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(ServicioVentaComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});