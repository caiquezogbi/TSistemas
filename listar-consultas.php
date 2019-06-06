<?php
  include("conexao.php");
  ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consultas</title>

  <!- Imports -!>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  
<!-- Menu  navbar -->
<div class= "topo "> <img src="Capturar3.PNG" alt="imagens aleatórias" style="border-radius: 10px";> </div>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">COG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Paciente
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cadastro-paciente.html">Cadastrar Paciente</a>
          <a class="dropdown-item" href="#">Listar Paciente</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Consulta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="consulta.php">Marcar Consulta</a>
          <a class="dropdown-item" href="consulta.php">Prontuário</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
    
  </div>
</nav>

<div class="conteudo2">  
      <div>
        <h2><i class="material-icons" style="font-size: 32px; color: red">add_circle_outline</i> Consultas Marcadas</h2>
      </div>
      <?php


<body>
  <table border="1">
    <tr>
      <td>Código</td>
      <td>Medico</td>
      <td>Data da Consulta</td>
      <td>Ação</td>
    </tr>


    <?php $select_consulta = "CALL `clinica`.`PROC_SEL_CONSULTA`();";
                        $res_select = mysqli_query($conexao, $select_consulta);
                        while($dado = mysqli_fetch_array($res_select)){?>
    <tr>
      <td><?php echo $dado['paciente_id']; ?></td>
      <td><?php echo $dado['medico']; ?></td>
      <td><?php echo $dado['dataConsulta']; ?></td>
   
      <td>
        <a href="usu_editar.php?codigo=<?php echo $dado['usu_codigo']; ?>">Editar</a>
        <a href="usu_excluir.php?codigo=<?php echo $dado['usu_codigo']; ?>">Excluir</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>