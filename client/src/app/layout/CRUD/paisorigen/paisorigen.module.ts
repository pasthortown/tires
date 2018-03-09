import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { PaisOrigenRoutingModule } from './paisorigen-routing.module';
import { PaisOrigenComponent } from './paisorigen.component';
import { PaisOrigenService } from './paisorigen.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      PaisOrigenRoutingModule
   ],
   providers: [PaisOrigenService],
   declarations: [PaisOrigenComponent],
})
export class PaisOrigenModule { }
