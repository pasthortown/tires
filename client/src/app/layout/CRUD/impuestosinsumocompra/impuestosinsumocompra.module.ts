import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ImpuestosInsumoCompraRoutingModule } from './impuestosinsumocompra-routing.module';
import { ImpuestosInsumoCompraComponent } from './impuestosinsumocompra.component';
import { ImpuestosInsumoCompraService } from './impuestosinsumocompra.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ImpuestosInsumoCompraRoutingModule
   ],
   providers: [ImpuestosInsumoCompraService],
   declarations: [ImpuestosInsumoCompraComponent],
})
export class ImpuestosInsumoCompraModule { }
