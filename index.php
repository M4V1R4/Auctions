<?php
require_once './shared/sessions.php';
require_once './shared/db.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$user = $user_model->login($email, $password);

if ($user != null) {
    $_SESSION['user_id'] = $user['id'];
    return header('Location: /home.php');
}
require_once './shared/header.php';
?>
<div class="modal-dialog text-center">
	<div class="col-sm-8 main-section">
		<div class="modal-content">
			<div class="col-12 user-img">
				<img src="images/avatar.png">
			</div>
			<form class="col-12" method="POST">
			    <div class="form-group">
			    	<input type="email" class="form-control" placeholder="Correo electrónico" name="email" value="<?=$email?>">
			    </div>
			    <div>
			    	<input type="password" class="form-control" placeholder="Contraseña" name="password">
			    </div>
			    <br>
			    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
			    <a href="/users/create.php" class="btn btn-secondary">Registrarse</a>  
			</form>
		</div>
	</div>
</div>	
<?php require_once './shared/footer.php' ?>
