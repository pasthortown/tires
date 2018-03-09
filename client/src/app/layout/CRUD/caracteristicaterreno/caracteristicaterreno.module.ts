import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { CaracteristicaTerrenoRoutingModule } from './caracteristicaterreno-routing.module';
import { CaracteristicaTerrenoComponent } from './caracteristicaterreno.component';
import { CaracteristicaTerrenoService } from './caracteristicaterreno.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      CaracteristicaTerrenoRoutingModule
   ],
   providers: [CaracteristicaTerrenoService],
   declarations: [CaracteristicaTerrenoComponent],
})
export class CaracteristicaTerrenoModule { }
