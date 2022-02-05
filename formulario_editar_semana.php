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

      $id_semana = intval($_GET['id']);

      $consulta = mysqli_query($conexao, "SELECT * FROM semana_refeicao WHERE id = '$id_semana'");

      $row = mysqli_num_rows($consulta);
    ?>
  
  <?php while($row = mysqli_fetch_array($consulta)){ ?>
  <form class="form-horizontal" method="post" action="editar_semana.php">
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
            <a href="controle_refeicoes.php"><button type="button" class="btn btn-white " style="margin-top: 13px; float: right;"><i class="glyphicon glyphicon-chevron-left mr-2"></i> Voltar</button></a>
          </div>

        </div>
      </div>

      <div style="background-color: #e3f2fd">
    
        <div class= "row p-2" style="height: 60px;">
        
          <div class="col-md-4">  
            <a href="index.php"><i class="fa fa-chevron-left" aria-hidden="true" style="margin-top: 12px"></i></a>
          </div>
          <div class="col-md-4">  
            <h3 id="texto_colab" style="text-align: center; margin-top: 15px"></h3>
          </div>
        </div>
      </div>
    

        <div class="panel-body"><br>

          <div class="form-group">
            <label class="col-md-2 control-label" for="Nome">Segunda- Feira</label>
            <div class="col-md-1">
              <input id="segunda" name="segunda" placeholder="" value="<?php echo $row['segunda']; ?>" class="form-control input-md" type="number" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="Nome">Terça-Feira</label>
            <div class="col-md-1">
              <input id="terca" name="terca" placeholder="" value="<?php echo $row['terca']; ?>" class="form-control input-md" type="number" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="Nome">Quarta-Feira</label>
            <div class="col-md-1">
              <input id="quarta" name="quarta" placeholder="" value="<?php echo $row['quarta']; ?>" class="form-control input-md" type="number" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="Nome">Quinta-Feira</label>
            <div class="col-md-1">
              <input id="quinta" name="quinta" placeholder="" value="<?php echo $row['quinta']; ?>" class="form-control input-md" type="number" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="Nome">Sexta-Feira</label>
            <div class="col-md-1">
              <input id="sexta" name="sexta" placeholder="" value="<?php echo $row['sexta']; ?>" class="form-control input-md" type="number" >
            </div>
          </div>

            <input type="hidden" name="identificador" value="<?php echo $row['id']; ?>">

            <input type="hidden" name="session" value="<?php echo $_SESSION['email']; ?>">

            <div class="form-group">
              <label class="col-md-1 control-label"></label>
              <div class="col-md-8">
                <button id="lancar" name="lancar" class="btn btn-success" type="Submit">Lançar</button>
                <a href="controle_refeicoes.php"><button id="Cancelar" name="Cancelar" class="btn btn-danger" type="button">Cancelar</button><a/>
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