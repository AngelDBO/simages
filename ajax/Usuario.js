function iniciarsesion() {
    $.ajax({
        type: 'POST',
        url: "controller/usuario.php",
        data: $('#form-login').serialize(),
        success: function(r) {

        }
    });
}

