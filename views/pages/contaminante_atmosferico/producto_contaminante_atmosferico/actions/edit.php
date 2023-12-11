<?php
if (isset($_GET["id"])) {
    $security = explode("~", base64_decode($_GET["id"]));

    if ($security[1] == $_SESSION["admin"]->token_user) {
        $select = "nombre,actividad,contaminacion,presentacion,consumo_anterior,consumo_actual";
        $url = "productos_contaminantes?select=" . $select . "&linkTo=id&equalTo=" . $security[0];
        $method = "GET";
        $fields = array();
        $response = CurlController::request($url, $method, $fields);
        if ($response->status == 200) {
            $result = $response->results[0];
        } else {
            echo '<script>
			    window.location = "/producto_contaminante_atmosferico";
            </script>';
        }
    } else {
        echo '<script>
			window.location = "/producto_contaminante_atmosferico";
        </script>';
    }
} else {
    echo '<script>
            window.location = "/producto_contaminante_atmosferico";
    </script>';
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Productos contaminantes atmosfericos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/producto_contaminante_atmosferico">Productos contaminantes atmosfericos</a></li>
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
                <input type="hidden" value="<?php echo $security[0] ?>" name="idProductoContaminante">
                <div class="card-header">
                    <?php
                    require_once "controllers/producto.contaminante.atmosferico.controller.php";

                    $edit = new ProductoContaminanteController();
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
                        Actividad
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Actividad</label>
                            <input type="text" class="form-control" value="<?php echo $result->actividad ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="actividad" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Contaminación
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Contaminación</label>
                            <input type="text" class="form-control" value="<?php echo $result->contaminacion ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="contaminacion" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Presentación
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Presentación</label>
                            <input type="text" class="form-control" value="<?php echo $result->presentacion ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="presentacion" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Consumo anterior
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Consumo anterior</label>
                            <input type="text" class="form-control" value="<?php echo $result->consumo_anterior ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f')" name="consumo_anterior" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Consumo actual
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Consumo actual</label>
                            <input type="text" class="form-control" value="<?php echo $result->consumo_actual ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f')" name="consumo_actual" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/producto_contaminante_atmosferico" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>