<aside class="main-sidebar sidebar-light-danger elevation-4">

  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link navbar-teal">
    <img src="views/assets/img/Gestion.png" alt="Gestion Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SOFGAM</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="views/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION["admin"]->displayname_user ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="/" class="nav-link active">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/admins" class="nav-link <?php if ($routesArray[1] == "admins"): ?>active<?php endif?>">
            <i class="nav-icon fas fa-tasks"></i>
            <p>
              Admins
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/users" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Users
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/combustible_fosiles" class="nav-link">

            <i class="nav-icon fas fa-gas-pump"></i>
            <p>
              Combustible Fosiles
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">4</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/inventario_vehiculo" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inventario Vehiculo</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/consumo_combustible" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Consumo Combustible</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/ahorro_consumo_combustible" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ahorro Consumo Combustible</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/educacion_ambiental" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Educacion Ambiental</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/energia_electrica" class="nav-link">
            <i class="nav-icon fas fa-bolt"></i>
            <p>
              Energia Electrica
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">3</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/consumo_mensual_electricidad" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Consumo Mensual Electricidad</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/ahorro_consumo_electricidad" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ahorro Consumo Electricidad</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/educacion_ambiental" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Educacion Ambiental</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/recurso hidrico" class="nav-link">
            <i class="nav-icon fas fa-shower"></i>
            <p>
              Recurso Hidrico
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">3</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/consumo_agua_potable" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Consumo Agua Potable</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/ahorro_consumo_agua" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ahorro Consumo Agua</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/educacion_ambiental" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Educacion Ambiental</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/tratamiento_aguas_residuales" class="nav-link">
            <i class="nav-icon fas fa-water"></i>
            <p>
              Tratamiento de Aguas Residuales
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/sistemas_tratamientos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sistema de Tratamiento </p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/educaciones_ambientales" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Educaciones Ambientales</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/contaminante_atmosferico" class="nav-link">
            <i class="nav-icon fas fa-fire-extinguisher"></i>
            <p>
              Contaminante Atmosferico
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">3</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/producto_contaminante_atmosferico" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Producto Contaminante Atmosferico</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/mantenimiento_equipo_refrigeracion" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Mantenimiento Equipo Refrigeracion</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/gestion_ambiental" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Gestion Ambiental</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/compras_sostenibles" class="nav-link">
            <i class="nav-icon fas fa-recycle"></i>
            <p>
              Compras Sostenibles
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">3</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/compra_sostenible" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Compra Sostenible</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/sustitucion_producto" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sustitucion de Producto</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/educacion_ambiental" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Educacion Ambiental</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/gestion_residuos_solidos" class="nav-link">
            <i class="nav-icon fas fa-dumpster"></i>
            <p>
              Gestion Residuos Solidos
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">5</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/reduccion_de_consumo" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reduccion de Consumo</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/residuos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Residuos</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/aumento_de_generacion_residuos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Aumento de Generacion Residuos</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/reduccion_de_residuos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reduccion de Residuos</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/educaciones_ambientales" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Educaciones Ambientales</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/adaptacion" class="nav-link">
            <i class="nav-icon fas fa-cannabis"></i>
            <p>
              Adaptacion
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">1</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/adaptacion" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Medida Adaptacion</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/educacion_ambiental" class="nav-link">
            <i class="nav-icon fas fa-book-open"></i>
            <p>
              Educacion Ambiental
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">1</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/educacion_externa" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Educacion Externa </p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/realizada" class="nav-link">
            <i class="nav-icon fas fa-network-wired"></i>
            <p>
              Accion Realizada
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/conservacion_proteccion" class="nav-link">
            <i class="nav-icon fas fa-cloud"></i>
            <p>
              Conservacion y Proteccion
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">1</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/labor_seguimiento" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Labor Seguimiento</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>