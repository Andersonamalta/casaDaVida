<!DOCTYPE html>
<html lang="en">

<?php 
  include('verifica_login.php');
?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Casa da Vida</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/casadavida.css" rel="stylesheet">

</head>

<body id = "login">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header" style="background-color: #1C81C8; color: white;">Cadastrar novo usuário</div>
      <div class="card-body">
        <form method="POST" action="cadastrar_usuario.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-8">
                <div class="form-label-group">
                  <input type="text" id="firstName" name="nome" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstName">Nome completo</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Endereço de e-mail</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Senha</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="confirma_senha" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirma senha</label>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
        </form>
        <div class="text-center">
          <a class="d-block medium mt-3" href="logout.php">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
