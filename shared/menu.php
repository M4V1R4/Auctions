<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="../images/subasta.svg" width="30" height="30" alt="">Subastas
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php if (isset($_SESSION['user_id'])) { ?>
      <?php if($user['is_admin'] == 't'){ ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="Products/home.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../users/create_admin.php">Registar administrador</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Subastas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="auctions/create.php">Crear subasta</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="auctions/index.php">Ver subastas</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Reportes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/Reportes/index.php">Reportes facturacion</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/Reportes/Reporte_subasta.php">Reporte subastas</a>
            </div>
          </li>
        </ul>
        <a class="nav-item nav-link" href="../logout.php">Cerrar Sesión</a>
      <?php } ?>
      <?php if($user['is_admin'] == 'f'){ ?>
        <ul class="navbar-nav mr-auto"></ul>
        <a class="nav-item nav-link" href="../logout.php">Cerrar Sesión</a>
      <?php } ?>
    <?php } ?>
  </div>
</nav>