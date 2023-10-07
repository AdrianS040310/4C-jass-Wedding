<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Sign up
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
                    Sign up
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section End ========= -->

<!--=========== Sign up Section Here ========= -->
<section style="background-image: url(https://photoshop-kopona.com/uploads/posts/2020-07/1594278961_s4-19.jpg); background-repeat: no-repeat; background-size: 100%" class="error__section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h2 style="text-align: center">Registered for the wedding</h2>
                <div class="d-flex justify-content-center text-center">

                    <form style="border-radius: 25%" class="p-5 bg-light" method="post">
                        <div class="form-group">
                            <label class="text-dark" for="nombre">Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span style="height: 100%;" class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Write your name" id="nombre" name="registroNombre" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="email">e-mail</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span style="height: 100%;" class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Write your e-mail" id="email" name="registroEmail" />
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="pwd">Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span style="height: 100%;" class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Write your password" id="pwd" name="registroPassword" />
                            </div>

                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" />
                                <label class="text-dark" for="">Remember me</label>
                            </label>
                        </div>
                        <?php

                        $registro = ControladorFormularios::ctrRegistro();

                        if ($registro == "ok") {
                            echo '<script>
                                    if(window.history.replaceState){
                                        window.history.replaceState(null,null, window.location.href);
                                    }
                                </script>';
                            echo '<div class = "alert alert-success">The user has been registered</div>
                                <script>
                                setTimeout(function(){
                                    window.location = "index.php?pagina=viewLogs";
                                }, 3000);
                                </script>';
                        }

                        if ($registro == "error") {
                            echo '
                                <script>
                                    if(window.history.replaceState){
                                        window.history.replaceState(null,null, window.location.href);
                                    }
                                </script>';
                            echo '<div class = "alert alert-danger">¡Error! No special characters allowed.</div>
                                <script>
                                    setTimeout(function(){
                                        window.location = "index.php?pagina=home";
                                    }, 3000);
                                </script>';
                        }
                        ?>
                        <button style="background: #b99950; border: none;" type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Sign up Section End ========= -->