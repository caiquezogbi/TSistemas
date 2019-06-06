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
<!--fim nav-->
  
<div class="conteudo2">  
      <div>
        <h2><i class="material-icons" style="font-size: 32px; color: red">add_circle_outline</i>Consultas</h2>
      </div>
  

    <div class=" flex-center-center">
      <form method="POST" action="consulta-classe.php"><!-- Inicio do formulario -->               
        <div class="row bccu">
            <div class="form-group col-md-4">
              <label for="sel-paciente">Nome do paciente</label><span class="asterisco-ver">*</span>
              <input list="nome" name="selPaciente"  class="form-control"/>  
              <datalist id="nome">
                    <?php
                      $select_paciente = "CALL `clinica`.`PROC_SEL_PACIENTE`();";
                      $res_select = mysqli_query($conexao, $select_paciente);
                      while($pac = mysqli_fetch_array($res_select)) {
                        $selPaciente=$pac['nome'];
                        echo "<option value='$selPaciente'> $selPaciente</option>";
                      }   
                    ?>
                </datalist>
            </div>
                
            <div class="form-group col-md-4">
               <label>Nome do Médico </label>
               <input type="text" class="form-control" name="nomeMedico" id="nomeEmpresaJS" placeholder="Nome do Médico">
            </div>
            <div>   
               <label >Data da Consulta </label><span class="asterisco-ver">*</span>
               <input type="date" class="form-control" name="dataConsulta" id="cpfJS" placeholder="Data">
            </div>  
            
        </div>
            
         </div>

         <div class="form-row">
            <div class="form-group col-md-4"> 
                <label for="responsavel">Sintomas </label>
                <textarea class="form-control" name="sintomas" id="exampleFormControlTextarea3" rows="7" placeholder="Sintomas"></textarea>
            </div>

            <div class="form-group col-md-4">  
              <label for="descAtv">Histórico </label>
              <textarea class="form-control"  name="historico" id="exampleFormControlTextarea3" rows="7" placeholder="Histórico"></textarea>
            </div>  

            <div class="form-group col-md-4">
              <label for="telefone">Observações </label>
              <textarea class="form-control" id="exampleFormControlTextarea3" rows="7" placeholder="Observações" name="observacoes"></textarea>
            </div>
          </div>
           
          
          <div class="form-group buttons">
            <input type="submit" value="Cancelar" class="btn btn-outline-danger buttons">
            <input type="submit" value="Salvar" class="btn btn-info buttons">           
          </div>
      </form>
    </div>
  </div>
</body>

</html>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
