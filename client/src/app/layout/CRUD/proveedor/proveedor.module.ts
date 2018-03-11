import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ProveedorRoutingModule } from './proveedor-routing.module';
import { ProveedorComponent } from './proveedor.component';
import { ProveedorService } from './proveedor.service';

import { UbicacionService } from './../ubicacion/ubicacion.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ProveedorRoutingModule
   ],
   providers: [ProveedorService,
               UbicacionService],
   declarations: [ProveedorComponent],
})
export class ProveedorModule { }
