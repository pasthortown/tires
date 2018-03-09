import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { ClienteRoutingModule } from './cliente-routing.module';
import { ClienteComponent } from './cliente.component';
import { ClienteService } from './cliente.service';

@NgModule({
   imports: [
      CommonModule,
      FormsModule,
      ClienteRoutingModule
   ],
   providers: [ClienteService],
   declarations: [ClienteComponent],
})
export class ClienteModule { }
