import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { FabricanteComponent } from './fabricante.component';

const routes: Routes = [
   { path: '', component: FabricanteComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class FabricanteRoutingModule { }
