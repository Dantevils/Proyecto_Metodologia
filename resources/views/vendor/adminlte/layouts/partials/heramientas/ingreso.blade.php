<!--En esta plantilla es para el ingreso de heramientas, las cuales aumentara el sctock, o creara una nueva en la lista
 que se encuentra en la base de datos.->


 <!--Extendemos de las plantillas padres-->
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
@include('adminlte::layouts.partials.htmlheader')
@show

<body class="skin-blue sidebar-mini">
<!--Estandar    skin-blue sidebar-mini  -->
<div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('adminlte::layouts.partials.contentheader')

                <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('adminlte::layouts.partials.controlsidebar')

    @include('adminlte::layouts.partials.footer')

</div><!-- ./wrapper -->

@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

</body>
</html>
