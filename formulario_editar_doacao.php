<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<!DOCTYPE html>

<?php 
  include('verifica_login.php');
?>

<head>

  <link href="css/casadavida.css" rel="stylesheet">
</head>

<body>

  <?php

      include_once('conexao.php');

      $id_doacao = intval($_GET['id']);

      $consulta = mysqli_query($conexao, "SELECT * FROM doacoes WHERE id = '$id_doacao'");

      $row = mysqli_num_rows($consulta);
    ?>
  
  <?php while($row = mysqli_fetch_array($consulta)){ ?>
  <form class="form-horizontal" method="post" action="editar_doacao.php">
    <fieldset>

      <div style="background-color: #1C81C8">
    
        <div class= "row p-2" style="height: 60px;" >
              
          <div class="col-md-7">  
            <a class="text-white" href="index.php"><img src="imagens/logo.png" style="width: 220px; height: 50px; margin-top: 5px"></a>
          </div>

          <div class="col-md-3" style="color: white; margin-top: 20px;">
            <h7>Usuário: <?php echo $_SESSION['email'];?> </h7>
          </div>

          <div class="col-md-1"> 
            <a href="doacao.php"><button type="button" class="btn btn-white " style="margin-top: 13px; float: right;"><i class="glyphicon glyphicon-chevron-left mr-2"></i> Voltar</button></a>
          </div>

        </div>
      </div>

      <div style="background-color: #e3f2fd">
    
        <div class= "row p-2" style="height: 60px;">
        
          <div class="col-md-4">  
            <a href="index.php"><i class="fa fa-chevron-left" aria-hidden="true" style="margin-top: 12px"></i></a>
          </div>
        </div>
      </div>
    

        <div class="panel-body"><br>

          <div class="form-group">
            <label class="col-md-1 control-label" for="Nome">Doador</label>
            <div class="col-md-3">
              <input id="doador" name="doador" placeholder="" value="<?php echo $row['doador']?>" class="form-control input-md" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-1 control-label">CPF</label>
            <div class="col-md-2">
              <input id="cpf" name="cpf" placeholder="Apenas números" value="<?php echo $row['cpf_doador']?>" class="form-control input-md" type="text" maxlength="14" onkeypress="$(this).mask('000.000.000-00');">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-1 control-label" for="Nome">Data</label>
            <div class="col-md-2">
              <input id="dataDoacao" name="dataDoacao" placeholder="DD/MM/AAAA" value="<?php echo $row['data']?>" class="form-control input-md" type="date" onBlur="showhide()" onkeypress="$(this).mask('00/00/0000')">
            </div>

          </div>

          <div class="form-group">
            <label class="col-md-1 control-label">Valor: </label>
              <div class="col-md-1">
                <input id="valor" name="valor" class="form-control" placeholder="R$" value="<?php echo $row['valor']?>" type="text" onkeypress="$(this).mask('R$ 999.990,00')">
              </div>        
          </div>


          <div class="form-group">
            <label class="col-md-1 control-label" for="pergunta1">Doação de: </label>
              <div class="col-md-3">
                <input id="doacao" name="doacao" class="form-control" value="<?php echo $row['doacao']?>" placeholder="" type="text">
              </div>        
          </div>

            <input type="hidden" name="identificador" value="<?php echo $row['id']; ?>">

            <input type="hidden" name="session" value="<?php echo $_SESSION['email']; ?>">

            <div class="form-group">
              <label class="col-md-1 control-label"></label>
              <div class="col-md-8">
                <button id="alterar" name="alterar" class="btn btn-success" type="Submit">Alterar</button>
                <a href="doacao.php"><button id="Cancelar" name="Cancelar" class="btn btn-danger" type="button">Cancelar</button><a/>
              </div>
            </div>

          </div>
        </div>
      </div>
    </fieldset>
  </form>
  <?php }?>
</body>

</html>