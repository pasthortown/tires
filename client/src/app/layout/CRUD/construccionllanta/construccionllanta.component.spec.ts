import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { ConstruccionLlantaComponent } from './construccionllanta.component';

describe('ConstruccionLlantaComponent', () => {
   let component: ConstruccionLlantaComponent;
   let fixture: ComponentFixture<ConstruccionLlantaComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ ConstruccionLlantaComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(ConstruccionLlantaComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});