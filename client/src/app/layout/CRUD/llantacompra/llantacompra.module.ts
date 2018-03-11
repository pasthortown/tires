import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { LlantaCompraRoutingModule } from './llantacompra-routing.module';
import { LlantaCompraComponent } from './llantacompra.component';
import { LlantaCompraService } from './llantacompra.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      LlantaCompraRoutingModule
   ],
   providers: [LlantaCompraService],
   declarations: [LlantaCompraComponent],
})
export class LlantaCompraModule { }
