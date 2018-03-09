import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { IndiceVelocidadComponent } from './indicevelocidad.component';

const routes: Routes = [
   { path: '', component: IndiceVelocidadComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class IndiceVelocidadRoutingModule { }
