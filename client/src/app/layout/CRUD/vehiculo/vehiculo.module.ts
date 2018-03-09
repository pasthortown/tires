import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { VehiculoRoutingModule } from './vehiculo-routing.module';
import { VehiculoComponent } from './vehiculo.component';
import { VehiculoService } from './vehiculo.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      VehiculoRoutingModule
   ],
   providers: [VehiculoService],
   declarations: [VehiculoComponent],
})
export class VehiculoModule { }
