import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { TipoVehiculoRoutingModule } from './tipovehiculo-routing.module';
import { TipoVehiculoComponent } from './tipovehiculo.component';
import { TipoVehiculoService } from './tipovehiculo.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      TipoVehiculoRoutingModule
   ],
   providers: [TipoVehiculoService],
   declarations: [TipoVehiculoComponent],
})
export class TipoVehiculoModule { }
