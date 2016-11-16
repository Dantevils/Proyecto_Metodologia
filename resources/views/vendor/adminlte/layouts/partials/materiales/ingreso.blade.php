<!DOCTYPE html>
<html>
@include('adminlte::layouts.partials.htmlheader')
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    @include('adminlte::layouts.partials.mainheader') <!--mainheader2-->
    @include('adminlte::layouts.partials.sidebar') <!--sidebar2-->
    <div class="content-wrapper">
        @include('adminlte::layouts.partials.contentheader')
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Status de Materiales</h3>
                </div>
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Buscar...">
                              <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                              </span>
                    </div>
                </form>
                <div class="box-body">
                    <table id="status" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>N°</th>
                            <th>Marca</th>
                            <th>Descripcion</th>
                            <th>Stock Actual</th>
                            <th>Stock Total</th>
                            <th>Pedidos</th>

                        </tr>
                          </thead>
                          <tbody>



                        @foreach($materiales as $mat)
                              <tr>
                                  <td WIDTH="10">{{$mat->id}}</td>
                                  <td>{{$mat->nombre}}</td>
                                  <td>{{$mat->proveedor}}</td>
                                  <td>{{$mat->stock_inicial}}</td>
                                  <td>{{$mat->stock_minimo}}</td>

                              </tr>
                           @endforeach

                        </tfoot>
                    </table>
                </div>
            </div>



            {{--<div>
                {!! Form::open(array('url' => 'foo/bar')) !!}
                {!! Form::close() !!}
            </div>
            --}}

            @yield('main-content')
        </section>
    </div>
    @include('adminlte::layouts.partials.controlsidebar')
    @include('adminlte::layouts.partials.footer')
</div>
@include('adminlte::layouts.partials.scripts')
</body>
{{--<script>
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
--}}
</html>

