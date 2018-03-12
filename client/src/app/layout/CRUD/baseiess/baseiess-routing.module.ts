import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { BaseIESSComponent } from './baseiess.component';

const routes: Routes = [
   { path: '', component: BaseIESSComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class BaseIESSRoutingModule { }
