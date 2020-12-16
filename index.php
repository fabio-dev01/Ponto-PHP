<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/style.css" >
	<meta charset="utf-8">
	<title>SISTEMA DO PONTO</title>
</head>
<body>
<?php include "util/database.php";
?>
	<div class="container">
		
		<center>
			<p>
				Desenvolvido por: José Fábio - LIMOEIRO - PE	
			</p>
		</center>

		<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
			<div class="mx-auto text-center">
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNav">
    			<ul class="navbar-nav">
      				<li class="nav-item active">
        				<a class="nav-link" href="#">GESTÃO DE DADOS</a>
      				</li>
      				<li class="nav-item active">
        				<a class="nav-link" href="#">USERS</a>
      				</li>
      				<li class="nav-item active">
        				<a class="nav-link" href="#">SOBRE</a>
      				</li>
    			</ul>
    		</div>
  			</div>
		</nav>
			<br>

		<form method="POST" action="util/form_validation.php">
			<div class="form-group">
				<div class="col-md-6 offset-md-3"> <!-- centraliza -->
					<input type="password" class="form-control form-control-lg" placeholder="Chave de Acesso" id="form-key" name="chave">
					<button type="submit" class="btn btn-info" id="btn-entrar">ENTRAR</button>
					<a href="#">Problemas com sua Chave? Fale com o SUPORTE</a>
				</div>
			</div>
		</form>

	<footer>
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</footer>

</body>
</html>