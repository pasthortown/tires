import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { GeneradorCodigoBarraBienesComponent } from './generadorCodigoBarraBienes.component';

describe('GeneradorCodigoBarraBienesComponent', () => {
   let component: GeneradorCodigoBarraBienesComponent;
   let fixture: ComponentFixture<GeneradorCodigoBarraBienesComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ GeneradorCodigoBarraBienesComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(GeneradorCodigoBarraBienesComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});
