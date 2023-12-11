<?php
if (isset($_GET["id"])) {
    $security = explode("~", base64_decode($_GET["id"]));

    if ($security[1] == $_SESSION["admin"]->token_user) {
        $select = "area,nise,enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre,total";
        $url = "consumos_mensuales_electricidad?select=" . $select . "&linkTo=id&equalTo=" . $security[0];
        $method = "GET";
        $fields = array();
        $response = CurlController::request($url, $method, $fields);
        if ($response->status == 200) {
            $result = $response->results[0];
        } else {
            echo '<script>
			    window.location = "/consumo_mensual_electricidad";
            </script>';
        }
    } else {
        echo '<script>
			window.location = "/consumo_mensual_electricidad";
        </script>';
    }
} else {
    echo '<script>
            window.location = "/consumo_mensual_electricidad";
    </script>';
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Consumo mensual de electricidad</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/consumo_mensual_electricidad">Consumo mensual de electricidad</a></li>
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
                <input type="hidden" value="<?php echo $security[0] ?>" name="idConsumoElectridad">
                <div class="card-header">
                    <?php
                    require_once "controllers/consumo.electricidad.controller.php";

                    $edit = new ConsumoElectricidadController();
                    $edit->edit($security[0]);
                    ?>
                    <div class="col-md-8 offset-md-2">
                        <!--=====================================
                        Area
                        ======================================-->
                        <div class="form-group mt-5">
                            <label>Area</label>
                            <input type="text" class="form-control" value="<?php echo $result->area ?>" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="area" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--================================
                        Nise
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Nise</label>
                            <input type="number" class="form-control" value="<?php echo $result->nise ?>" name="nise" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                         <!--=====================================
                        Enero
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Enero</label>
                            <input type="text" class="form-control" value="<?php echo $result->enero ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="enero" id="enero" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Febrero
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Febrero</label>
                            <input type="text" class="form-control" value="<?php echo $result->febrero ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="febrero" id="febrero" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Marzo
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Marzo</label>
                            <input type="text" class="form-control" value="<?php echo $result->marzo ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="marzo" id="marzo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Abril
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Abril</label>
                            <input type="text" class="form-control" value="<?php echo $result->abril ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="abril" id="abril" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Mayo
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Mayo</label>
                            <input type="text" class="form-control" value="<?php echo $result->mayo ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="mayo" id="mayo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Junio
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Junio</label>
                            <input type="text" class="form-control" value="<?php echo $result->junio ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="junio" id="junio" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Julio
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Julio</label>
                            <input type="text" class="form-control" value="<?php echo $result->julio ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="julio" id="julio" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Agosto
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Agosto</label>
                            <input type="text" class="form-control" value="<?php echo $result->agosto ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="agosto" id="agosto" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Septiembre
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Septiembre</label>
                            <input type="text" class="form-control" value="<?php echo $result->septiembre ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="septiembre" id="septiembre" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Octubre
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Octubre</label>
                            <input type="text" class="form-control" value="<?php echo $result->octubre ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="octubre" id="octubre" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Noviembre
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Noviembre</label>
                            <input type="text" class="form-control" value="<?php echo $result->noviembre ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="noviembre" id="noviembre" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Diciembre
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Diciembre</label>
                            <input type="text" class="form-control" value="<?php echo $result->diciembre ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f') agregarTotal(this.value)" name="diciembre" id="diciembre" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                        <!--=====================================
                        Total
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Total</label>
                            <input type="text" class="form-control" value="<?php echo $result->total ?>" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f')" name="total" id="total" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/consumo_mensual_electricidad" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>