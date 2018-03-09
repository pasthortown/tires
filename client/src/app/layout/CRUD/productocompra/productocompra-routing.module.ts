import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ProductoCompraComponent } from './productocompra.component';

const routes: Routes = [
   { path: '', component: ProductoCompraComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class ProductoCompraRoutingModule { }
