import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { RegistroEmpleadoRoutingModule } from './registroEmpleado-routing.module';
import { RegistroEmpleadoComponent } from './registroEmpleado.component';
import { RegistroEmpleadoService } from './registroEmpleado.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      RegistroEmpleadoRoutingModule
   ],
   providers: [RegistroEmpleadoService],
   declarations: [RegistroEmpleadoComponent],
})
export class RegistroEmpleadoModule { }
