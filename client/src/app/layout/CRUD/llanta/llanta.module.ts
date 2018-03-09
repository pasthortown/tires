import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { llantaRoutingModule } from './llanta-routing.module';
import { llantaComponent } from './llanta.component';
import { llantaService } from './llanta.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      llantaRoutingModule
   ],
   providers: [llantaService],
   declarations: [llantaComponent],
})
export class llantaModule { }
