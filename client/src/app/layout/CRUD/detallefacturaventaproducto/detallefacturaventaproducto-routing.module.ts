import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DetalleFacturaVentaProductoComponent } from './detallefacturaventaproducto.component';

const routes: Routes = [
   { path: '', component: DetalleFacturaVentaProductoComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class DetalleFacturaVentaProductoRoutingModule { }
