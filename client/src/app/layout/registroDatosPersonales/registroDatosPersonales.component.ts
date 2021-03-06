import { Component, OnInit, ViewContainerRef } from '@angular/core';
import { ToastsManager } from 'ng2-toastr/ng2-toastr';
import { Persona } from './../../entidades/CRUD/Persona';
import { PersonaService } from './../CRUD/persona/persona.service';
import { Genero } from './../../entidades/CRUD/Genero';
import { GeneroService } from './../CRUD/genero/genero.service';
import { Ubicacion } from './../../entidades/CRUD/Ubicacion';
import { UbicacionService } from './../CRUD/ubicacion/ubicacion.service';

import 'rxjs/add/operator/toPromise';
import { ModalComponent } from './../bs-component/components';
import { NgbModal, ModalDismissReasons } from '@ng-bootstrap/ng-bootstrap';
import { Message } from '@angular/compiler/src/i18n/i18n_ast';

@Component({
   selector: 'app-persona',
   templateUrl: './registroDatosPersonales.component.html',
   styleUrls: ['./registroDatosPersonales.component.scss']
})

export class RegistroDatosPersonalesComponent implements OnInit {

   busy: Promise<any>;
   entidades: Persona[];
   entidadSeleccionada: Persona;
   pagina: 1;
   tamanoPagina: 20;
   paginaActual: number;
   paginaUltima: number;
   registrosPorPagina: number;
   esVisibleVentanaEdicion: boolean;
   generos: Genero[];
   paises: Ubicacion[];
   provincias: Ubicacion[];
   cantones: Ubicacion[];
   parroquias: Ubicacion[];

   constructor(public toastr: ToastsManager, vcr: ViewContainerRef, private dataService: PersonaService, private generoService: GeneroService, private ubicacionService: UbicacionService, private modalService: NgbModal) {
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

   isValid(entidadPorEvaluar: Persona): boolean {
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

   crearEntidad(): Persona {
      const nuevoPersona = new Persona();
      this.getPaises();
      nuevoPersona.id = 0;
      return nuevoPersona;
   }

   add(entidadNueva: Persona): void {
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

   update(entidadParaActualizar: Persona): void {
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

   delete(entidadParaBorrar: Persona): void {
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
      this.entidades = Persona[0];
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
      this.getGeneros();
      this.getPaises();
      this.refresh();
   }

   onSelect(entidadActual: Persona): void {
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

   getGeneros(): void {
      this.generos = [];
      this.busy = this.generoService.getAll()
      .then(respuesta => {
         this.generos = respuesta;
      })
      .catch(error => {
         console.error;
      });
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
