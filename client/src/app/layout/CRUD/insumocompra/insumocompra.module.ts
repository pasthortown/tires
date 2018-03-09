import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { InsumoCompraRoutingModule } from './insumocompra-routing.module';
import { InsumoCompraComponent } from './insumocompra.component';
import { InsumoCompraService } from './insumocompra.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      InsumoCompraRoutingModule
   ],
   providers: [InsumoCompraService],
   declarations: [InsumoCompraComponent],
})
export class InsumoCompraModule { }
