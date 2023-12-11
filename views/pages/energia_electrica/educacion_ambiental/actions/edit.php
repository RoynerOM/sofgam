<?php
if (isset($_GET["id"])) {
    $security = explode("~", base64_decode($_GET["id"]));

    if ($security[1] == $_SESSION["admin"]->token_user) {
        $select = "modulo,actividad,fecha,descripcion,tipo,modalidad";
        $url = "educaciones_ambientales?select=" . $select . "&linkTo=id&equalTo=" . $security[0];
        $method = "GET";
        $fields = array();
        $response = CurlController::request($url, $method, $fields);
        if ($response->status == 200) {
            $result = $response->results[0];
        } else {
            echo '<script>
			    window.location = "/educacion_ambiental";
            </script>';
        }
    } else {
        echo '<script>
			window.location = "/educacion_ambiental";
        </script>';
    }
} else {
    echo '<script>
            window.location = "/educacion_ambiental";
    </script>';
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Educación ambiental</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/educacion_ambiental">Educación ambiental</a></li>
                    <li class="breadcrumb-item active">Nueva registro</li>
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
                <input type="hidden" value="<?php echo $security[0] ?>" name="idEducacionAmbiental">
                <div class="card-header">
                    <?php
                    require_once "controllers/educacion.ambiental.controller.php";

                    $edit = new EducacionAmbientalController();
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
                        Actividad
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Actividad</label>
                            <input type="text" class="form-control" value="<?php echo $result->actividad ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'n&f')" name="actividad" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Fecha
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Fecha</label>
                            <input type="date" class="form-control" value="<?php echo $result->fecha ?>" name="fecha" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Descripción
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Descripción</label>
                            <input type="text" class="form-control" value="<?php echo $result->descripcion ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'n&f')" name="descripcion" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Tipo
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Tipo</label>
                            <input type="text" class="form-control" value="<?php echo $result->tipo ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'n&f')" name="tipo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Modalidad
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Modalidad</label>
                            <input type="text" class="form-control" value="<?php echo $result->modalidad ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'n&f')" name="modalidad" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/educacion_ambiental" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>