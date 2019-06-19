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

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="<?php echo base_url() ?>index.php/produtos/index"><img src="<?php echo base_url() ?>public/img/logoIAC.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>index.php/produtos/index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>index.php/usuarios/<?php echo $id_usuario ?>">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>index.php/usuarios/produtos">Anúncios</a>
                    </li>
                </ul>
                <a class="btn btn-outline-warning my-2 my-sm-0" href="<?php echo base_url() ?>index.php/produtos/novo">Anunciar</a>
            </div>
        </nav>
    </div>
    <hr>
