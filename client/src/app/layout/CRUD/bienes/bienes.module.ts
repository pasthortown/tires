import { ProveedorService } from './../proveedor/proveedor.service';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { BienesRoutingModule } from './bienes-routing.module';
import { BienesComponent } from './bienes.component';
import { BienesService } from './bienes.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      BienesRoutingModule,
   ],
   providers: [BienesService,
               ProveedorService],
   declarations: [BienesComponent]
})
export class BienesModule { }
