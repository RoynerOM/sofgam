<?php
if (isset($_GET["id"])) {
    $security = explode("~", base64_decode($_GET["id"]));

    if ($security[1] == $_SESSION["admin"]->token_user) {
        $select = "tipo,periodicidad,responsable";
        $url = "mantenimientos_equipos?select=" . $select . "&linkTo=id&equalTo=" . $security[0];
        $method = "GET";
        $fields = array();
        $response = CurlController::request($url, $method, $fields);
        if ($response->status == 200) {
            $result = $response->results[0];
        } else {
            echo '<script>
			    window.location = "/mantenimiento_equipo_refrigeracion";
            </script>';
        }
    } else {
        echo '<script>
			window.location = "/mantenimiento_equipo_refrigeracion";
        </script>';
    }
} else {
    echo '<script>
            window.location = "/mantenimiento_equipo_refrigeracion";
    </script>';
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sistema de tratamiento</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/mantenimiento_equipo_refrigeracion">Sistema de tratamiento</a></li>
                    <li class="breadcrumb-item active">Editar registro</li>
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
                <input type="hidden" value="<?php echo $security[0] ?>" name="idMantenimiento">
                <div class="card-header">
                    <?php
                    require_once "controllers/mantenimiento.equipo.refrigeracion.controller.php";

                    $edit = new MantenimientoController();
                    $edit->edit($security[0]);
                    ?>
                    <div class="col-md-8 offset-md-2">
                        <!--=====================================
                        tipo
                        ======================================-->
                        <div class="form-group mt-5">
                            <label>tipo</label>
                            <input type="text" class="form-control" value="<?php echo $result->tipo ?>" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'text')" name="tipo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Periodicidad
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Periodicidad</label>
                            <input type="text" class="form-control" value="<?php echo $result->periodicidad ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="periodicidad" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Responsable
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Responsable</label>
                            <input type="text" class="form-control" value="<?php echo $result->responsable ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="responsable" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/mantenimiento_equipo_refrigeracion" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>