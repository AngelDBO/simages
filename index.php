<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simages | Log in</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="dist/adminlte.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <script src="dist/adminlte.min.js"></script>
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#">
                    <b>Sima</b>ges</a>
            </div>

            <div class="login-box-body">

                <form id="form-login">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="" id="email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="">
                        <span class="glyphicon glyphicon-lock form-control-feedback" id="pass"></span>
                    </div>
                    <div class="row">

                        <div class="col-xs-4">
                            <input type="button" value="Iniciar" id="btnloguear"class="btn btn-primary btn-block btn-flat">
                        </div>

                    </div>
                </form>
                <br>
                <a href="#">Olvide mi contraseña</a>
                <br>
                <br>
                <a href="#" class="text-center">Register a new membership</a>

            </div>

        </div>

    </body>

    <?php require 'scripts/scripts.php'; ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#btnloguear').click(function() {
                if ($('#email').val() == "") {
                    alertify.alert("Debes ingresar tu email");
                    return false;
                } else if ($('#pass').val() == "") {
                    alertify.alert("Debes ingresar contraseña");
                    return false;
                }
            });
        });

    </script>

    <script type="text/javascript" src="assets/js/Usuario.js"></script>

</html>