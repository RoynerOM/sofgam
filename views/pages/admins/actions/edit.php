<?php
if (isset($_GET["id"])) {
    $select = "id_user,displayname_user,username_user,email_user";
    $url = "users?select=" . $select . "&linkTo=id_user&equalTo=" . $_GET["id"];
    $method = "GET";
    $fields = array();
    $response = CurlController::request($url, $method, $fields);
    if ($response->status == 200) {
        $admin = $response->results[0];
    } else {
        echo '<script>
			    window.location = "/admins";
            </script>';
    }
} else {
    echo '<script>
            window.location = "/admins";
    </script>';
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Administradores</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Principal</a></li>
                    <li class="breadcrumb-item"><a href="/admins">Administradores</a></li>
                    <li class="breadcrumb-item active">Editar administrador</li>
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
                <input type="hidden" value="<?php echo $_GET["id"] ?>" name="idAdmin">
                <div class="card-header">
                    <?php
                    require_once "controllers/admins.controller.php";

                    $edit = new AdminsController();
                    $edit->edit($_GET["id"]);
                    ?>
                    <div class="col-md-8 offset-md-2">
                        <!--=====================================
                        Nombre y apellido
                        ======================================-->
                        <div class="form-group mt-5">
                            <label>Nombre completo</label>
                            <input type="text" value="<?php echo $admin->displayname_user ?>" class="form-control" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}" onchange="validateJS(event,'text')" name="displayname" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Apodo o seudónimo
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Nombre de usuario</label>
                            <input type="text" value="<?php echo $admin->username_user ?>" class="form-control" pattern="[A-Za-z0-9]{1,}" onchange="validateRepeat(event,'t&n','users','username_user')" name="username" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Correo electrónico
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Correo electrónico</label>
                            <input type="email" value="<?php echo $admin->email_user ?>" class="form-control" pattern="[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}" onchange="validateRepeat(event,'email','users','email_user')" name="email" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                        <!--=====================================
                        Contraseña
                        ======================================-->
                        <div class="form-group mt-2">
                            <label>Contraseña</label>
                            <input type="password" placeholder="*******" class="form-control" pattern="[#\\=\\$\\;\\*\\_\\?\\¿\\!\\¡\\:\\.\\,\\0-9a-zA-Z]{1,}" onchange="validateJS(event,'pass')" name="password">
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group mt-3">
                            <a href="/admins" class="btn btn-light border text-left">Volver</a>
                            <button type="submit" class="btn bg-dark float-right">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>