import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { RegistroDatosPersonalesRoutingModule } from './registroDatosPersonales-routing.module';
import { RegistroDatosPersonalesComponent } from './registroDatosPersonales.component';
import { PersonaService } from './../CRUD/persona/persona.service';
import { GeneroService } from './../CRUD/genero/genero.service';
import { UbicacionService } from './../CRUD/ubicacion/ubicacion.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      RegistroDatosPersonalesRoutingModule
   ],
   providers: [PersonaService,
               GeneroService,
               UbicacionService],
   declarations: [RegistroDatosPersonalesComponent],
})
export class RegistroDatosPersonalesModule { }
