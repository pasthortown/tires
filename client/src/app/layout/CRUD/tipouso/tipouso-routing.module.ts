import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { TipoUsoComponent } from './tipouso.component';

const routes: Routes = [
   { path: '', component: TipoUsoComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class TipoUsoRoutingModule { }
