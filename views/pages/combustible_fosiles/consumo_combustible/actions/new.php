<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Consumo de combustibles</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/consumo_combustible">Consumo de combustible</a></li>
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
                <div class="card-header">
                    <?php
                    require_once "controllers/consumo.combustible.controller.php";

                    $create = new ConsumoCombustibleController();
                    $create->create();
                    ?>
                    <div class="col-md-8 offset-md-2">
                        <!--=====================================
                        Tipo
                        ======================================-->
                        <div class="form-group mt-5">
                            <label>Tipo</label>
                            <input type="text" class="form-control" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'text')" name="tipo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Enero
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Enero</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="enero" id="enero" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Febrero
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Febrero</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="febrero" id="febrero" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Marzo
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Marzo</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="marzo" id="marzo" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Abril
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Abril</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="abril" id="abril" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Mayo
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Mayo</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="mayo" id="mayo" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Junio
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Junio</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="junio" id="junio" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Julio
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Julio</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="julio" id="julio" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Agosto
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Agosto</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="agosto" id="agosto" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Septiembre
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Septiembre</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="septiembre" id="septiembre" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Octubre
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Octubre</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="octubre" id="octubre" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Noviembre
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Noviembre</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="noviembre" id="noviembre" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Diciembre
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Diciembre</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f'), agregarTotal(this.value)" name="diciembre" id="diciembre" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Total
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Total</label>
                            <input type="text" class="form-control" pattern="[0-9]+(\.[0-9]{1,2})" onchange="validateJS(event,'n&f')" name="total" id="total" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/consumo_combustible" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>