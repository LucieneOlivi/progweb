<html>
<head>
<title> Minha Primeira Pagina !!!! </title>
<meta charset = "utf-8" />
</head>

<body>

<?php
	$nome = $_GET["nome"];
	$sexo =  $_GET["sexo"];
	$comentarios = $_GET["comentarios"];
	// Create connection
	$conexao = mysql_connect("localhost","root","");
	// Check connection
	if ($conexao->connect_error) {
		die("Connection failed: " . $conexao->connect_error);
	} 
	echo "Connected successfully";
	$banco = @mysql_select_db("progweb",$conexao);
	if (!$banco){ 
		die("<p>Banco de Dados não disponível.</p>");
	}
		else{
		echo "<p>Banco de dados aberto com sucesso.</p>";
	}
	$sql = "INSERT INTO formulario (name, sexo, comentario) 
	VALUES ('$nome', '$sexo', '$comentarios')";
	mysql_query ($sql,$conexao);
	?>

</body>

</html>