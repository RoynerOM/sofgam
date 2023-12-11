<?php
if (isset($_GET["id"])) {
    $security = explode("~", base64_decode($_GET["id"]));

    if ($security[1] == $_SESSION["admin"]->token_user) {
        $select = "nombre,descripcion,objetivo,meta,indicador,plazo,presupuesto";
        $url = "adaptaciones?select=" . $select . "&linkTo=id&equalTo=" . $security[0];
        $method = "GET";
        $fields = array();
        $response = CurlController::request($url, $method, $fields);
        if ($response->status == 200) {
            $accion = $response->results[0];
        } else {
            echo '<script>
			    window.location = "/adaptacion";
            </script>';
        }
    } else {
        echo '<script>
			window.location = "/adaptacion";
        </script>';
    }
} else {
    echo '<script>
            window.location = "/adaptacion";
    </script>';
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Medida de adaptación</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/adaptacion">Medida de adaptación</a></li>
                    <li class="breadcrumb-item active">Editar medida</li>
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
                <input type="hidden" value="<?php echo $security[0] ?>" name="idMedida">
                <div class="card-header">
                    <?php
                    require_once "controllers/medida.controller.php";

                    $edit = new MedidaController();
                    $edit->edit($security[0]);
                    ?>
                    <div class="col-md-8 offset-md-2">
                        <!--=====================================
                        Nombre
                        ======================================-->
                        <div class="form-group mt-5">
                            <label>Nombre</label>
                            <input type="text" class="form-control" value="<?php echo $accion->nombre ?>" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'text')" name="nombre" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Descripcion
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Descripción</label>
                            <input type="text" class="form-control" value="<?php echo $accion->descripcion ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="descripcion" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Objetivo
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Objetivo</label>
                            <input type="text" class="form-control" value="<?php echo $accion->objetivo ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="objetivo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Meta
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Meta</label>
                            <input type="text" class="form-control" value="<?php echo $accion->meta ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f')" name="meta" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Indicador
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Indicador</label>
                            <input type="number" class="form-control" value="<?php echo $accion->indicador ?>" name="indicador" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Plazo
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Plazo</label>
                            <input type="time" class="form-control" value="<?php echo $accion->plazo ?>" name="plazo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Presupuesto
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Presupuesto</label>
                            <input type="text" class="form-control" value="<?php echo $accion->presupuesto ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f')" name="presupuesto" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/adaptacion" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>