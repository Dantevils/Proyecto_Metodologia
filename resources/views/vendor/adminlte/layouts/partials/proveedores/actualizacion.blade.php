<!--Eliminacion de proveedores-->

<!--
Eliminacion de
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
                    <h3 class="box-title">Eliminacion de Proveedores</h3>
                </div>
                <!--FROMULARIO-->
                <!---Formulario de ingreso de herramientas-->
                <div class="box-body">
                    {!! Form::open(['route'=>'proveedor.create','metod'=>'POST','files'=>'true']) !!}
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Proveedor</th>
                            <th>Nuevo Nombre</th>
                            <th>Nuevo Fono</th>
                            <th>Nuevo Email</th>
                            <th>Nuevo Detalle</th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr>
                            <td>{{ Form::select('select_id',$array, null, array('class' => 'form-control')) }}</td>
                            <td>{!!  Form::text('nombre',null,['class'=>'form-control'])!!}</td>
                            <td>{!!  Form::text('fono', null,['class'=>'form-control'])!!}</td>
                            <td>{!!  Form::text('email', null,['class'=>'form-control'])!!}</td>
                            <td>{!!  Form::text('detalle', null,['class'=>'form-control'])!!}</td>
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