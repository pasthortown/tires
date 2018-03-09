import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ServicioCompraComponent } from './serviciocompra.component';

const routes: Routes = [
   { path: '', component: ServicioCompraComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class ServicioCompraRoutingModule { }
