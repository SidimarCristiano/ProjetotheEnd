<html>

	<head>
	<title>Login</title>

	</head>
	<body>
	
	<?php

	// Verifica se usuário e senha conferem
	if ($_POST["username"] == "php" && $_POST["password"] == "php") {
	 
	// Se usuário e senha conferir definimos session para YES
	  session_start();
	  $_SESSION["Login"] = "YES";
	  echo "<h1>Você está logado</h1>";
	  echo "<p><a href='document.php'>Link para o arquivo restrito</a><p/>";
	 
	}
	else {
	 
	// Se usuário e senha conferir definimos session para NO
	  session_start();
	  $_SESSION["Login"] = "NO";
	  echo "<h1>Você NÃO está logdo</h1>";
	  echo "<p><a href='document.php'>Link para o arquivo restrito</a><p/>";
	 
	}

	?>

	</body>
	</html>
