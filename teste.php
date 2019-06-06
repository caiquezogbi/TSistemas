<?php
include("conexao.php"); // caminho do seu arquivo de conexão ao banco de dados
//$consulta = "SELECT * FROM consulta";
//$conexao  = $mysqli->query($consulta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tutorial</title>
</head>
<body>
  <table border="1">
    <tr>
      <td>Nome do paciente</td>
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