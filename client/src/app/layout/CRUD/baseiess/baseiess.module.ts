import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { BaseIESSRoutingModule } from './baseiess-routing.module';
import { BaseIESSComponent } from './baseiess.component';
import { BaseIESSService } from './baseiess.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      BaseIESSRoutingModule
   ],
   providers: [BaseIESSService],
   declarations: [BaseIESSComponent],
})
export class BaseIESSModule { }
