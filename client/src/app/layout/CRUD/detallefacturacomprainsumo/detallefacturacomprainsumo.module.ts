import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { DetalleFacturaCompraInsumoRoutingModule } from './detallefacturacomprainsumo-routing.module';
import { DetalleFacturaCompraInsumoComponent } from './detallefacturacomprainsumo.component';
import { DetalleFacturaCompraInsumoService } from './detallefacturacomprainsumo.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      DetalleFacturaCompraInsumoRoutingModule
   ],
   providers: [DetalleFacturaCompraInsumoService],
   declarations: [DetalleFacturaCompraInsumoComponent],
})
export class DetalleFacturaCompraInsumoModule { }
