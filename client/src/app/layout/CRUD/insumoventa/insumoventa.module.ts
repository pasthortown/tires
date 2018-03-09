import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { InsumoVentaRoutingModule } from './insumoventa-routing.module';
import { InsumoVentaComponent } from './insumoventa.component';
import { InsumoVentaService } from './insumoventa.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      InsumoVentaRoutingModule
   ],
   providers: [InsumoVentaService],
   declarations: [InsumoVentaComponent],
})
export class InsumoVentaModule { }
