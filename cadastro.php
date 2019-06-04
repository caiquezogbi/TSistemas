<?php
include ("conexao.php");

$nome= $_POST ['nomePaciente'];
$cpf = $_POST ['cpf'];
$convenio = $_POST ['convenio'];
$dataNascimento = $_POST ['dataNascimento'];
$telefone = $_POST ['telefone'];
$responsavel = $_POST ['responsavel'];
$endereco = $_POST ['endereco'];
$bairro = $_POST ['bairro'];
$cidade = $_POST ['cidade'];


$insertPaciente = "CALL `clinica`.`PROC_IN_PACIENTE`('$nome', '$cpf', '$convenio', '$dataNascimento', '$responsavel', '$telefone', '$endereco', '$bairro', '$cidade');";

//mysqli_query($conexao,$result_empresa);
$insert = mysqli_query ($conexao, $insertPaciente);


?>