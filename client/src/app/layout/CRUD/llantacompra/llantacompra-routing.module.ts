import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LlantaCompraComponent } from './llantacompra.component';

const routes: Routes = [
   { path: '', component: LlantaCompraComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class LlantaCompraRoutingModule { }
