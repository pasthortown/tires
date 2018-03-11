import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { GeneradorCodigoBarraBienesRoutingModule } from './generadorCodigoBarraBienes-routing.module';
import { GeneradorCodigoBarraBienesComponent } from './generadorCodigoBarraBienes.component';
import { PersonaService } from './../CRUD/persona/persona.service';
import { GeneroService } from './../CRUD/genero/genero.service';
import { UbicacionService } from './../CRUD/ubicacion/ubicacion.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      GeneradorCodigoBarraBienesRoutingModule
   ],
   providers: [PersonaService,
               GeneroService,
               UbicacionService],
   declarations: [GeneradorCodigoBarraBienesComponent],
})
export class GeneradorCodigoBarraBienesModule { }
