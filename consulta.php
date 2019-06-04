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
    <link rel="stylesheet" type="text/css" href="./css/css-cadastroEmpresa.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  
<!-- Menu  navbar -->
      
  
    <div class="topo">
      <div>
        <h2><i class="material-icons" style="font-size: 32px; color: green">add_circle_outline</i>Consultas</h2>
      </div>
    </div>

    <div class=" flex-center-center">
      <form method="POST" action="consulta-classe.php"><!-- Inicio do formulario -->               
        <div class="row bccu">
            <div class="form-group col-md-3">
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
            <a href="index.php"> <!--nao esta funcionando--> 
              <button class="btn btn-outline-info buttons">Cadastrar Paciente</button>   
            </a>
        </div>
            
         </div>

         <div class="form-row">
            <div class="form-group col-md-3"> 
                <label for="responsavel">Sintomas </label>
                <textarea class="form-control" name="sintomas" id="exampleFormControlTextarea3" rows="7" placeholder="Sintomas"></textarea>
            </div>

            <div class="form-group col-md-3">  
              <label for="descAtv">Histórico </label>
              <textarea class="form-control"  name="historico" id="exampleFormControlTextarea3" rows="7" placeholder="Histórico"></textarea>
            </div>  

            <div class="form-group col-md-3">
              <label for="telefone">Observações </label>
              <textarea class="form-control" id="exampleFormControlTextarea3" rows="7" placeholder="Observações" name="observacoes"></textarea>
            </div>
          </div>
           
          
          <div class="form-group buttons">
            <input type="submit" value="Cancelar" class="btn btn-outline-danger buttons">
            <input type="submit" value="Salvar" class="btn btn-success buttons">           
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
