<?php
if (isset($_GET["id"])) {
    $security = explode("~", base64_decode($_GET["id"]));

    if ($security[1] == $_SESSION["admin"]->token_user) {
        $select = "activo,consumo_anterior,consumo_actual,ahorro";
        $url = "ahorros_consumos_combustibles?select=" . $select . "&linkTo=id&equalTo=" . $security[0];
        $method = "GET";
        $fields = array();
        $response = CurlController::request($url, $method, $fields);
        if ($response->status == 200) {
            $result = $response->results[0];
        } else {
            echo '<script>
			    window.location = "/ahorro_consumo_combustible";
            </script>';
        }
    } else {
        echo '<script>
			window.location = "/ahorro_consumo_combustible";
        </script>';
    }
} else {
    echo '<script>
            window.location = "/ahorro_consumo_combustible";
    </script>';
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ahorro de consumo de combustibles</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/ahorro_consumo_combustible">Ahorro de consumo de combustible</a></li>
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
                <input type="hidden" value="<?php echo $security[0] ?>" name="idAhorroConsumoCombustible">
                <div class="card-header">
                    <?php
                    require_once "controllers/ahorro.consumo.combustible.controller.php";

                    $edit = new AhorroConsumoCombustibleController();
                    $edit->edit($security[0]);
                    ?>
                    <div class="col-md-8 offset-md-2">
                        <!--=====================================
                        Activo
                        ======================================-->
                        <div class="form-group mt-5">
                            <label>Activo</label>
                            <input type="text" class="form-control" value="<?php echo $result->activo ?>" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'text')" name="activo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Consumo anterior
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Consumo anterior</label>
                            <input type="text" class="form-control" value="<?php echo $result->consumo_anterior ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarAhorro(this.value)" name="consumo_anterior" id="consumo_anterior" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Consumo actual
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Consumo actual</label>
                            <input type="text" class="form-control" value="<?php echo $result->consumo_actual ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarAhorro(this.value)" name="consumo_actual" id="consumo_actual" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Ahorro
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Ahorro</label>
                            <input type="text" class="form-control" value="<?php echo $result->ahorro ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f')" name="ahorro" id="ahorro" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/ahorro_consumo_combustible" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>