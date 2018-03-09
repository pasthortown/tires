import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { TipoUsoRoutingModule } from './tipouso-routing.module';
import { TipoUsoComponent } from './tipouso.component';
import { TipoUsoService } from './tipouso.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      TipoUsoRoutingModule
   ],
   providers: [TipoUsoService],
   declarations: [TipoUsoComponent],
})
export class TipoUsoModule { }
