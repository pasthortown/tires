import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ContratoRoutingModule } from './contrato-routing.module';
import { ContratoComponent } from './contrato.component';
import { ContratoService } from './contrato.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ContratoRoutingModule
   ],
   providers: [ContratoService],
   declarations: [ContratoComponent],
})
export class ContratoModule { }
