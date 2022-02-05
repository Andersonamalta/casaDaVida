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

  <form class="form-horizontal" method="POST" action="cadastro_mantenedor.php">
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
            <h3 id="texto_colab" style="text-align: center; margin-top: 15px">Cadastro de Mantenedores</h3>
          </div>
        </div>
      </div>
    

        <div class="panel-body"><br>

          <div class="form-group">
            <label class="col-md-1 control-label" for="Nome">Nome</label>
            <div class="col-md-3">
              <input id="Nome" name="nome" placeholder="" class="form-control input-md" type="text">
            </div>

            <label class="col-md-1 control-label" for="Nome">CPF</label>
            <div class="col-md-2">
              <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" type="text" onkeypress="$(this).mask('000.000.000-00');">
            </div>

            <label class="col-md-1 control-label" for="radios">Sexo</label>
            <div class="col-md-3">
              <label class="radio-inline" for="radios-0">
                <input name="sexo" id="sexo" value="feminino" type="radio">
                Feminino
              </label>
              <label class="radio-inline" for="radios-1">
                <input name="sexo" id="sexo" value="masculino" type="radio">
                Masculino
              </label>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-1 control-label" for="Nome">Nascimento</label>
            <div class="col-md-2">
              <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" type="date" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
            </div>

            <label class="col-md-2 control-label" for="prependedtext">Telefone</label>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" type="text" onkeypress="$(this).mask('(00) 90000-0000')">
              </div>
            </div>

            <label class="col-md-1 control-label" for="prependedtext">WhatsApp</label>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input id="prependedtext" name="whatsapp" class="form-control" placeholder="XX XXXXX-XXXX" type="text" onkeypress="$(this).mask('(00) 90000-0000')">
              </div>
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-1 control-label" for="prependedtext">Email</label>
            <div class="col-md-3">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
              </div>
            </div>

            <label class="col-md-1 control-label" for="Facebook">Rede social</label>
            <div class="col-md-2">
              <input id="redesocial" name="redesocial" class="form-control" placeholder="" type="text">
            </div>
            <label class="col-md-1 control-label" for="time">Time</label>
              <div class="col-md-1">
                <input id="time" name="time" class="form-control" placeholder="" type="text">
              </div>
          </div>


          <div class="form-group">
            <label class="col-md-1 control-label" for="CEP">CEP</label>
            <div class="col-md-2">
              <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" value="" type="text" onkeypress="$(this).mask('00.000-000')">
            </div>

            <label class="col-md-1 control-label" for="prependedtext">Endereço</label>
              <div class="col-md-3">
                <div class="input-group">
                  <span class="input-group-addon">Rua</span>
                  <input id="rua" name="rua" class="form-control" placeholder="" type="text">
                </div>
              </div>

            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">Nº</span>
                <input id="numero" name="numero" class="form-control" placeholder="" type="text">
              </div>
            </div>

            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">Bairro</span>
                <input id="bairro" name="bairro" class="form-control" placeholder="" type="text">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-1 control-label" for="prependedtext"></label>
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-addon">Cidade</span>
                <input id="cidade" name="cidade" class="form-control" placeholder="" type="text">
              </div>
            </div>

            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">Estado</span>
                <input id="estado" name="estado" class="form-control" placeholder="" type="text">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label" for="pergunta1">O que mais gosta de fazer ?</label>
              <div class="col-md-3">
                <input id="pergunta1" name="pergunta1" class="form-control" placeholder="" type="text">
              </div>    

              <label class="col-md-3 control-label" for="pergunta2">O que motivou a ser um mantenedor ?</label>
              <div class="col-md-3">
                <input id="pergunta2" name="pergunta2" class="form-control" placeholder="" type="text">
              </div>     
          </div>

          <div class="form-group">
            <label class="col-md-1 control-label" for="pergunta1">Valor: </label>
              <div class="col-md-1">
                <input id="valor" name="valor" class="form-control" placeholder="R$" type="text" onkeypress="$(this).mask('R$ 999.990,00')">
              </div>     

              <label class="col-md-1 control-label" for="radios">Doação</label>
                <div class="col-md-2">
                  <label class="radio-inline" for="radios-0">
                    <input name="doacao" id="doacao" value="unica " type="radio"> Única
                  </label>
                  <label class="radio-inline" for="radios-1">
                    <input name="doacao" id="doacao" value="mensal " type="radio"> Mensal
                  </label>
                </div>   
          </div>


            <div class="form-group">
              <label class="col-md-1 control-label" for="textinput">Observações</label>
              <div class="col-md-6">
                <textarea id="textinput" name="obs" placeholder="" class="form-control input-md" type="text"></textarea>
              </div>
            </div>

            <input type="hidden" name="session" value="<?php echo $_SESSION['email']; ?>">

            <div class="form-group">
              <label class="col-md-1 control-label"></label>
              <div class="col-md-8">
                <button class="btn btn-success" type="Submit">Cadastrar</button>
                <a href="mantenedores.php"><button class="btn btn-danger" type="button">Cancelar</button><a/>
              </div>
            </div>

          </div>
        </div>
      </div>
    </fieldset>
  </form>
</body>

</html>