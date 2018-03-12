import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MotivoFinComponent } from './motivofin.component';

const routes: Routes = [
   { path: '', component: MotivoFinComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class MotivoFinRoutingModule { }
