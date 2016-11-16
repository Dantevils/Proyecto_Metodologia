<!--INGRESO DE PROVEEDORES-->

<!--
Ingreso de Herramientas: Mostrara una un formulario solicitando los datos para el ingreso de materiales
-->
<html>
@include('adminlte::layouts.partials.htmlheader')
<!DOCTYPE html>
<html>
@include('adminlte::layouts.partials.htmlheader')
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    @include('adminlte::layouts.partials.mainheader')
    @include('adminlte::layouts.partials.sidebar')

    <div class="content-wrapper">
        @include('adminlte::layouts.partials.contentheader')
                <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ingreso de un nuevo Proveedor</h3>
                </div>
                <!--FROMULARIO-->
                <!---Formulario de ingreso de herramientas-->
                <div class="box-body">
                    {!! Form::open(['route'=>'proveedor.store','metod'=>'POST','files'=>'true']) !!}
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Contacto</th>
                            <th>Email</th>
                            <th>Detalle</th>
                            <!--Direccion puede que falte-->

                        </tr>
                        </thead>

                        <tbody>

                        <tr>
                            <td>{!!  Form::text('nombre', null,['class'=>'form-control','required'])!!}</td>
                            <td>{!!  Form::text('fono', null,['class'=>'form-control','required'])!!}</td>
                            <td>{!!  Form::email('email', null,['class'=>'form-control','required'])!!}</td>
                            <td>{!!  Form::text('detalle', null,['class'=>'form-control','required'])!!}</td>
                        </tr>

                        </tbody>

                    </table>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div> {!! Form::close() !!}
            </div>
            <!--FIN DE FORMULARIO-->

            @yield('main-content')

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('adminlte::layouts.partials.controlsidebar')

    @include('adminlte::layouts.partials.footer')

</div><!-- ./wrapper -->

@include('adminlte::layouts.partials.scripts')

</body>

<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
</html>

