import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { EmpleadoRoutingModule } from './empleado-routing.module';
import { EmpleadoComponent } from './empleado.component';
import { EmpleadoService } from './empleado.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      EmpleadoRoutingModule
   ],
   providers: [EmpleadoService],
   declarations: [EmpleadoComponent],
})
export class EmpleadoModule { }
