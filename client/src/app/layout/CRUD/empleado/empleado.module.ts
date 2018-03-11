import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { EmpleadoRoutingModule } from './empleado-routing.module';
import { EmpleadoComponent } from './empleado.component';
import { EmpleadoService } from './empleado.service';

import { PersonaService } from './../persona/persona.service';
import { SucursalService } from './../sucursal/sucursal.service';
import { CargoService } from './../cargo/cargo.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      EmpleadoRoutingModule
   ],
   providers: [EmpleadoService,
               CargoService,
               SucursalService,
               PersonaService],
   declarations: [EmpleadoComponent],
})
export class EmpleadoModule { }
