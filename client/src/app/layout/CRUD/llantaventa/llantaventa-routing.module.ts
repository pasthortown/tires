import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LlantaVentaComponent } from './llantaventa.component';

const routes: Routes = [
   { path: '', component: LlantaVentaComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class LlantaVentaRoutingModule { }
