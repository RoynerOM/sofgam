<?php
if (isset($_GET["id"])) {
    $security = explode("~", base64_decode($_GET["id"]));

    if ($security[1] == $_SESSION["admin"]->token_user) {
        $select = "modulo,tipo,accion,fecha_accion,realizadas,descripcion,imagen";
        $url = "acciones_realizadas?select=" . $select . "&linkTo=id&equalTo=" . $security[0];
        $method = "GET";
        $fields = array();
        $response = CurlController::request($url, $method, $fields);
        if ($response->status == 200) {
            $result = $response->results[0];
        } else {
            echo '<script>
			    window.location = "/realizada";
            </script>';
        }
    } else {
        echo '<script>
			window.location = "/realizada";
        </script>';
    }
} else {
    echo '<script>
            window.location = "/realizada";
    </script>';
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Acciones realizadas</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/realizada">Acciones realizadas</a></li>
                    <li class="breadcrumb-item active">Editar accion realizada</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content mb-5">
    <div class="container-fluid mb-2">
        <div class="card card-dark card-outline">
            <form method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $security[0] ?>" name="idAccion">
                <div class="card-header">
                    <?php
                    require_once "controllers/accion.controller.php";

                    $edit = new AccionController();
                    $edit->edit($security[0]);
                    ?>
                    <div class="col-md-8 offset-md-2">
                        <!--=====================================
                        Modulo
                        ======================================-->
                        <div class="form-group mt-5">
                            <label>Modulo</label>
                            <input type="text" class="form-control" value="<?php echo $result->modulo ?>" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'text')" name="modulo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Tipo de accion realizada
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Tipo de accion realizada</label>
                            <input type="text" class="form-control" value="<?php echo $result->tipo ?>" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'text')" name="tipo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Accion
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Accion realizada</label>
                            <input type="text" class="form-control" value="<?php echo $result->accion ?>" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'text')" name="accion" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Fecha de la accion
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Fecha de la accion</label>
                            <input type="date" class="form-control" value="<?php echo $result->fecha_accion ?>" name="fecha_accion" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Cantidad de acciones realizada
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Cantidad realizadas</label>
                            <input type="number" class="form-control" value="<?php echo $result->realizadas ?>" name="realizadas" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Descripcion
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Descripción</label>
                            <input type="text" class="form-control" value="<?php echo $result->descripcion ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="descripcion" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/realizada" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>