import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ImpuestosProductoVentaComponent } from './impuestosproductoventa.component';

const routes: Routes = [
   { path: '', component: ImpuestosProductoVentaComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class ImpuestosProductoVentaRoutingModule { }
