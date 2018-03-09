import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { FabricanteRoutingModule } from './fabricante-routing.module';
import { FabricanteComponent } from './fabricante.component';
import { FabricanteService } from './fabricante.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      FabricanteRoutingModule
   ],
   providers: [FabricanteService],
   declarations: [FabricanteComponent],
})
export class FabricanteModule { }
