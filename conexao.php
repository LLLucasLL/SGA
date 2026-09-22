<?php
$conexao =  mysqli_connect("localhost","root","", "sga");

 

if (!$conexao) 
{
die('Nao foi possivel conectar ao banco de dados.
Erro detectado:' . mysql_connect_error());
}
?>