<?php
if (isset($_GET["id"])) {
    $security = explode("~", base64_decode($_GET["id"]));

    if ($security[1] == $_SESSION["admin"]->token_user) {
        $select = "nombre,fecha_seguimiento,descripcion";
        $url = "labores_seguimientos?select=" . $select . "&linkTo=id&equalTo=" . $security[0];
        $method = "GET";
        $fields = array();
        $response = CurlController::request($url, $method, $fields);
        if ($response->status == 200) {
            $accion = $response->results[0];
        } else {
            echo '<script>
			    window.location = "/labor_seguimiento";
            </script>';
        }
    } else {
        echo '<script>
			window.location = "/labor_seguimiento";
        </script>';
    }
} else {
    echo '<script>
            window.location = "/labor_seguimiento";
    </script>';
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Labor de seguimiento</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/labor_seguimiento">Labor de seguimiento</a></li>
                    <li class="breadcrumb-item active">Nueva seguimiento</li>
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
            <input type="hidden" value="<?php echo $security[0] ?>" name="idSeguimiento">
                <div class="card-header">
                    <?php
                    require_once "controllers/seguimiento.controller.php";

                    $edit = new LaborSeguimientoController();
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
                        Fecha seguimiento
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Fecha seguimiento</label>
                            <input type="datetime-local" class="form-control" value="<?php echo $accion->fecha_seguimiento ?>" name="fecha_seguimiento" required>
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
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/labor_seguimiento" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>