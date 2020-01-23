<?php

class Conexion {

    static function Conectar() {

        try {
            require 'Global.php';
            $conn = new PDO(DNS, USERNAME, PASSWORD);
            return $conn;
        } catch (PDOException $exc) {
            echo 'fallo al conecatr a mysql: ' . $exc->getMessage();
        }
    }

}

?>
