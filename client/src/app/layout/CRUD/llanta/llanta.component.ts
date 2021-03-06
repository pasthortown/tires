import { Component, OnInit, ViewContainerRef } from '@angular/core';
import { ToastsManager } from 'ng2-toastr/ng2-toastr';
import { llanta } from './../../../entidades/CRUD/llanta';
import { llantaService } from './llanta.service';

import 'rxjs/add/operator/toPromise';
import { ModalComponent } from './../../bs-component/components';
import { NgbModal, ModalDismissReasons } from '@ng-bootstrap/ng-bootstrap';
import { Message } from '@angular/compiler/src/i18n/i18n_ast';

import { Ubicacion } from '../../../entidades/CRUD/Ubicacion';
import { TipoUso } from '../../../entidades/CRUD/TipoUso';
import { CaracteristicaTerreno } from './../../../entidades/CRUD/CaracteristicaTerreno';
import { Fabricante } from './../../../entidades/CRUD/Fabricante';
import { IndiceVelocidad } from './../../../entidades/CRUD/IndiceVelocidad';
import { IndiceCarga } from './../../../entidades/CRUD/IndiceCarga';
import { ConstruccionLlanta } from './../../../entidades/CRUD/ConstruccionLlanta';

import { UbicacionService } from './../ubicacion/ubicacion.service';
import { TipoUsoService } from './../tipouso/tipouso.service';
import { CaracteristicaTerrenoService } from './../caracteristicaterreno/caracteristicaterreno.service';
import { FabricanteService } from './../fabricante/fabricante.service';
import { IndiceVelocidadService } from './../indicevelocidad/indicevelocidad.service';
import { IndiceCargaService } from './../indicecarga/indicecarga.service';
import { ConstruccionLlantaService } from './../construccionllanta/construccionllanta.service';

@Component({
   selector: 'app-llanta',
   templateUrl: './llanta.component.html',
   styleUrls: ['./llanta.component.scss']
})

export class llantaComponent implements OnInit {

   busy: Promise<any>;
   entidades: llanta[];
   entidadSeleccionada: llanta;
   pagina: 1;
   tamanoPagina: 20;
   paginaActual: number;
   paginaUltima: number;
   registrosPorPagina: number;
   esVisibleVentanaEdicion: boolean;
   construccionesllanta: ConstruccionLlanta[];
   indicescarga: IndiceCarga[];
   indicesvelocidad: IndiceVelocidad[];
   fabricantes: Fabricante[];
   paisesorigen: Ubicacion[];
   caracteristicasterreno: CaracteristicaTerreno[];
   tiposuso: TipoUso[];

   constructor(public toastr: ToastsManager,
                vcr: ViewContainerRef,
                private dataService: llantaService,
                private ubicacionService: UbicacionService,
                private caracteristicaTerrenoService: CaracteristicaTerrenoService,
                private fabricanteService: FabricanteService,
                private tipoUsoService: TipoUsoService,
                private indiceVelocidadService: IndiceVelocidadService,
                private indiceCargaService: IndiceCargaService,
                private construccionLlantaService: ConstruccionLlantaService,
                private modalService: NgbModal) {
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

   isValid(entidadPorEvaluar: llanta): boolean {
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

   crearEntidad(): llanta {
      const nuevollanta = new llanta();
      nuevollanta.id = 0;
      return nuevollanta;
   }

   add(entidadNueva: llanta): void {
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

   update(entidadParaActualizar: llanta): void {
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

   delete(entidadParaBorrar: llanta): void {
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
      this.entidades = llanta[0];
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
      this.getconstruccionesllanta();
      this.getindicescarga();
      this.getindicesvelocidad();
      this.getfabricantes();
      this.getpaisesorigen();
      this.getcaracteristicasterreno();
      this.gettiposuso();
      this.refresh();
   }

   onSelect(entidadActual: llanta): void {
      this.entidadSeleccionada = entidadActual;
   }

    getconstruccionesllanta(){
      this.construccionesllanta=[];
      this.busy = this.construccionLlantaService.getAll()
      .then(respuesta => {
        this.construccionesllanta = respuesta;
      })
      .catch(error => {
        console.log(error);
      });
    }

    getindicescarga(){
      this.indicescarga=[];
      this.busy = this.indiceCargaService.getAll()
      .then(respuesta => {
        this.indicescarga = respuesta;
      })
      .catch(error => {
        console.log(error);
      });
    }

    getindicesvelocidad(){
      this.indicesvelocidad=[];
      this.busy = this.indiceVelocidadService.getAll()
      .then(respuesta => {
        this.indicesvelocidad = respuesta;
      })
      .catch(error => {
        console.log(error);
      });
    }

    getfabricantes(){
      this.fabricantes=[];
      this.busy = this.fabricanteService.getAll()
      .then(respuesta => {
        this.fabricantes = respuesta;
      })
      .catch(error => {
        console.log(error);
      });
    }

    getpaisesorigen(){
      this.paisesorigen=[];
      this.busy = this.ubicacionService.getAll()
      .then(respuesta => {
        this.paisesorigen = respuesta;
      })
      .catch(error => {
        console.log(error);
      });
    }

    getcaracteristicasterreno(){
      this.caracteristicasterreno=[];
      this.busy = this.caracteristicaTerrenoService.getAll()
      .then(respuesta => {
        this.caracteristicasterreno = respuesta;
      })
      .catch(error => {
        console.log(error);
      });
    }

    gettiposuso(){
      this.tiposuso=[];
      this.busy = this.tipoUsoService.getAll()
      .then(respuesta => {
        this.tiposuso = respuesta;
      })
      .catch(error => {
        console.log(error);
      });
    }
}
