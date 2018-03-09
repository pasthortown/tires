import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { IndiceCargaComponent } from './indicecarga.component';

const routes: Routes = [
   { path: '', component: IndiceCargaComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class IndiceCargaRoutingModule { }
