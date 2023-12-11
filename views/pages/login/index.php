<div class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    
    <div class="card card-outline card-danger">
     
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>SOFGAM</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Inicia sesión</p>
        <form method="post" class="needs-validation" novalidate>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="loginEmail" onchange="validateJS(event, 'email')" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <div class="valid-feedback">Válido.</div>
            <div class="invalid-feedback">Por favor rellene este campo.</div>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="loginPassword" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <div class="valid-feedback">Válido.</div>
            <div class="invalid-feedback">Por favor rellene este campo.</div>
          </div>

          <?php
          require_once "controllers/admins.controller.php";
          $login = new AdminsController();
          $login->login();
          ?>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Recuerdame
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-danger btn-block">Iniciar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <!-- /.social-auth-links -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
  <!-- jQuery -->
</div>