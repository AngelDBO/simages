<?php

require '../config/Conexion.php';

class Crud extends Conexion {

    public $conn;

    public function __construct() {
        $this->conn = Conexion::Conectar();
    }

    public function mostrarDatos() {
        $sql = "SELECT id, nombre, apellido, email, telefono FROM persona";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchAll();
        $query->close();
    }

    public function insertarDatos($datos) {
        $sql = "INSERT INTO persona (nombre, apellido, email, telefono)  VALUES (:nombre, :apellido, :email, :telefono)";
        $query = $this->conn->prepare($sql);
        $query->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $query->bindParam(":apellido", $datos['apellido'], PDO::PARAM_STR);
        $query->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $query->bindParam(":telefono", $datos['telefono'], PDO::PARAM_INT);
        return $query->execute();
        $query->close();
    }

    public function obtenerDatos($id) {
        $sql = "SELECT nombre, apellido, email, telefono FROM persona WHERE id = :id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
        $query->close();
    }

    public function actualizarDatos($datos) {
        $sql = "UPDATE persona SET nombre = :nombre, apellido = :apellido, email = :email, telefono = :telefono WHERE id = :id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $query->bindParam(":apellido", $datos['apellido'], PDO::PARAM_STR);
        $query->bindParam(":emial", $datos['email'], PDO::PARAM_STR);
        $query->bindParam(":telefono", $datos['telefono'], PDO::PARAM_INT);
        $query->bindParam(":id", $datos['id'], PDO::PARAM_INT);
        return $query->execute();
        $query->close();
    }

    public function eliminarDatos($id) {

        $sql = "DELETE FROM persona WHERE id = :id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        return $query->execute();
        $query->close();
    }

}
