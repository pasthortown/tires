import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ServicioVentaComponent } from './servicioventa.component';

const routes: Routes = [
   { path: '', component: ServicioVentaComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class ServicioVentaRoutingModule { }
