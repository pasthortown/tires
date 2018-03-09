import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { CabeceraFacturaVentaRoutingModule } from './cabecerafacturaventa-routing.module';
import { CabeceraFacturaVentaComponent } from './cabecerafacturaventa.component';
import { CabeceraFacturaVentaService } from './cabecerafacturaventa.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      CabeceraFacturaVentaRoutingModule
   ],
   providers: [CabeceraFacturaVentaService],
   declarations: [CabeceraFacturaVentaComponent],
})
export class CabeceraFacturaVentaModule { }
