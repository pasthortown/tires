import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IndiceCargaComponent } from './indicecarga.component';

describe('IndiceCargaComponent', () => {
   let component: IndiceCargaComponent;
   let fixture: ComponentFixture<IndiceCargaComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ IndiceCargaComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(IndiceCargaComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});