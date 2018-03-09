import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { TipoLabradoRoutingModule } from './tipolabrado-routing.module';
import { TipoLabradoComponent } from './tipolabrado.component';
import { TipoLabradoService } from './tipolabrado.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      TipoLabradoRoutingModule
   ],
   providers: [TipoLabradoService],
   declarations: [TipoLabradoComponent],
})
export class TipoLabradoModule { }
