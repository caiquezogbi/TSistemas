<?php
include ("./../conexao.php");

$Nome=$_POST ['Nome'];
$Cpf=$_POST ['Cpf'];
$PlanoDeSaude =$_POST ['PlanoDeSaude'];
$DataDeNascimento=$_POST ['DataDeNascimento'];
$Telefone=$_POST ['Telefone'];

echo "$Nome, $Cpf, $PlanoDeSaude, $DataDeNascimento, $Telefone";



$sql = mysql_query ("INSERT INTO usuario (nome, cpf, planoDeSaude, dataDeNascimento, telefone) VALUES
                                       ('$Nome', '$Cpf', '$PlanoDeSaude', '$DataDeNascimento', '$Telefone')");




 ?>