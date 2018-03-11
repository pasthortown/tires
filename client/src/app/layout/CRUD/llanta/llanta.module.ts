import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { llantaRoutingModule } from './llanta-routing.module';
import { llantaComponent } from './llanta.component';
import { llantaService } from './llanta.service';

import { UbicacionService } from './../ubicacion/ubicacion.service';
import { TipoUsoService } from './../tipouso/tipouso.service';
import { CaracteristicaTerrenoService } from './../caracteristicaterreno/caracteristicaterreno.service';
import { FabricanteService } from './../fabricante/fabricante.service';
import { IndiceVelocidadService } from './../indicevelocidad/indicevelocidad.service';
import { IndiceCargaService } from './../indicecarga/indicecarga.service';
import { ConstruccionLlantaService } from './../construccionllanta/construccionllanta.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      llantaRoutingModule
   ],
   providers: [llantaService,
                ConstruccionLlantaService,
                UbicacionService,
                IndiceVelocidadService,
                IndiceCargaService,
                TipoUsoService,
                CaracteristicaTerrenoService,
                FabricanteService],
   declarations: [llantaComponent],
})
export class LlantaModule { }
