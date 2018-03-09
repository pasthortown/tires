import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { TipoLabradoComponent } from './tipolabrado.component';

describe('TipoLabradoComponent', () => {
   let component: TipoLabradoComponent;
   let fixture: ComponentFixture<TipoLabradoComponent>;

   beforeEach(async(() => {
      TestBed.configureTestingModule({
         declarations: [ TipoLabradoComponent ]
      }).compileComponents();
   }));

   beforeEach(() => {
      fixture = TestBed.createComponent(TipoLabradoComponent);
      component = fixture.componentInstance;
      fixture.detectChanges();
   });

   it('should create', () => {
      expect(component).toBeTruthy();
   });
});