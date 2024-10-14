<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('./db_connect.php');
?>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Simple Forms/Discussion System</title>


	<?php include('./header.php'); ?>
	<?php
	if (isset($_SESSION['login_id']))
		header("location:index.php?page=home");

	?>

</head>
<style>
	body {
		width: 100%;
		height: calc(100%);
	}

	main#main {
		width: 100%;
		height: calc(100%);
		background: white;
	}

	#login-right {
		position: absolute;
		right: 0;
		width: 40%;
		height: calc(100%);
		background: white;
		display: flex;
		align-items: center;
	}

	#login-left {
		position: absolute;
		left: 0;
		width: 60%;
		height: 100%;
		/* Garante que ocupe toda a altura */
		display: flex;
		align-items: center;
		justify-content: center;
		/* Centraliza o conteúdo dentro do container */
		background: url(assets/uploads/login.jpg) center center;
		/* Centraliza a imagem */
		background-repeat: no-repeat;
		background-size: cover;
		/* Mantenha a imagem cobrindo todo o container */
		overflow: hidden;
		/* Garante que nada saia do container */
	}



	#login-right .card {
		margin: auto;
		z-index: 1
	}

	.logo {
		margin: auto;
		font-size: 8rem;
		background: white;
		padding: .5em 0.7em;
		border-radius: 50% 50%;
		color: #000000b3;
		z-index: 10;
	}

	div#login-right::before {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		width: calc(100%);
		height: calc(100%);
		background: #41393b;
	}

	.login-form {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.7)   

}

.form-group {
    margin-bottom: 15px;
}

.control-label {
    font-weight: bold;
}

.form-control {
    border-radius: 25px;
    padding: 12px;
    border: none;
    background-color: #c2c2c2;
    color: #fff;
    outline: none;
}

.btn-sm.btn-block.btn-wave {
    background-color: #827e96;
    border: none;
    padding: 12px 20px;
    border-radius: 25px;
	color: white;
}

.btn.btn-link {
    color: #5d5a6b;
    text-decoration: none;
}
</style>

<body>


	<main id="main" class=" bg-dark">
		<div id="login-left">
		</div>

		<div id="login-right">
			<div class="card col-md-8">
				<div class="card-body">

					<form id="login-form">
						<div class="form-group">
							<label for="username" class="control-label">Nombre de usuario</label>
							<input type="text" id="username" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label for="password" class="control-label">Contraseña</label>
							<input type="password" id="password" name="password" class="form-control">
						</div>
						<div class="d-flex align-items-center">
							<button class="btn-sm btn-block btn-wave" style="margin-right: 10px;">Iniciar sesión</button>
							<a href="forum.php" class="btn btn-link">Registro</a>
						</div>

					</form>
				</div>
			</div>
		</div>


	</main>

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e) {
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled', true).html('Logging in...');
		if ($(this).find('.alert-danger').length > 0)
			$(this).find('.alert-danger').remove();
		$.ajax({
			url: 'ajax.php?action=login',
			method: 'POST',
			data: $(this).serialize(),
			error: err => {
				console.log(err)
				$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success: function(resp) {
				if (resp == 1) {
					location.href = 'index.php?page=home';
				} else {
					$('#login-form').prepend('<div class="alert alert-danger">El nombre de usuario o la contraseña son incorrectos.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>

</html>