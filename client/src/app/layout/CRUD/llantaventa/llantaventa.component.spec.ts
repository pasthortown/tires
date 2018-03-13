import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { LlantaVentaComponent } from './llantaventa.component';

describe('LlantaVentaComponent', () => {
   let component: LlantaVentaComponent;
   let fixture: ComponentFixture<LlantaVentaComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ LlantaVentaComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(LlantaVentaComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});