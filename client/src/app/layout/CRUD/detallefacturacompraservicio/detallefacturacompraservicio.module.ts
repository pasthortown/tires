import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { DetalleFacturaCompraServicioRoutingModule } from './detallefacturacompraservicio-routing.module';
import { DetalleFacturaCompraServicioComponent } from './detallefacturacompraservicio.component';
import { DetalleFacturaCompraServicioService } from './detallefacturacompraservicio.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      DetalleFacturaCompraServicioRoutingModule
   ],
   providers: [DetalleFacturaCompraServicioService],
   declarations: [DetalleFacturaCompraServicioComponent],
})
export class DetalleFacturaCompraServicioModule { }
