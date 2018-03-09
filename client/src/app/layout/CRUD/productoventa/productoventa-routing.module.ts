import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ProductoVentaComponent } from './productoventa.component';

const routes: Routes = [
   { path: '', component: ProductoVentaComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class ProductoVentaRoutingModule { }
