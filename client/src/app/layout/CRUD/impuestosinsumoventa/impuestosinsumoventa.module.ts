import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ImpuestosInsumoVentaRoutingModule } from './impuestosinsumoventa-routing.module';
import { ImpuestosInsumoVentaComponent } from './impuestosinsumoventa.component';
import { ImpuestosInsumoVentaService } from './impuestosinsumoventa.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ImpuestosInsumoVentaRoutingModule
   ],
   providers: [ImpuestosInsumoVentaService],
   declarations: [ImpuestosInsumoVentaComponent],
})
export class ImpuestosInsumoVentaModule { }
