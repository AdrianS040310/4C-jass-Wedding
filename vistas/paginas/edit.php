<?php
if (isset($_GET["id"])) {
    $item = "id";
    $valor = $_GET["id"];

    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
    /*echo "<pre style='color: black'>";
    print_r($usuario);
    echo "</pre>";*/
}
?>
<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Edit Data
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Edit Data
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section End ========= -->

<!--=========== Edit Data Section Here ========= -->
<section class="error__section pt-120 pb-120">
    <div class="container">
        <h2 style="text-align: center">Edit Data</h2>
        <div class="d-flex justify-content-center text-center">

            <form class="p-5 bg-light" method="post">
                <div class="form-group">

                    <div style="margin-bottom:10px" class="input-group">
                        <div class="input-group-prepend">
                            <span style="height: 100%;" class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" placeholder="Write your name" id="nombre" name="actualizarNombre" />
                    </div>
                </div>
                <div style="margin-bottom:10px" class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="height: 100%;" class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" value="<?php echo $usuario["email"]; ?>" placeholder="Write your email" id="email" name="actualizarEmail" />
                    </div>
                </div>
                <div style="margin-bottom:10px" class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="height: 100%;" class="input-group-text"><i class="fa-solid fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Write your password" id="pwd" name="actualizarPassword" />

                        <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">

                        <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">
                    </div>
                </div>

                <?php

                // $actualizar = ControladorFormularios::ctrActualizarRegistro();
                // if ($actualizar == "ok") {
                //     echo '<script>
                //             if(window.history.replaceState){
                //                 window.history.replaceState(null,null, window.location.href);
                //             }
                //             </script>';
                //     echo '<div class = "alert alert-success">El usuario ha sido actualizado</div>
                //     <script>
                //     setTimeout(function(){
                //         window.location = "index.php?pagina=viewLogs";
                //     }, 3000);
                //     </script>
                //     ';
                // }
                ?>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</section>
<!--=========== Error Section End ========= -->