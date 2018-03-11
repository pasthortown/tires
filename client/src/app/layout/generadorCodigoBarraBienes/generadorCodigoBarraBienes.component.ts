import { Component, OnInit, ViewContainerRef } from '@angular/core';
import { ToastsManager } from 'ng2-toastr/ng2-toastr';
import { Bienes } from './../../entidades/CRUD/Bienes';
import { BienesService } from './../CRUD/bienes/bienes.service';

import 'rxjs/add/operator/toPromise';
import { ModalComponent } from './../bs-component/components';
import { NgbModal, ModalDismissReasons } from '@ng-bootstrap/ng-bootstrap';
import { Message } from '@angular/compiler/src/i18n/i18n_ast';

@Component({
   selector: 'app-persona',
   templateUrl: './generadorCodigoBarraBienes.component.html',
   styleUrls: ['./generadorCodigoBarraBienes.component.scss']
})

export class GeneradorCodigoBarraBienesComponent implements OnInit {

   busy: Promise<any>;
   bienes: Bienes[];

   constructor(public toastr: ToastsManager, vcr: ViewContainerRef, private dataService: BienesService) {
      this.toastr.setRootViewContainerRef(vcr);
   }

   getAll(): void {
      this.bienes = [];
      this.busy = this.dataService
      .getAll()
      .then(entidadesRecuperadas => {
         this.bienes = entidadesRecuperadas;
         this.toastr.success('La consulta fue exitosa', 'Consulta');
      })
      .catch(error => {
         this.toastr.success('Se produjo un error', 'Consulta');
      });
   }

   refresh(): void {
      this.getAll();
   }

   ngOnInit() {
      this.refresh();
   }

   imprimir(): void {

   }
}
