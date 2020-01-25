

<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!--Tell the browser to be responsive to screen width-->
    <meta content = "width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name = "viewport">
    <link rel = "stylesheet" href = "../../../dist/adminlte.min.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <p class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                    <b>Admin</b>LTE</span>
            </p>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 1 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../../../dist/foto_logo.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../../../dist/foto_logo.png" class="img-circle" alt="User Image">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar">
                                <i class="fa fa-gears"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../../../dist/foto_logo.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>
                        <a href="#">
                            <i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview">
                        <a href="../../../inicio.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Inicio</span>
                        </a>
                    </li>

                    <!--Menu pinturas-->

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-paint-brush" aria-hidden="true"></i>
                            <span>Pinturas</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Disponibles</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> En proceso</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Categorias</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Detalles pinturas</a>
                            </li>
                        </ul>
                    </li>

                    <!--Menu factura-->

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-cart-arrow-down"></i>
                            <span>Facturacion</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Venta contado</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Venta credito</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Devolucion venta</a>
                            </li>

                        </ul>
                    </li>



                    <!--Menu factura-->

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-cubes"></i>
                            <span>Pedidos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Venta contado</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Venta credito</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Devolucion venta</a>
                            </li>

                        </ul>
                    </li>

                    <!--Menu inventario-->

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-cart-arrow-down"></i>
                            <span>Inventario</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Compras</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> ""</a>
                            </li>

                        </ul>
                    </li>


                    <!--Menu tercero-->

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Terceros</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Terceros</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Condicion comercial</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Historial</a>
                            </li>
                        </ul>
                    </li>

                    <!--Menu configuracion-->

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gear"></i>
                            <span>Configuracion</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Terceros</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Condicion comercial</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Historial</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    Crear categoria
                </button>
                <!-- Modal Categoria -->
                <?php require '../../modals/Modal_Categoria.php'; ?>

            </section>
            <hr>

            <!-- Main content -->
            <section class="content">

                <table class="table table-striped table-hover">
                    <thead class="thead-dark" class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Fecha Creacion</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conn = mysqli_connect('127.0.0.1', 'root', '', 'simages');
                        $query = ("SELECT id, nombre_categoria, descripcion_categoria, fecha_creacion  FROM categoria");

                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombre_categoria']; ?></td>
                                <td><?php echo $row['descripcion_categoria']; ?></td>
                                <td><?php echo $row['fecha_creacion']; ?></td>
                                <td>
                                    <span class="btn btn-warning btn-sm" onclick="obtenerDatos(<?php echo $row['id'] ?>)">
                                        <i class="fa fa-edit"></i>
                                    </span>
                                </td>
                                <td>
                                    <span class="btn btn-danger btn-sm" onclick="eliminarDatos(<?php echo $row['id'] ?>)">
                                        <li class="fa fa-eraser alt"></li>
                                    </span>
                                </td>
                            </tr>

                        <?php } ?>


                    </tbody>
                </table>


            </section>
        </div>

        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->


        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; <?php echo date('Y'); ?>
            <a href="https://simages.com.co">Sigames s.a.s</a>.</strong> Todos los derechos reservados.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Tab panes -->
        <div class="tab-content">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Other sets of options are available
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>
                <!-- /.form-group -->
            </form>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar-->
    <div class = "control-sidebar-bg"></div>
</div>
<!--./wrapper-->

<!--<script src = "dist/vendors.bundle.js"></script> -->
<script src="../../../dist/adminlte.min.js"></script>


<script src="../../../js/funciones.js"></script>

    <!--<script>
        var body = $('body');
        console.log(body);
    </script>-->




<script type="text/javascript">
                                    $.ajax({
                                        type: "POST",
                                        url: "../../../controller/Categoria_Controller.php'",
                                        success: function(r) {
                                            $("#tablaDatos").html(r);
                                        }
                                    });</script>
<script>
    ValidarCamposCategoria();
</script>


</body>

