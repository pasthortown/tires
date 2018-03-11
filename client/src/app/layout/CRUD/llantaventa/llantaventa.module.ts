import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { LlantaVentaRoutingModule } from './llantaventa-routing.module';
import { LlantaVentaComponent } from './llantaventa.component';
import { LlantaVentaService } from './llantaventa.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      LlantaVentaRoutingModule
   ],
   providers: [LlantaVentaService],
   declarations: [LlantaVentaComponent],
})
export class LlantaVentaModule { }
