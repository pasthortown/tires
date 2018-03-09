import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { IndiceCargaRoutingModule } from './indicecarga-routing.module';
import { IndiceCargaComponent } from './indicecarga.component';
import { IndiceCargaService } from './indicecarga.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      IndiceCargaRoutingModule
   ],
   providers: [IndiceCargaService],
   declarations: [IndiceCargaComponent],
})
export class IndiceCargaModule { }
