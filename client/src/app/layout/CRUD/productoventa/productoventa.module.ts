import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ProductoVentaRoutingModule } from './productoventa-routing.module';
import { ProductoVentaComponent } from './productoventa.component';
import { ProductoVentaService } from './productoventa.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ProductoVentaRoutingModule
   ],
   providers: [ProductoVentaService],
   declarations: [ProductoVentaComponent],
})
export class ProductoVentaModule { }
