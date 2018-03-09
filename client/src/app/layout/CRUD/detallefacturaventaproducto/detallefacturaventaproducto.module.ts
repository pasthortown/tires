import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { DetalleFacturaVentaProductoRoutingModule } from './detallefacturaventaproducto-routing.module';
import { DetalleFacturaVentaProductoComponent } from './detallefacturaventaproducto.component';
import { DetalleFacturaVentaProductoService } from './detallefacturaventaproducto.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      DetalleFacturaVentaProductoRoutingModule
   ],
   providers: [DetalleFacturaVentaProductoService],
   declarations: [DetalleFacturaVentaProductoComponent],
})
export class DetalleFacturaVentaProductoModule { }
