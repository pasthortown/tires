import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { PaisOrigenComponent } from './paisorigen.component';

const routes: Routes = [
   { path: '', component: PaisOrigenComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class PaisOrigenRoutingModule { }
