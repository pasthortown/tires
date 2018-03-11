import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { RegistroDatosPersonalesComponent } from './registroDatosPersonales.component';

const routes: Routes = [
   { path: '', component: RegistroDatosPersonalesComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class RegistroDatosPersonalesRoutingModule { }
