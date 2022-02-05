<!DOCTYPE html>
<html lang="en">

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

  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

</head>

<body id = "login"><br><br><br><br><br><br>

  <div class="container">
    <div class="card card-login mx-auto mt-5"><br><img src="imagens/2.png" width="150" id = "logo_login"/><br>
      <div class="card-body">
        <form method="POST" action="autenticacao.php">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name = "email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Digite seu e-mail</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name = "senha" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">*************</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
        </form><br>
        <div class="text-center">
          <a href="" class="d-block small" data-toggle="modal" data-target="#modalArearRestrita">Cadastrar novo usuário</a>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="modalArearRestrita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center" style="background-color: #1C81C8; box-shadow: 0px 3px 1px #D3D3D3;">
          <h4 style="color: white" class="modal-title w-100 font-weight-bold">Área restrita</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span style="color: white" aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="autenticacao_area_restrita.php">
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <input type="email" id="defaultForm-email" name = "email_modal" placeholder="Digite seu e-mail" class="form-control validate">
            </div>

            <div class="md-form mb-4">
              <input type="password" id="defaultForm-pass" name = "senha_modal" placeholder="**************" class="form-control validate">
            </div>

          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
          </div>
      </form>
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
