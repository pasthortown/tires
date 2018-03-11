import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { SucursalRoutingModule } from './sucursal-routing.module';
import { SucursalComponent } from './sucursal.component';
import { SucursalService } from './sucursal.service';

import { UbicacionService } from './../ubicacion/ubicacion.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      SucursalRoutingModule
   ],
   providers: [SucursalService,
               UbicacionService],
   declarations: [SucursalComponent],
})
export class SucursalModule { }
