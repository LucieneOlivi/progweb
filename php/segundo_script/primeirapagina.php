<html>
<head>
<title> Minha Primeira Pagina !!!! </title>
<meta charset = "utf-8" />
</head>

<body>

<h1> Este é um grande cabeçalho !!! </h1>
<h3> E este aqui é um pequeno cabeçalho </h3>

<p> Aqui eu coloquei um parágrafo com algum texto aleatório e a seguir vou inserir um formulario dentro de uma tabela.
Alem disso, aqui vai um link: 
<a href = ''> http://www.icomp.ufam.edu.br </a>............ </p>

<form id = 'formularioinicial' method = 'GET' ACTION = 'imprimir.php'>

	<table border = '0'>
	<tr>
		<td> Seu nome </td>
		<td> <input type= "Text" name="nome" id="nome" />
	</tr>
	<tr>
		<td> Seu Sexo </td>
	<td> 
		<Select name = 'sexo' id = 'sexo' > 
			<option value = "Masculino"> Masculino </option>
			<option value = "Feminino"> Feminino </option>
		</select>
	</td>
	</tr>

	<tr>
		<td> Seu Comentários </td>
		<td>
		<textarea name ='comentarios' rows = '10' cols = '60'> </textarea>
		</td>
	</tr>

	<tr>	
		<td></td>
		<td>
			<input type='submit' name = 'submit' id = 'submit' value = 'enviar'>
		</td>
	</tr>
	</table>

</form>

</body>

</html>