//FUNCION PARA MOSTRAR CATEGORIAS
function mostrarCategorias() {
    $.ajax({
        type: "POST",
        url: "../controller/Categoria_Controller.php",
        success: function(r) {
            console.log(r);
            $("#tablaDatos").html(r);

        }
    });

}

//FUNCION PARA INSERTAR CATEGORIAS
function insertarCategorias() {
    $.ajax({
        type: "POST",
        url: "../controller/Categoria_Controller.php",
        data: $('#form-insert').serialize(),
        success: function(r) {
            if (r == 1) {
                mostrar();
                alert("!Actualizado con exito!", ":D", "success");
            } else {
                alert("!Error!", ":d", "error");

            }
        }
    });

    return false;

}


//FUNCION PARA ACTUALIZAR CATEGORIAS
function actualizarCategorias() {


}


//FUNCION PARA OBTENER ID DE CATEGORIAS
function mostarID() {


}

//FUNCION PARA ELIMINAR CATEGORIAS
function eliminarCategorias() {


}

