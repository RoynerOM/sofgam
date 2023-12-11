<?php

if (isset($_GET["start"]) && isset($_GET["end"])) {

    $between1 = $_GET["start"];
    $between2 = $_GET["end"];
} else {

    $between1 = date("Y-m-d", strtotime("-29 day", strtotime(date("Y-m-d"))));
    $between2 = date("Y-m-d");
}

?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Consumo de agua potable</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item active">Consumo de agua potable</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid mb-2">
        <input type="hidden" id="between1" value="<?php echo $between1 ?>">
        <input type="hidden" id="between2" value="<?php echo $between2 ?>">

        <div class="card mb-5">
            <div class="card-header">
                <h3 class="card-title">
                    <a class="btn bg-dark btn-sm" href="/consumo_agua_potable_new">Nuevo registro</a>
                </h3>

                <div class="card-tools">
                    <div class="d-flex">

                        <div class="d-flex mr-2">
                            <span class="mr-2">Reportes</span>
                            <input type="checkbox" name="my-checkbox" data-bootstrap-switch data-off-color="light" data-on-color="dark" data-size="mini" data-handle-width="70" onchange="reportActive(event)">
                        </div>

                        <div class="input-group">
                            <button type="button" class="btn float-right" id="daterange-btn">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <?php echo $between1 ?> - <?php echo $between2 ?>
                                <i class="fas fa-caret-down ml-2"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="adminsTable" class="table table-bordered table-striped tableConsumoAgua">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Area</th>
                            <th>Enero</th>
                            <th>Febrero</th>
                            <th>Marzo</th>
                            <th>Abril</th>
                            <th>Mayo</th>
                            <th>Junio</th>
                            <th>Julio</th>
                            <th>Agosto</th>
                            <th>Septiembre</th>
                            <th>Octubre</th>
                            <th>Noviembre</th>
                            <th>Diciembre</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                </table>
            </div>
            <!-- /.card-body -->
        </div>

    </div>
</section>
<script src="views/assets/custom/datatable/datatable.js"></script>