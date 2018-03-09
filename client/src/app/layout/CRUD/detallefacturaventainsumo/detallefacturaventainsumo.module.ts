import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { DetalleFacturaVentaInsumoRoutingModule } from './detallefacturaventainsumo-routing.module';
import { DetalleFacturaVentaInsumoComponent } from './detallefacturaventainsumo.component';
import { DetalleFacturaVentaInsumoService } from './detallefacturaventainsumo.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      DetalleFacturaVentaInsumoRoutingModule
   ],
   providers: [DetalleFacturaVentaInsumoService],
   declarations: [DetalleFacturaVentaInsumoComponent],
})
export class DetalleFacturaVentaInsumoModule { }
