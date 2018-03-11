import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LayoutComponent } from './layout.component';

const routes: Routes = [
    {
        path: '',
        component: LayoutComponent,
        children: [
            { path: '', redirectTo: 'dashboard' },
            { path: 'cabecerafacturacompra', loadChildren: './CRUD/cabecerafacturacompra/cabecerafacturacompra.module#CabeceraFacturaCompraModule' },
            { path: 'cabecerafacturaventa', loadChildren: './CRUD/cabecerafacturaventa/cabecerafacturaventa.module#CabeceraFacturaVentaModule' },
            { path: 'caracteristicaterreno', loadChildren: './CRUD/caracteristicaterreno/caracteristicaterreno.module#CaracteristicaTerrenoModule' },
            { path: 'construccionllanta', loadChildren: './CRUD/construccionllanta/construccionllanta.module#ConstruccionLlantaModule' },
            { path: 'detallefacturacomprainsumo', loadChildren: './CRUD/detallefacturacomprainsumo/detallefacturacomprainsumo.module#DetalleFacturaCompraInsumoModule' },
            { path: 'detallefacturacompraproducto', loadChildren: './CRUD/detallefacturacompraproducto/detallefacturacompraproducto.module#DetalleFacturaCompraProductoModule' },
            { path: 'detallefacturacompraservicio', loadChildren: './CRUD/detallefacturacompraservicio/detallefacturacompraservicio.module#DetalleFacturaCompraServicioModule' },
            { path: 'detallefacturaventainsumo', loadChildren: './CRUD/detallefacturaventainsumo/detallefacturaventainsumo.module#DetalleFacturaVentaInsumoModule' },
            { path: 'detallefacturaventaproducto', loadChildren: './CRUD/detallefacturaventaproducto/detallefacturaventaproducto.module#DetalleFacturaVentaProductoModule' },
            { path: 'detallefacturaventaservicio', loadChildren: './CRUD/detallefacturaventaservicio/detallefacturaventaservicio.module#DetalleFacturaVentaServicioModule' },
            { path: 'empleado', loadChildren: './CRUD/empleado/empleado.module#EmpleadoModule' },
            { path: 'fabricante', loadChildren: './CRUD/fabricante/fabricante.module#FabricanteModule' },
            { path: 'genero', loadChildren: './CRUD/genero/genero.module#GeneroModule' },
            { path: 'impuestosinsumocompra', loadChildren: './CRUD/impuestosinsumocompra/impuestosinsumocompra.module#ImpuestosInsumoCompraModule' },
            { path: 'impuestosinsumoventa', loadChildren: './CRUD/impuestosinsumoventa/impuestosinsumoventa.module#ImpuestosInsumoVentaModule' },
            { path: 'impuestosproductocompra', loadChildren: './CRUD/impuestosproductocompra/impuestosproductocompra.module#ImpuestosProductoCompraModule' },
            { path: 'impuestosproductoventa', loadChildren: './CRUD/impuestosproductoventa/impuestosproductoventa.module#ImpuestosProductoVentaModule' },
            { path: 'impuestosserviciocompra', loadChildren: './CRUD/impuestosserviciocompra/impuestosserviciocompra.module#ImpuestosServicioCompraModule' },
            { path: 'impuestosservicioventa', loadChildren: './CRUD/impuestosservicioventa/impuestosservicioventa.module#ImpuestosServicioVentaModule' },
            { path: 'indicecarga', loadChildren: './CRUD/indicecarga/indicecarga.module#IndiceCargaModule' },
            { path: 'indicevelocidad', loadChildren: './CRUD/indicevelocidad/indicevelocidad.module#IndiceVelocidadModule' },
            { path: 'insumocompra', loadChildren: './CRUD/insumocompra/insumocompra.module#InsumoCompraModule' },
            { path: 'insumoventa', loadChildren: './CRUD/insumoventa/insumoventa.module#InsumoVentaModule' },
            { path: 'persona', loadChildren: './CRUD/persona/persona.module#PersonaModule' },
            { path: 'productocompra', loadChildren: './CRUD/productocompra/productocompra.module#ProductoCompraModule' },
            { path: 'productoventa', loadChildren: './CRUD/productoventa/productoventa.module#ProductoVentaModule' },
            { path: 'proveedor', loadChildren: './CRUD/proveedor/proveedor.module#ProveedorModule' },
            { path: 'serviciocompra', loadChildren: './CRUD/serviciocompra/serviciocompra.module#ServicioCompraModule' },
            { path: 'servicioventa', loadChildren: './CRUD/servicioventa/servicioventa.module#ServicioVentaModule' },
            { path: 'sucursal', loadChildren: './CRUD/sucursal/sucursal.module#SucursalModule' },
            { path: 'tipouso', loadChildren: './CRUD/tipouso/tipouso.module#TipoUsoModule' },
            { path: 'tipovehiculo', loadChildren: './CRUD/tipovehiculo/tipovehiculo.module#TipoVehiculoModule' },
            { path: 'ubicacion', loadChildren: './CRUD/ubicacion/ubicacion.module#UbicacionModule' },
            { path: 'vehiculo', loadChildren: './CRUD/vehiculo/vehiculo.module#VehiculoModule' },
            { path: 'llanta', loadChildren: './CRUD/llanta/llanta.module#LlantaModule' },
            { path: 'llantacompra', loadChildren: './CRUD/llantacompra/llantacompra.module#LlantaCompraModule' },
            { path: 'llantaventa', loadChildren: './CRUD/llantaventa/llantaventa.module#LlantaVentaModule' },
            { path: 'cargo', loadChildren: './CRUD/cargo/cargo.module#CargoModule' },
            { path: 'bienes', loadChildren: './CRUD/bienes/bienes.module#BienesModule' },
            { path: 'marca', loadChildren: './CRUD/marca/marca.module#MarcaModule' },
            { path: 'registrodatospersonales', loadChildren: './registroDatosPersonales/registroDatosPersonales.module#RegistroDatosPersonalesModule' },
            { path: 'generadorcodigobarrasbienes', loadChildren: './generadorCodigoBarraBienes/generadorCodigoBarraBienes.module#GeneradorCodigoBarraBienesModule' },
            { path: 'dashboard', loadChildren: './dashboard/dashboard.module#DashboardModule' },
            { path: 'charts', loadChildren: './charts/charts.module#ChartsModule' },
            { path: 'tables', loadChildren: './tables/tables.module#TablesModule' },
            { path: 'forms', loadChildren: './form/form.module#FormModule' },
            { path: 'bs-element', loadChildren: './bs-element/bs-element.module#BsElementModule' },
            { path: 'grid', loadChildren: './grid/grid.module#GridModule' },
            { path: 'components', loadChildren: './bs-component/bs-component.module#BsComponentModule' },
            { path: 'blank-page', loadChildren: './blank-page/blank-page.module#BlankPageModule' }
        ]
    }
];

@NgModule({
    imports: [RouterModule.forChild(routes)],
    exports: [RouterModule]
})
export class LayoutRoutingModule {}
