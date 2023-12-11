<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Inventario vehicular</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/inventario_vehiculo">Ahorro de consumo de combustible</a></li>
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
                    require_once "controllers/inventario.vehiculo.controller.php";

                    $create = new InventarioVehiculoController();
                    $create->create();
                    ?>
                    <div class="col-md-8 offset-md-2">
                        <!--=====================================
                        Activo
                        ======================================-->
                        <div class="form-group mt-5">
                            <label>Activo</label>
                            <input type="text" class="form-control" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="activo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Equipo
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Equipo</label>
                            <input type="text" class="form-control" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="equipo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                            <div>
                                <!--=====================================
                        Marca
                        ======================================-->
                                <div class="form-group mt-2">
                                    <label>Marca</label>
                                    <input type="text" class="form-control" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="marca" required>
                                    <div class="valid-feedback">Válido.</div>
                                    <div class="invalid-feedback">Por favor rellene este campo.</div>
                                    <div>
                                        <!--=====================================
                        Año
                        ======================================-->
                                        <div class="form-group mt-2">
                                            <label>Año</label>
                                            <input type="number" class="form-control" pattern="[0-9]{1,}" onchange="validateJS(event,'n&f')" name="anio" required>
                                            <div class="valid-feedback">Válido.</div>
                                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                                            <div>
                                                <!--=====================================
                        Tipo
                        ======================================-->
                                                <div class="form-group mt-2">
                                                    <label>Tipo</label>
                                                    <input type="text" class="form-control" pattern="[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'t&n&e')" name="tipo" required>
                                                    <div class="valid-feedback">Válido.</div>
                                                    <div class="invalid-feedback">Por favor rellene este campo.</div>
                                                    <div>
                                                    </div>
                                                </div>

                                                <div class="card-footer">
                                                    <div class="col-md-8 offset-md-2">
                                                        <div class="form-group mt-3">
                                                            <a href="/inventario_vehiculo" class="btn btn-light border text-left">Volver</a>
                                                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                                                        </div>
                                                    </div>
                                                </div>

            </form>
        </div>
    </div>
</section>