import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ConstruccionLlantaRoutingModule } from './construccionllanta-routing.module';
import { ConstruccionLlantaComponent } from './construccionllanta.component';
import { ConstruccionLlantaService } from './construccionllanta.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ConstruccionLlantaRoutingModule
   ],
   providers: [ConstruccionLlantaService],
   declarations: [ConstruccionLlantaComponent],
})
export class ConstruccionLlantaModule { }
