import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ImpuestosServicioCompraComponent } from './impuestosserviciocompra.component';

const routes: Routes = [
   { path: '', component: ImpuestosServicioCompraComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class ImpuestosServicioCompraRoutingModule { }
