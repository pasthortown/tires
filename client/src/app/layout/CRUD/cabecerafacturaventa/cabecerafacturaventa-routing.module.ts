import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { CabeceraFacturaVentaComponent } from './cabecerafacturaventa.component';

const routes: Routes = [
   { path: '', component: CabeceraFacturaVentaComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class CabeceraFacturaVentaRoutingModule { }
