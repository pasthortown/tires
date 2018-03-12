import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { MotivoFinRoutingModule } from './motivofin-routing.module';
import { MotivoFinComponent } from './motivofin.component';
import { MotivoFinService } from './motivofin.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      MotivoFinRoutingModule
   ],
   providers: [MotivoFinService],
   declarations: [MotivoFinComponent],
})
export class MotivoFinModule { }
