import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ServicioVentaRoutingModule } from './servicioventa-routing.module';
import { ServicioVentaComponent } from './servicioventa.component';
import { ServicioVentaService } from './servicioventa.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ServicioVentaRoutingModule
   ],
   providers: [ServicioVentaService],
   declarations: [ServicioVentaComponent],
})
export class ServicioVentaModule { }
