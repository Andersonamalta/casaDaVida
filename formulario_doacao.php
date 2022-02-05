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

  <form class="form-horizontal" method="POST" action="cadastro_doacao.php">
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
            <a href="index.php"><button type="button" class="btn btn-white " style="margin-top: 13px; float: right;"><i class="glyphicon glyphicon-home"></i> Home</button></a>
          </div>

        </div>
      </div>

      <div style="background-color: #e3f2fd">
    
        <div class= "row p-2" style="height: 60px;">
        
          <div class="col-md-4">  
            <a href="index.php"><i class="fa fa-chevron-left" aria-hidden="true" style="margin-top: 12px"></i></a>
          </div>
          <div class="col-md-4">  
            <h3 id="texto_colab" style="text-align: center; margin-top: 15px">Nova doação</h3>
          </div>
        </div>
      </div>
    

        <div class="panel-body"><br>

          <div class="form-group">
            <label class="col-md-1 control-label" for="Nome">Doador</label>
            <div class="col-md-3">
              <input id="doador" name="doador" placeholder="" class="form-control input-md" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-1 control-label">CPF</label>
            <div class="col-md-2">
              <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" type="text" maxlength="14" onkeypress="$(this).mask('000.000.000-00');">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-1 control-label" for="Nome">Data</label>
            <div class="col-md-2">
              <input id="dataDoacao" name="dataDoacao" placeholder="DD/MM/AAAA" class="form-control input-md" type="date" onBlur="showhide()" onkeypress="$(this).mask('00/00/0000')">
            </div>

          </div>

          <div class="form-group">
            <label class="col-md-1 control-label">Valor: </label>
              <div class="col-md-1">
                <input id="valor" name="valor" class="form-control" placeholder="R$" type="text" onkeypress="$(this).mask('R$ 999.990,00')">
              </div>        
          </div>


          <div class="form-group">
            <label class="col-md-1 control-label" for="pergunta1">Doação de: </label>
              <div class="col-md-3">
                <input id="doacao" name="doacao" class="form-control" placeholder="" type="text">
              </div>        
          </div>

          <input type="hidden" name="session" value="<?php echo $_SESSION['email']; ?>">


          <div class="form-group">
            <label class="col-md-1 control-label" for="Cadastrar"></label>
              <div class="col-md-8">
                <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                <a href="doacao.php"><button id="Cancelar" name="Cancelar" class="btn btn-danger" type="button">Cancelar</button><a/>
              </div>
          </div>
        </div>

    </fieldset>
  </form>
</body>

</html>