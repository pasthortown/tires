import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { GeneradorCodigoBarraBienesRoutingModule } from './generadorCodigoBarraBienes-routing.module';
import { GeneradorCodigoBarraBienesComponent } from './generadorCodigoBarraBienes.component';
import { BienesService } from './../CRUD/bienes/bienes.service';
import { NgxBarcodeModule } from 'ngx-barcode';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      NgxBarcodeModule,
      GeneradorCodigoBarraBienesRoutingModule
   ],
   providers: [BienesService],
   declarations: [GeneradorCodigoBarraBienesComponent],
})
export class GeneradorCodigoBarraBienesModule { }
