<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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

    $id_voluntario = intval($_GET['id']);

    $consulta = mysqli_query($conexao, "SELECT * FROM voluntarios WHERE id = '$id_voluntario'");

    $row = mysqli_num_rows($consulta);
  ?>
  
  <?php while($row = mysqli_fetch_array($consulta)){ ?>
  <form class="form-horizontal">
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
            <a href="voluntarios.php"><button type="button" class="btn btn-white " style="margin-top: 13px; float: right;"><i class="glyphicon glyphicon-chevron-left mr-2"></i> Voltar</button></a>
          </div>

        </div>
      </div>

      <div style="background-color: #e3f2fd">
    
        <div class= "row p-2" style="height: 60px;">
        
          <div class="col-md-4">  
            <a href="index.php"><i class="fa fa-chevron-left" aria-hidden="true" style="margin-top: 12px"></i></a>
          </div>
          <div class="col-md-4">  
            <h3 id="texto_colab" style="text-align: center; margin-top: 15px"><?php echo $row['nome']; ?></h3>
          </div>
        </div>
      </div>
    

        <div class="panel-body"><br>

          <div class="form-group">
            <label class="col-md-1 control-label" for="Nome">Nome</label>
            <div class="col-md-3">
              <input id="Nome" name="nome" placeholder="" value="<?php echo $row['nome']; ?>" class="form-control input-md" type="text" disabled="disabled">
            </div>

            <label class="col-md-1 control-label" for="Nome">CPF</label>
            <div class="col-md-2">
              <input id="cpf" name="cpf" placeholder="Apenas números" value="<?php echo $row['cpf']; ?>" class="form-control input-md" type="text" onkeypress="$(this).mask('000.000.000-00');" disabled="disabled">
            </div>

            <label class="col-md-1 control-label">Sexo</label>
            <div class="col-md-2">
              <input id="sexo" name="sexo" value="<?php echo $row['sexo']; ?>" class="form-control input-md" type="text" disabled="disabled">
            </div>
          </div>

          <div class="form-group">
            
            <label class="col-md-2 control-label" for="Nome">Nascimento</label>
            <div class="col-md-2">
              <input id="dtnasc" name="dtnasc" value="<?php echo $row['nascimento']; ?>" class="form-control input-md" type="date" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()" disabled="disabled">
            </div>

            <label class="col-md-1 control-label" for="prependedtext">Telefone</label>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input id="prependedtext" name="prependedtext" value="<?php echo $row['telefone']; ?>" class="form-control" placeholder="XX XXXXX-XXXX" type="text" onkeypress="$(this).mask('(00) 90000-0000')" disabled="disabled">
              </div>
            </div>

            <label class="col-md-1 control-label" for="prependedtext">WhatsApp</label>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input id="prependedtext" name="whatsapp" class="form-control" value="<?php echo $row['whatsapp']; ?>" placeholder="XX XXXXX-XXXX" type="text" onkeypress="$(this).mask('(00) 90000-0000')" disabled="disabled">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-1 control-label" for="prependedtext">Email</label>
            <div class="col-md-3">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input id="prependedtext" name="email" class="form-control" value="<?php echo $row['email']; ?>" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" disabled="disabled">
              </div>
            </div>

            <label class="col-md-1 control-label" for="Facebook">Rede social</label>
            <div class="col-md-2">
              <input id="redesocial" name="redesocial" class="form-control" value="<?php echo $row['redesocial']; ?>" type="text" disabled="disabled">
            </div>

            <label class="col-md-1 control-label" for="time">Time</label>
              <div class="col-md-1">
                <input id="time" name="time" class="form-control" value="<?php echo $row['timedecoracao']; ?>" type="text" disabled="disabled">
              </div>
          </div>


          <div class="form-group">
            <label class="col-md-1 control-label" for="CEP">CEP</label>
            <div class="col-md-2">
              <input id="cep" name="cep" placeholder="Apenas números" value="<?php echo $row['cep']; ?>" class="form-control input-md" value="" type="text" maxlength="8" onkeypress="$(this).mask('00.000-000')" disabled="disabled">
            </div>

            <label class="col-md-1 control-label" for="prependedtext">Endereço</label>
              <div class="col-md-3">
                <div class="input-group">
                  <span class="input-group-addon">Rua</span>
                  <input id="rua" name="rua" class="form-control" value="<?php echo $row['endereco']; ?>" type="text" disabled="disabled">
                </div>
              </div>

            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">Nº</span>
                <input id="numero" name="numero" class="form-control" value="<?php echo $row['numero']; ?>" type="text" disabled="disabled">
              </div>
            </div>

            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">Bairro</span>
                <input id="bairro" name="bairro" class="form-control" value="<?php echo $row['bairro']; ?>" type="text" disabled="disabled">
              </div>
            </div>

          </div>

          <div class="form-group">
            <label class="col-md-1 control-label" for="prependedtext"></label>
            <div class="col-md-3">
              <div class="input-group">
                <span class="input-group-addon">Cidade</span>
                <input id="cidade" name="cidade" class="form-control" value="<?php echo $row['cidade']; ?>" type="text" disabled="disabled">
              </div>
            </div>

            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">Estado</span>
                <input id="estado" name="estado" class="form-control" value="<?php echo $row['estado']; ?>" type="text" disabled="disabled">
              </div>
            </div>
          </div>
            

          <div class="form-group">

            <label class="col-md-2 control-label" for="pergunta1">O que mais gosta de fazer ?</label>
              <div class="col-md-3">
                <input id="pergunta1" name="pergunta1" class="form-control" value="<?php echo $row['pergunta1']; ?>" type="text" disabled="disabled">
              </div>   

              <label class="col-md-3 control-label" for="pergunta2">O que motivou a ser um voluntário ?</label>
              <div class="col-md-3">
                <input id="pergunta2" name="pergunta2" class="form-control" value="<?php echo $row['pergunta2']; ?>" type="text" disabled="disabled">
              </div>     

          </div>

          <div class="form-group">

            <label class="col-md-3 control-label">Qual área de trabalho você mais se identifica ?</label>
              <div class="col-md-3">
                <input id="pergunta3" name="pergunta3" value="<?php echo $row['pergunta3']; ?>" class="form-control" placeholder="" type="text" disabled="disabled">
              </div>
          </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Dias disponíveis</label>
                  <div class="col-md-3">
                    <input id="dias" name="dias" value="<?php echo $row['dias']; ?>" class="form-control" placeholder="" type="text" disabled="disabled">
                  </div>

                  <label class="col-md-2 control-label">Horários disponíveis</label>
                   <div class="col-md-3">
                    <input id="horarios" name="horarios" value="<?php echo $row['horarios']; ?>" class="form-control" placeholder="" type=  "text" disabled="disabled">
                  </div>
            </div>

            <div class="form-group">
              <label class="col-md-1 control-label" for="textinput">Observações</label>
              <div class="col-md-6">
                <textarea id="textinput" name="obs" class="form-control input-md" type="text" disabled="disabled"><?php echo $row['observacao']; ?></textarea>
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