import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ProductoCompraRoutingModule } from './productocompra-routing.module';
import { ProductoCompraComponent } from './productocompra.component';
import { ProductoCompraService } from './productocompra.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ProductoCompraRoutingModule
   ],
   providers: [ProductoCompraService],
   declarations: [ProductoCompraComponent],
})
export class ProductoCompraModule { }
