import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { MarcaRoutingModule } from './marca-routing.module';
import { MarcaComponent } from './marca.component';
import { MarcaService } from './marca.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      MarcaRoutingModule
   ],
   providers: [MarcaService],
   declarations: [MarcaComponent],
})
export class MarcaModule { }
