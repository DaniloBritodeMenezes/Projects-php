
<html>
<head>
<title> Cadastrando...</title>
</head>

<body>

<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$banco= "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco);
?> 


<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = mysql_query("INSERT INTO usuario(nome, sobrenome, pais, estado, cidade, email, senha)
VALUES('$nome','$sobrenome','$pais','$estado','$cidade','$email','$senha')");

?>


</body>
</html>﻿﻿
	