import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { DetalleFacturaVentaServicioRoutingModule } from './detallefacturaventaservicio-routing.module';
import { DetalleFacturaVentaServicioComponent } from './detallefacturaventaservicio.component';
import { DetalleFacturaVentaServicioService } from './detallefacturaventaservicio.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      DetalleFacturaVentaServicioRoutingModule
   ],
   providers: [DetalleFacturaVentaServicioService],
   declarations: [DetalleFacturaVentaServicioComponent],
})
export class DetalleFacturaVentaServicioModule { }
