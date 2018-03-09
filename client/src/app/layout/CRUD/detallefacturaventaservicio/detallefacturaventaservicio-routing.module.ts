import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DetalleFacturaVentaServicioComponent } from './detallefacturaventaservicio.component';

const routes: Routes = [
   { path: '', component: DetalleFacturaVentaServicioComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class DetalleFacturaVentaServicioRoutingModule { }
