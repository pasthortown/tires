import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ProveedorRoutingModule } from './proveedor-routing.module';
import { ProveedorComponent } from './proveedor.component';
import { ProveedorService } from './proveedor.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ProveedorRoutingModule
   ],
   providers: [ProveedorService],
   declarations: [ProveedorComponent],
})
export class ProveedorModule { }
