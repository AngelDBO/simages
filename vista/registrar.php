
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simages | Log in</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../dist/adminlte.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <script src="../dist/adminlte.min.js"></script>
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../index.php">
                    <b>Sima</b>ges</a>
            </div>

            <div class="login-box-body">
                <h3 style="text-align: center;">Formulario de registro</h3>
                <br>
                <form id="formularioRegistro">
                    <div class="form-group has-feedback">

                        <input type="email" class="form-control" placeholder="Ingrese su usuario" id="usuario">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">

                        <input type="password" class="form-control" placeholder="Ingrese su contraseña">
                        <span class="glyphicon glyphicon-lock form-control-feedback" id="pass"></span>
                    </div>
                    <div class="form-group has-feedback">

                        <input type="text" class="form-control" id="email" placeholder="Ingrese su email" >
                        <span class="glyphicon glyphicon-inbox form-control-feedback" ></span>
                    </div>

                    <div class="row">

                        <div class="col-xs-4">
                            <input type="button" value="Registrar" id="btnregistrar"class="btn btn-primary btn-block ">
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </body>

    <?php require '../scripts/scripts.php'; ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#btnregistrar').click(function() {
                if ($('#usuario').val() == "") {
                    alertify.alert("Debes ingresar su usuario");
                    return false;
                } else if ($('#pass').val() == "") {
                    alertify.alert("Debes ingresar contraseña");
                    return false;
                } else if ($('#email') == "") {
                    alertify.alert("Debes ingresar tu correo");
                    return false;
                }
            });
        });

    </script>

    <script type="text/javascript" src="assets/js/Usuario.js"></script>

</html>