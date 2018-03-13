import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { GeneradorCodigoBarraBienesComponent } from './generadorCodigoBarraBienes.component';

const routes: Routes = [
   { path: '', component: GeneradorCodigoBarraBienesComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class GeneradorCodigoBarraBienesRoutingModule { }
