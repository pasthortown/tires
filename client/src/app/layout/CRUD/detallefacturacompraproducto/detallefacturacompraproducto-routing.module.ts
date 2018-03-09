import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DetalleFacturaCompraProductoComponent } from './detallefacturacompraproducto.component';

const routes: Routes = [
   { path: '', component: DetalleFacturaCompraProductoComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class DetalleFacturaCompraProductoRoutingModule { }
