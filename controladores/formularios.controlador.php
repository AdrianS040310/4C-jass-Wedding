<?php
# registro

class ControladorFormularios

{
    static public function ctrRegistro()
    {
        if (isset($_POST["registroNombre"])) {
            if (
                preg_match("/^[a-zA-Z]+$/", $_POST["registroNombre"]) &&
                preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,3})+$/', $_POST["registroEmail"]) &&
                preg_match('/^[0-9a-zA-Z]+$/', $_POST["registroPassword"])
            ) {
                $tabla = "registeredusers";
                $datos = array(
                    "nombre" => $_POST["registroNombre"],
                    "email" => $_POST["registroEmail"],
                    "password" => $_POST["registroPassword"]
                );

                $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
                return $respuesta;
            } else {
                $respuesta = "error";
                return $respuesta;
            }
        }
    }

    # seleccionar registros de la tabla

    static public function ctrSeleccionarRegistros($item, $valor)
    {
        $tabla = "registeredusers";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
        return $respuesta;
    }
    # Ingreso
    public function ctrIngreso()
    {
        if (isset($_POST["ingresoEmail"])) {
            $tabla = "registeredusers";
            $item = "email";
            $valor = $_POST["ingresoEmail"];
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            // echo "<pre>";
            // print_r($respuesta);
            // "<pre>";
            if ($respuesta != null) {
                if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {
                    $_SESSION["validarIngreso"] = "ok";
                    echo "ingreso exitoso";
                } else {
                    echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                    echo '<div class="alert alert-danger">Error!!! al ingresar al sistema, email o contraseña
                no coincide</div>';
                }
            } else {
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                echo '<div class="alert alert-danger">Error!!! al ingresar al sistema, email o contraseña
                no coincide</div>';
            }
        }
    }
}
