import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { TipoLabradoComponent } from './tipolabrado.component';

const routes: Routes = [
   { path: '', component: TipoLabradoComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class TipoLabradoRoutingModule { }
