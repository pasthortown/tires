import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { BienesComponent } from './bienes.component';

const routes: Routes = [
   { path: '', component: BienesComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class BienesRoutingModule { }
