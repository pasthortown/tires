import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ImpuestosInsumoCompraComponent } from './impuestosinsumocompra.component';

const routes: Routes = [
   { path: '', component: ImpuestosInsumoCompraComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class ImpuestosInsumoCompraRoutingModule { }
