<?php

require '../config/Conexion.php';

class Usuario {

    public $conn;

    public function __construct() {
        $this->conn = Conexion::Conectar();
    }

    function RegistrarUsuario() {
        $sql = "INSER INTO usuario (password, usuario, fecha_creacion,)
                VALUES (:password, :usuario:, :fecha_creacion)";
        $result = $this->conn->prepare($sql);
        $result->bindParam(":password", $datos['password'], PDO::PARAM_STR);
    }

}

//SELECT tr.numero_documento, us.password from usuario us inner join tercero tr on us.tercero_id = tr.id where tr.numero_documento = 1067943774