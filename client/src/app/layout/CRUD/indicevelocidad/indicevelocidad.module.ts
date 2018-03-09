import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { IndiceVelocidadRoutingModule } from './indicevelocidad-routing.module';
import { IndiceVelocidadComponent } from './indicevelocidad.component';
import { IndiceVelocidadService } from './indicevelocidad.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      IndiceVelocidadRoutingModule
   ],
   providers: [IndiceVelocidadService],
   declarations: [IndiceVelocidadComponent],
})
export class IndiceVelocidadModule { }
