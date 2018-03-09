import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { llantaComponent } from './llanta.component';

const routes: Routes = [
   { path: '', component: llantaComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class llantaRoutingModule { }
