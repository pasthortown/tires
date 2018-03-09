import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { TipoUsoComponent } from './tipouso.component';

describe('TipoUsoComponent', () => {
   let component: TipoUsoComponent;
   let fixture: ComponentFixture<TipoUsoComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ TipoUsoComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(TipoUsoComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});