<?php
include ("conexao.php");

$Nome= $_POST ['nome'];
$Cpf = $_POST ['cpf'];
$PlanoDeSaude = $_POST ['planoDeSaude'];
$DataDeNascimento = $_POST ['dataDeNascimento'];
$Telefone = $_POST ['telefone'];

//echo "$Nome, $Cpf, $PlanoDeSaude, $DataDeNascimento, $Telefone";


//$result= mysqli_query ($conexao, $sql);


$sql = mysqli_query ("INSERT INTO usuario (Nome, Cpf, PlanoDeSaude, DataDeNascimento, Telefone) VALUES
                         ('$Nome', '$Cpf', '$PlanoDeSaude', '$DataDeNascimento', '$Telefone')");




 ?>
