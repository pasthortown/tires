import { Component, OnInit, ViewContainerRef } from '@angular/core';
import { ToastsManager } from 'ng2-toastr/ng2-toastr';
import { Sucursal } from './../../../entidades/CRUD/Sucursal';
import { SucursalService } from './sucursal.service';

import 'rxjs/add/operator/toPromise';
import { ModalComponent } from './../../bs-component/components';
import { NgbModal, ModalDismissReasons } from '@ng-bootstrap/ng-bootstrap';
import { Message } from '@angular/compiler/src/i18n/i18n_ast';

import { Ubicacion } from './../../../entidades/CRUD/Ubicacion';
import { UbicacionService } from './../ubicacion/ubicacion.service';

@Component({
   selector: 'app-sucursal',
   templateUrl: './sucursal.component.html',
   styleUrls: ['./sucursal.component.scss']
})

export class SucursalComponent implements OnInit {

   busy: Promise<any>;
   entidades: Sucursal[];
   entidadSeleccionada: Sucursal;
   pagina: 1;
   tamanoPagina: 20;
   paginaActual: number;
   paginaUltima: number;
   registrosPorPagina: number;
   esVisibleVentanaEdicion: boolean;
   paises: Ubicacion[];
   provincias: Ubicacion[];
   cantones: Ubicacion[];
   parroquias: Ubicacion[];

   constructor(public toastr: ToastsManager, vcr: ViewContainerRef, private dataService: SucursalService, private ubicacionService: UbicacionService, private modalService: NgbModal) {
      this.toastr.setRootViewContainerRef(vcr);
   }

   open(content, nuevo){
      if(nuevo){
         this.resetEntidadSeleccionada();
      }
      this.modalService.open(content)
      .result
      .then((result => {
         if(result=="save"){
            this.aceptar();
         }
      }),(result => {
         //Esto se ejecuta si la ventana se cierra sin aceptar los cambios
      }));
   }

   estaSeleccionado(porVerificar): boolean {
      if (this.entidadSeleccionada == null) {
         return false;
      }
      return porVerificar.id === this.entidadSeleccionada.id;
   }

   cerrarVentanaEdicion(): void {
      this.esVisibleVentanaEdicion = false;
   }

   mostrarVentanaNuevo(): void {
      this.resetEntidadSeleccionada();
      this.esVisibleVentanaEdicion = true;
   }

   mostrarVentanaEdicion(): void {
      this.esVisibleVentanaEdicion = true;
   }

   resetEntidadSeleccionada(): void {
      this.entidadSeleccionada = this.crearEntidad();
   }

   getAll(): void {
      this.busy = this.dataService
      .getAll()
      .then(entidadesRecuperadas => {
         this.entidades = entidadesRecuperadas
         if (entidadesRecuperadas == null || entidadesRecuperadas.length === 0) {
            this.toastr.success('¡No hay datos!', 'Consulta');
         } else {
            this.toastr.success('La consulta fue exitosa', 'Consulta');
         }
      })
      .catch(error => {
         this.toastr.success('Se produjo un error', 'Consulta');
      });
   }

   getPagina(pagina: number, tamanoPagina: number): void {
      this.busy = this.dataService
      .getPagina(pagina, tamanoPagina)
      .then(entidadesRecuperadas => {
         this.entidades = entidadesRecuperadas
         if (entidadesRecuperadas == null || entidadesRecuperadas.length === 0) {
            this.toastr.success('¡No hay datos!', 'Consulta');
         } else {
            this.toastr.success('La consulta fue exitosa', 'Consulta');
         }
      })
      .catch(error => {
         this.toastr.success('Se produjo un error', 'Consulta');
      });
   }

   getNumeroPaginas(tamanoPagina: number): void{
      this.busy = this.dataService
      .getNumeroPaginas(tamanoPagina)
      .then(respuesta => {
         this.paginaUltima = respuesta.paginas;
      })
      .catch(error => {
         //Error al leer las paginas
      });
   }

   isValid(entidadPorEvaluar: Sucursal): boolean {
      return true;
   }

   aceptar(): void {
      if (!this.isValid(this.entidadSeleccionada)) {return;}
      if (this.entidadSeleccionada.id === undefined || this.entidadSeleccionada.id === 0) {
         this.add(this.entidadSeleccionada);
      } else {
         this.update(this.entidadSeleccionada);
      }
      this.cerrarVentanaEdicion();
   }

