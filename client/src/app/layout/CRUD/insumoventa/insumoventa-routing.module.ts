import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { InsumoVentaComponent } from './insumoventa.component';

const routes: Routes = [
   { path: '', component: InsumoVentaComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class InsumoVentaRoutingModule { }
