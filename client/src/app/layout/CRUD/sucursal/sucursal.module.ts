import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { SucursalRoutingModule } from './sucursal-routing.module';
import { SucursalComponent } from './sucursal.component';
import { SucursalService } from './sucursal.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      SucursalRoutingModule
   ],
   providers: [SucursalService],
   declarations: [SucursalComponent],
})
export class SucursalModule { }
