<?php
	$host = "localhost"; //nome do servidor
	$user = "root"; //usuario do banco
	$pass = ""; //senha do banco
	$dbname = "clinica"; //nome do banco
	
	//Criar a conexão
    $conexao = mysqli_connect($host, $user, $pass, $dbname);
    
    if (!$conexao) {
        die("Connection failed: " . mysqli_connect_error());
    }
    