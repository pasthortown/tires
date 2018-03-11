import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { RegistroEmpleadoComponent } from './registroEmpleado.component';

const routes: Routes = [
   { path: '', component: RegistroEmpleadoComponent }
];

@NgModule({
   imports: [RouterModule.forChild(routes)],
   exports: [RouterModule]
})
export class RegistroEmpleadoRoutingModule { }
