import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { CaracteristicaTerrenoComponent } from './caracteristicaterreno.component';

describe('CaracteristicaTerrenoComponent', () => {
   let component: CaracteristicaTerrenoComponent;
   let fixture: ComponentFixture<CaracteristicaTerrenoComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ CaracteristicaTerrenoComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(CaracteristicaTerrenoComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});