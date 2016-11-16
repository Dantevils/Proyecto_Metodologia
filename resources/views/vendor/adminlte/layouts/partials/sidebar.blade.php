<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/img/avatar.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ "Home" }}</span></a></li>
            <li><a href="#"><i class='fa fa-automobile'></i> <span>{{ "Status de Pedidos" }}</span></a></li>


            <!--Heramientas-->
            <li class="treeview">
                <a href="#"><i class='fa fa-gavel'></i> <span>{{"Herramientas" }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!--Estado de Herramientas: Lista de Herramientas y datos asociados Advertencia de STOCK-->
                    <li><a href="estadoherramientas">{{ "Estado" }}</a></li>
                    <!---Ingreso de nuevos Materiales, Formulario en blanco para el ingeso-->
                    <li><a href="ingresoherramientas">{{"Ingreso" }}</a></li>
                    <!--Asignacion de Herramientas para los trabajadores Formulario y selecion multiple LISTAR TRABAJADORES -->
                    <li><a href="despachoherramientas">{{"Despacho" }}</a></li>

                </ul>
                <!--Materiales-->
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-cubes'></i> <span>{{"Materiales" }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!--Estado de Materiales: Lista de Herramientas y datos asociados Advertencia de STOCK-->
                    <li><a href="/ingresomaterial">{{ "Estado" }}</a></li>
                    <!---Ingreso de nuevos Materiales, Formulario en blanco para el ingeso-->
                    <li><a href="#">{{"Ingreso" }}</a></li>
                    <!--Asignacion de Materiales para los trabajadores Formulario y selecion multiple LISTAR TRABAJADORES -->
                    <li><a href="/ingresomaterial">{{ "Asignacion" }}</a></li>
                </ul>
            </li>
            <!--Proevedores-->
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-shopping-cart'></i> <span>{{"Proveedores" }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!--Estado de Materiales: Lista de Herramientas y datos asociados Advertencia de STOCK-->
                    <li><a href="/estadoproveedores">{{ "Listado" }}</a></li>
                    <!---Ingreso de nuevos Materiales, Formulario en blanco para el ingeso-->
                    <li><a href="/ingresoproveedores">{{"Ingreso" }}</a></li>
                    <!--Asignacion de Materiales para los trabajadores Formulario y selecion multiple LISTAR TRABAJADORES -->
                    <li><a href="#">{{ "Eliminacion" }}</a></li>
                    <li><a href="/actualizacionproveedores">{{ "Actualizacion" }}</a></li>
                </ul>
            </li>

            <!--Ingreso de nuevo proeevedor
            listado de proeevedores
            actualizacion de proeevedor
            eliminarcion de proevedor
            ->


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
