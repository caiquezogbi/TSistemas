<?php
include ("conexao.php");

/*Captura de campos*/ 

$selPaciente =  $_POST ['selPaciente'];



$select_paciente = "CALL `clinica`.`PROC_SEL_PACIENTE`();";
    


?>