import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ImpuestosProductoCompraRoutingModule } from './impuestosproductocompra-routing.module';
import { ImpuestosProductoCompraComponent } from './impuestosproductocompra.component';
import { ImpuestosProductoCompraService } from './impuestosproductocompra.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ImpuestosProductoCompraRoutingModule
   ],
   providers: [ImpuestosProductoCompraService],
   declarations: [ImpuestosProductoCompraComponent],
})
export class ImpuestosProductoCompraModule { }
