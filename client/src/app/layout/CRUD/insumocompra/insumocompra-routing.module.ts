import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { InsumoCompraComponent } from './insumocompra.component';

const routes: Routes = [
   { path: '', component: InsumoCompraComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class InsumoCompraRoutingModule { }
