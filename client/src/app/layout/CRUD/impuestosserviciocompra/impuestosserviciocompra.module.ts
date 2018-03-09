import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ImpuestosServicioCompraRoutingModule } from './impuestosserviciocompra-routing.module';
import { ImpuestosServicioCompraComponent } from './impuestosserviciocompra.component';
import { ImpuestosServicioCompraService } from './impuestosserviciocompra.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ImpuestosServicioCompraRoutingModule
   ],
   providers: [ImpuestosServicioCompraService],
   declarations: [ImpuestosServicioCompraComponent],
})
export class ImpuestosServicioCompraModule { }
