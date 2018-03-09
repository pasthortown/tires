import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ImpuestosInsumoVentaComponent } from './impuestosinsumoventa.component';

const routes: Routes = [
   { path: '', component: ImpuestosInsumoVentaComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class ImpuestosInsumoVentaRoutingModule { }
