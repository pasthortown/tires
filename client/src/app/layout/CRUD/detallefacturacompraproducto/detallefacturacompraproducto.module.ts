import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { DetalleFacturaCompraProductoRoutingModule } from './detallefacturacompraproducto-routing.module';
import { DetalleFacturaCompraProductoComponent } from './detallefacturacompraproducto.component';
import { DetalleFacturaCompraProductoService } from './detallefacturacompraproducto.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      DetalleFacturaCompraProductoRoutingModule
   ],
   providers: [DetalleFacturaCompraProductoService],
   declarations: [DetalleFacturaCompraProductoComponent],
})
export class DetalleFacturaCompraProductoModule { }
