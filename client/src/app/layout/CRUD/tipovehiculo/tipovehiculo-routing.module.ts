import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { TipoVehiculoComponent } from './tipovehiculo.component';

const routes: Routes = [
   { path: '', component: TipoVehiculoComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class TipoVehiculoRoutingModule { }
