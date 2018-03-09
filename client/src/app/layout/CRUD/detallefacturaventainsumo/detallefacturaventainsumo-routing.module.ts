import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DetalleFacturaVentaInsumoComponent } from './detallefacturaventainsumo.component';

const routes: Routes = [
   { path: '', component: DetalleFacturaVentaInsumoComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class DetalleFacturaVentaInsumoRoutingModule { }
