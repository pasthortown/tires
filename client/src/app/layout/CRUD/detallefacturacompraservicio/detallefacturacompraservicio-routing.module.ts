import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DetalleFacturaCompraServicioComponent } from './detallefacturacompraservicio.component';

const routes: Routes = [
   { path: '', component: DetalleFacturaCompraServicioComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class DetalleFacturaCompraServicioRoutingModule { }
