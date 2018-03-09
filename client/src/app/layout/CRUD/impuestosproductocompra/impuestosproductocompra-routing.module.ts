import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ImpuestosProductoCompraComponent } from './impuestosproductocompra.component';

const routes: Routes = [
   { path: '', component: ImpuestosProductoCompraComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class ImpuestosProductoCompraRoutingModule { }
