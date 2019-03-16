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
            <a class="nav-link" href="#">Agregar Producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Registar administrador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Crear Subasta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ver reportes</a>
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