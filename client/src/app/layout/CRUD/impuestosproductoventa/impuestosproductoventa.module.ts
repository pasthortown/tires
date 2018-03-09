import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ImpuestosProductoVentaRoutingModule } from './impuestosproductoventa-routing.module';
import { ImpuestosProductoVentaComponent } from './impuestosproductoventa.component';
import { ImpuestosProductoVentaService } from './impuestosproductoventa.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ImpuestosProductoVentaRoutingModule
   ],
   providers: [ImpuestosProductoVentaService],
   declarations: [ImpuestosProductoVentaComponent],
})
export class ImpuestosProductoVentaModule { }
