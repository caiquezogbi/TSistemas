<?php
include ("conexao.php");

/*Captura de campos*/ 

$selPaciente =  $_POST ['selPaciente'];
$nomeMedico =  $_POST ['nomeMedico'];
$dataConsulta =  $_POST ['dataConsulta'];
$sintomas =  $_POST ['sintomas'];
$historico =  $_POST ['historico'];
$observacoes =  $_POST ['observacoes'];



$insert_consulta = "CALL `clinica`.`PROC_IN_CONSULTA`('$sintomas','$historico', '$dataConsulta', '$nomeMedico', '$observacoes', '$selPaciente');";

$insertConsulta = mysqli_query ($conexao, $insert_consulta);


    
?>