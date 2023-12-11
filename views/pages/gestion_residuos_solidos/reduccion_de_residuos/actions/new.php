<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Reducción de residuos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/reduccion_de_residuos">Reducción de residuos</a></li>
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
                    require_once "controllers/reduccion.residuos.controller.php";

                    $create = new ReduccionResiduosController();
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
                        Datos
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Datos</label>
                            <input type="text" class="form-control" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="dato" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Generación anterior
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Generación anterior</label>
                            <input type="number" class="form-control" name="generacion_anterior" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Generación actual
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Generación actual</label>
                            <input type="number" class="form-control" name="generacion_actual" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                        <!--=====================================
                        Reducción
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Reducción</label>
                            <input type="number" class="form-control" name="reduccion" required>
                            <div class="valid-feedback">Válido.</div>
                        <div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/reduccion_de_residuos" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>