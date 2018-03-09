import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { CaracteristicaTerrenoComponent } from './caracteristicaterreno.component';

const routes: Routes = [
   { path: '', component: CaracteristicaTerrenoComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class CaracteristicaTerrenoRoutingModule { }