   crearEntidad(): Sucursal {
      const nuevoSucursal = new Sucursal();
      nuevoSucursal.id = 0;
      this.getPaises();
      return nuevoSucursal;
   }

   add(entidadNueva: Sucursal): void {
      this.busy = this.dataService.create(entidadNueva)
      .then(respuesta => {
         if(respuesta){
            this.toastr.success('La creación fue exitosa', 'Creación');
         }else{
            this.toastr.warning('Se produjo un error', 'Creación');
         }
         this.refresh();
      })
      .catch(error => {
         this.toastr.warning('Se produjo un error', 'Creación');
      });
   }

   update(entidadParaActualizar: Sucursal): void {
      this.busy = this.dataService.update(entidadParaActualizar)
      .then(respuesta => {
         if(respuesta){
            this.toastr.success('La actualización fue exitosa', 'Actualización');
         }else{
            this.toastr.warning('Se produjo un error', 'Actualización');
         }
         this.refresh();
      })
      .catch(error => {
         this.toastr.warning('Se produjo un error', 'Actualización');
      });
   }

   delete(entidadParaBorrar: Sucursal): void {
      this.busy = this.dataService.remove(entidadParaBorrar.id)
      .then(respuesta => {
         if(respuesta){
            this.toastr.success('La eliminación fue exitosa', 'Eliminación');
         }else{
            this.toastr.warning('Se produjo un error', 'Eliminación');
         }
         this.refresh();
      })
      .catch(error => {
         this.toastr.success('Se produjo un error', 'Eliminación');
      });
   }

   refresh(): void {
      this.getNumeroPaginas(this.registrosPorPagina);
      this.getPagina(this.paginaActual,this.registrosPorPagina);
      this.entidades = Sucursal[0];
      this.entidadSeleccionada = this.crearEntidad();
   }

   getPaginaPrimera():void {
      this.paginaActual = 1;
      this.refresh();
   }

   getPaginaAnterior():void {
      if(this.paginaActual>1){
         this.paginaActual = this.paginaActual - 1;
         this.refresh();
      }
   }

   getPaginaSiguiente():void {
      if(this.paginaActual < this.paginaUltima){
         this.paginaActual = this.paginaActual + 1;
         this.refresh();
      }
   }

   getPaginaUltima():void {
      this.paginaActual = this.paginaUltima;
      this.refresh();
   }

   ngOnInit() {
      this.paginaActual=1;
      this.registrosPorPagina = 5;
      this.getPaises();
      this.refresh();
   }

   onSelect(entidadActual: Sucursal): void {
      this.entidadSeleccionada = entidadActual;
      if(this.entidadSeleccionada.idUbicacionPais != ''){
         this.getProvincias(this.entidadSeleccionada.idUbicacionPais);
      }
      if(this.entidadSeleccionada.idUbicacionProvincia != ''){
         this.getCantones(this.entidadSeleccionada.idUbicacionProvincia);
      }
      if(this.entidadSeleccionada.idUbicacionCanton != ''){
         this.getParroquias(this.entidadSeleccionada.idUbicacionCanton);
      }
   }

   getPaises(): void {
      this.paises = [];
      this.provincias = [];
      this.cantones = [];
      this.parroquias = [];
      this.busy = this.ubicacionService.getFiltrado('codigoPadre', 'coincide', '0')
      .then(respuesta => {
         this.paises = respuesta;
      })
      .catch(error => {
         console.error;
      });
   }

   getProvincias(pais: string): void {
      this.provincias = [];
      this.cantones = [];
      this.parroquias = [];
      this.busy = this.ubicacionService.getFiltrado('codigoPadre', 'coincide', pais)
      .then(respuesta => {
         this.provincias = respuesta;
      })
      .catch(error => {
         console.error;
      });
   }

   getCantones(provincia): void {
      this.cantones = [];
      this.parroquias = [];
      this.busy = this.ubicacionService.getFiltrado('codigoPadre', 'coincide', provincia)
      .then(respuesta => {
         this.cantones = respuesta;
      })
      .catch(error => {
         console.error;
      });
   }

   getParroquias(canton): void {
      this.parroquias = [];
      this.busy = this.ubicacionService.getFiltrado('codigoPadre', 'coincide', canton)
      .then(respuesta => {
         this.parroquias = respuesta;
      })
      .catch(error => {
         console.error;
      });
   }
}
