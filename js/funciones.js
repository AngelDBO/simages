function ValidarCamposCategoria() {

    $(document).ready(function() {
        $('#btnCrearCategoria').click(function() {
            if ($('#C_nombre').val() == "") {
                alert("Debes ingresar un nombre para esta categoria");
                return  false;
            } else if ($('#C_descripcion').val() == "") {
                alert("Debes inngresar una breve descripcion para esta categoria");
                return  false;
            } else if ($('#C_estado').val() == "") {
                alert("Debes inngresar un estado para esta categoria");
                return  false;
            }
        });
    });
}