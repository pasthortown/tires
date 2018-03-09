import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ConstruccionLlantaComponent } from './construccionllanta.component';

const routes: Routes = [
   { path: '', component: ConstruccionLlantaComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class ConstruccionLlantaRoutingModule { }
