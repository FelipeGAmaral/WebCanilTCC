<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "bdanimais";

//Conexao com o BD
$conn = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conn){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conn));
}

?>