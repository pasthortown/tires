import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { LlantaCompraComponent } from './llantacompra.component';

describe('LlantaCompraComponent', () => {
   let component: LlantaCompraComponent;
   let fixture: ComponentFixture<LlantaCompraComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ LlantaCompraComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(LlantaCompraComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});