<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Login | Academic shop</title>
	<link href="<?php echo base_url()?>public/css1/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/css1/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/css1/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/css1/price-range.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/css1/animate.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/css1/main.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/css1/responsive.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
	<section id="form">
		<!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
						<!--login form-->
						<h2>Entrar</h2>
						<?php echo form_open('login/entrar'); ?>
							<input type="email" name="email" placeholder="E-mail" />
							<input type="password" name="senha" placeholder="Senha" />
							<button type="submit" class="btn btn-default">Entrar</button>
						</form>
					</div>
					<!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OU</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form">
						<!--sign up form-->
						<h2>Cadastrar-se</h2>
						<?php echo form_open('usuarios/cadastrar'); ?>
							<input name="nome" type="text" placeholder="Nome" />
							<input name="email" type="email" placeholder="E-mail" />
							<input name="telefone" type="telefone" placeholder="Telefone" />
							<input name="senha" type="password" placeholder="Senha" />
							<button type="submit" class="btn btn-default">Cadastrar</button>
						</form>
					</div>
					<!--/sign up form-->
				</div>
			</div>
			<?php echo validation_errors(); ?>
		</div>
	</section>


	<!--/form-->

