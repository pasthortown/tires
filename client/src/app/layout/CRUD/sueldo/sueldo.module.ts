import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { SueldoRoutingModule } from './sueldo-routing.module';
import { SueldoComponent } from './sueldo.component';
import { SueldoService } from './sueldo.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      SueldoRoutingModule
   ],
   providers: [SueldoService],
   declarations: [SueldoComponent],
})
export class SueldoModule { }
