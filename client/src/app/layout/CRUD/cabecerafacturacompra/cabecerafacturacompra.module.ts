import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { CabeceraFacturaCompraRoutingModule } from './cabecerafacturacompra-routing.module';
import { CabeceraFacturaCompraComponent } from './cabecerafacturacompra.component';
import { CabeceraFacturaCompraService } from './cabecerafacturacompra.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      CabeceraFacturaCompraRoutingModule
   ],
   providers: [CabeceraFacturaCompraService],
   declarations: [CabeceraFacturaCompraComponent],
})
export class CabeceraFacturaCompraModule { }
