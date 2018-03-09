import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DetalleFacturaCompraInsumoComponent } from './detallefacturacomprainsumo.component';

const routes: Routes = [
   { path: '', component: DetalleFacturaCompraInsumoComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class DetalleFacturaCompraInsumoRoutingModule { }
