	<?php 
	 	session_start(); 
		session_destroy(); 
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-device-width: 799px)" />

</head>
<body>


	<div class="container">
<article class="box">
		<img src="img/User-Icon.png" />
		<form method="post" action="app/session.php">
			<div class="content">	
	<div class="font-input">
				<input type="text" name="username" placeholder="Usuário">
		
	

	<div class="font-input">
			<input type="password" name="password" placeholder="Senha">
	</div>
	<input type="submit" name="submit" value="Entrar" class="btn-login" >
	
	</form>
	
	</div>
	</form>
	
		

				

			</div>


	</div>

</article>

	<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>