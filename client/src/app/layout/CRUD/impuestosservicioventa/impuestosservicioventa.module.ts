import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ImpuestosServicioVentaRoutingModule } from './impuestosservicioventa-routing.module';
import { ImpuestosServicioVentaComponent } from './impuestosservicioventa.component';
import { ImpuestosServicioVentaService } from './impuestosservicioventa.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ImpuestosServicioVentaRoutingModule
   ],
   providers: [ImpuestosServicioVentaService],
   declarations: [ImpuestosServicioVentaComponent],
})
export class ImpuestosServicioVentaModule { }
