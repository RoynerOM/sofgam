<?php
if (isset($_GET["id"])) {
    $security = explode("~", base64_decode($_GET["id"]));

    if ($security[1] == $_SESSION["admin"]->token_user) {
        $select = "nombre,cantidad_seccion,cantidad_participante";
        $url = "educaciones_externas?select=" . $select . "&linkTo=id&equalTo=" . $security[0];
        $method = "GET";
        $fields = array();
        $response = CurlController::request($url, $method, $fields);
        if ($response->status == 200) {
            $result = $response->results[0];
        } else {
            echo '<script>
			    window.location = "/educacion_externa";
            </script>';
        }
    } else {
        echo '<script>
			window.location = "/educacion_externa";
        </script>';
    }
} else {
    echo '<script>
            window.location = "/educacion_externa";
    </script>';
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Educación externa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/educacion_externa">Educación externa</a></li>
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
                <input type="hidden" value="<?php echo $security[0] ?>" name="idEducacionExterna">
                <div class="card-header">
                    <?php
                    require_once "controllers/educacion.externa.controller.php";

                    $edit = new EducacionExternaController();
                    $edit->edit($security[0]);
                    ?>
                    <div class="col-md-8 offset-md-2">
                        <!--=====================================
                        Nombre
                        ======================================-->
                        <div class="form-group mt-5">
                            <label>Nombre</label>
                            <input type="text" class="form-control" value="<?php echo $result->nombre ?>" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'text')" name="nombre" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Cantidad de secciones
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Cantidad de secciones</label>
                            <input type="number" class="form-control" value="<?php echo $result->cantidad_seccion ?>" name="cantidad_seccion" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Cantidad de participante
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Cantidad de participante</label>
                            <input type="number" class="form-control" value="<?php echo $result->cantidad_participante ?>" name="cantidad_participante" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/educacion_externa" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>