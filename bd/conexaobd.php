<?php

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$nomeDoBanco = "cadastro_php";

$conexaoBD = mysqli_connect($servidor, $usuario, $senha, $nomeDoBanco);
if (!$conexaoBD) {
	echo "Não conectou com o Banco de Dados";
}else{
	echo "Conectado!!";
}

?>