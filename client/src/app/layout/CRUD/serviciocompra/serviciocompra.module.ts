import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ServicioCompraRoutingModule } from './serviciocompra-routing.module';
import { ServicioCompraComponent } from './serviciocompra.component';
import { ServicioCompraService } from './serviciocompra.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ServicioCompraRoutingModule
   ],
   providers: [ServicioCompraService],
   declarations: [ServicioCompraComponent],
})
export class ServicioCompraModule { }
