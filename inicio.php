<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simages | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="dist/adminlte.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">

            <?php require 'contenido/header.php'; ?>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!--Cuadro de informacion superior izquierdo sobre usuario conectado-->
                    <?php require 'contenido/infouser.php'; ?>

                    <!--Buscardor interno de la aplicacion-->
                    <?php require 'contenido/buscador.php'; ?>

                    <!--Menu de navegacion-->
                    <?php require 'contenido/sidebar.php'; ?>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!--Barra de direccion interna de la aplicacion superior derecha-->
            <?php require 'contenido/rutas.php'; ?>

            <!-- Footer de nuestra aplicacion -->
            <?php require 'contenido/footer.php'; ?>

            <!-- Configuracion de nuestra aplicacion -->
            <?php require 'contenido/configuracion.php'; ?>

            <div class="control-sidebar-bg"></div>
        </div>


  <!-- <script src="dist/vendors.bundle.js"></script> -->
        <script src="dist/adminlte.min.js"></script>

        <script>
            var body = $('body');
            console.log(body);
        </script>
    </body>

</html>