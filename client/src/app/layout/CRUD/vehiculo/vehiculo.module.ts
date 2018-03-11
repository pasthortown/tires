import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { VehiculoRoutingModule } from './vehiculo-routing.module';
import { VehiculoComponent } from './vehiculo.component';
import { VehiculoService } from './vehiculo.service';

import { MarcaService } from '../marca/marca.service';
import { TipoVehiculoService } from './../tipovehiculo/tipovehiculo.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      VehiculoRoutingModule
   ],
   providers: [VehiculoService,
               MarcaService,
               TipoVehiculoService],
   declarations: [VehiculoComponent],
})
export class VehiculoModule { }
