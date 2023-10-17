<?php
require_once "conexion.php";

class ModeloFormularios
{
    // Registro de lo que llegue del formulario

    static public function mdlRegistro($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(`token`, `nombre`, `email`, `password`) 
        VALUES (:token, :nombre, :email, :password)");

        $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt = null;
    }
    /**
     * seleccionar registros
     */
    static public function mdlSeleccionarRegistros($tabla, $item, $valor)
    {
        if ($item == null && $valor == null) {
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(date, '%d/%m/%Y') as f FROM $tabla
            ORDER BY id DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(date, '%d/%m/%Y') as f FROM $tabla 
            WHERE $item = :$item ORDER BY id DESC");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return $stmt->fetch();
            } else {
                return print_r(Conexion::conectar()->errorInfo());
            }
        }
        $stmt = null;
    }
    /**
     * Actualizar registro
     */
    static public function mdlActualizarRegistros($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre= :nombre, email=:email, password=:password
        WHERE token = :token");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);


        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt = null;
    }

    /**
     * Eliminar registro
     */

    static public function mdlEliminarRegistro($tabla, $valor)
    {
        $stmt = Conexion::conectar()->prepare("DELETE from $tabla WHERE token = :token");

        $stmt->bindParam(":token", $valor, PDO::PARAM_STR);


        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt = null;
        /**
         * Hemos terminado el CRUD
         */
    }
}
