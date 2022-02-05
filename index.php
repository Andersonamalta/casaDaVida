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

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/casadavida.css" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

</head>

<body id="page-top">

  <?php

    include_once('conexao.php');
    

    $QUERYCOLABORADOR = "SELECT * FROM colaboradores";
    $executa_querycolaborador = mysqli_query($conexao, $QUERYCOLABORADOR);
    $conta_linhas_colaborador = mysqli_num_rows($executa_querycolaborador);

    $QUERYMANTENEDOR = "SELECT * FROM mantenedores";
    $executa_query_mantenedor = mysqli_query($conexao, $QUERYMANTENEDOR);
    $conta_linhas_mantenedor = mysqli_num_rows($executa_query_mantenedor);

    $QUERYVOLUNTARIOS = "SELECT * FROM voluntarios";
    $executa_query_voluntarios = mysqli_query($conexao, $QUERYVOLUNTARIOS);
    $conta_linhas_voluntarios = mysqli_num_rows($executa_query_voluntarios);

    date_default_timezone_set('America/Bahia');
    $dia = date("d");

    /* recuperar todos os aniversariantes do dia da tabela voluntarios */
    $recuperar_niver = mysqli_query($conexao, "SELECT * FROM aniversariantes WHERE Month(dataNascimento) = Month(Now()) AND Day(dataNascimento) = '$dia'");
    $consulta_aniversarios = mysqli_num_rows($recuperar_niver);

  ?>

  <div style="background-color: #1C81C8">
    
    <div class= "row p-2">
        
      <div class="col-md-8">  
          <a class="text-white" href="index.php"><img src="imagens/logo.png" style="width: 220px; height: 50px"></a>
      </div>

      <div class="col-md-3" style="color: white; margin-top: 13px;">
        <h7>Usuário: <?php echo $_SESSION['email'];?> </h7>
      </div>

      <div class="col-md-1">   

        <a href="logout.php"><button id=button_sair type="button" class="btn btn-outline-dark waves-effect" style = "float: right; margin-top: 6px;color: white; border-color: white;"><i class="fas fa-sign-out-alt" aria-hidden="true" ></i> Sair</button></a>
      </div>

    </div>

  </div>

  <div id="wrapper">

    <div id="content-wrapper">

      <div class="container-fluid"><br>

        <div class="row" style="height: 50px">
          
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100" style="box-shadow: 4px 9px 2px #ccc;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
                <div class="row">
                  <h5 style="margin-top: 2px">Colaboradores</h5><h1 class="col-sm-4" style="opacity: 0.5"><?php echo $conta_linhas_colaborador;?></h1>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="colaboradores.php">
                <span class="float-left">Mais detalhes</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100" style="box-shadow: 4px 9px 2px #ccc;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-handshake"></i>
                </div>
                <div class="row">
                  <h5 style="margin-top: 2px">Mantenedores</h5><h1 class="col-sm-4" style="opacity: 0.5"><?php echo $conta_linhas_mantenedor;?></h1>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="mantenedores.php">
                <span class="float-left">Mais detalhes</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100" style="box-shadow: 4px 9px 2px #ccc;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-address-book"></i>
                </div>
                <div class="row">
                  <h5 style="margin-top: 2px">Voluntários</h5><h1 class="col-sm-4" style="opacity: 0.5"><?php echo $conta_linhas_voluntarios;?></h1>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="voluntarios.php">
                <span class="float-left">Mais detalhes</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100" style="box-shadow: 4px 9px 2px #ccc;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-heart"></i>
                  </div>
                  <h5>Doações</h5>
                </div>
                  <a class="card-footer text-white clearfix small z-1" href="doacao.php">
                    <span class="float-left">Mais detalhes</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
              </div>
          </div>

          

          <div class="col-xl-3 col-sm-6">
              <div class="card text-white bg-info o-hidden h-100" style="box-shadow: 4px 9px 2px #ccc;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list-alt"></i>
                  </div>
                  <h5 style="margin-top: 15px;">Itens</h5>
                </div>
                  <a class="card-footer text-white clearfix small z-1" href="itens.php">
                    <span class="float-left">Mais detalhes</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
              </div>
          </div>

          <div class="col-xl-3 col-sm-6">
              <div class="card text-white bg-secondary o-hidden h-100" style="box-shadow: 4px 9px 2px #ccc;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-utensils"style="color: white"></i>
                  </div>
                  <h5 style="margin-top: 15px; color: white">Controle de refeições</h5>
                </div>
                  <a class="card-footer text-white clearfix small z-1" href="controle_refeicoes.php">
                    <span class="float-left" style="color: white">Mais detalhes</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right" style="color: white"></i>
                    </span>
                  </a>
              </div>
          </div>

          <div class="col-xl-3 col-sm-6">
              <div class="card text-white bg-dark o-hidden h-100" style="box-shadow: 4px 9px 2px #ccc;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-question-circle"style="color: white"></i>
                  </div>
                  <h5 style="margin-top: 15px; color: white">Manual do usuário</h5>
                </div>
                  <a class="card-footer text-white clearfix small z-1" href="manual.php">
                    <span class="float-left" style="color: white">Mais detalhes</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right" style="color: white"></i>
                    </span>
                  </a>
              </div>
          </div>

          <div class="col-xl-3 col-sm-6">
              <div class="card text-white bg-light o-hidden h-100" style="box-shadow: 4px 9px 2px #ccc;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-info-circle"style="color: black"></i>
                  </div>
                  <h5 style="margin-top: 15px; color: black">Sobre</h5>
                </div>
                  <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#ModalSobre">
                    <span class="float-left" style="color: black">Mais detalhes</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right" style="color: black"></i>
                    </span>
                  </a>
              </div>
          </div>


        </div>
      
        <div class="card" style="width: 20.8rem; float: left; margin-top: 270px;">

          <div class="view overlay">
            <img class="card-img-top" src="imagens/niverdia.jpg" alt="Card image cap">
          </div>
          
          <div class="card-body"> 

            <?php while($consulta_aniversarios = mysqli_fetch_array($recuperar_niver)){ ?>

              <div class="alert alert-primary" role="alert" style="text-align: center; box-shadow: 4px 9px 2px #ccc;">
                <b>👤 <?php echo $consulta_aniversarios['nome'];?></b>
                <h6 class="card-text" style="margin-top: 5px;"> 📞 <?php echo $consulta_aniversarios['whatsapp'];?></h6>
              </div>

            <?php } ?>

          </div>
        </div>


      </div>
    </div>
  </div>
  
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Modal -->
  <div class="modal fade" id="ModalSobre" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalLongoExemplo">Sobre</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body" align="justify">

          <h6> O sistema da Casa da Vida foi desenvolvido por Anderson Alves de Malta, graduando do curso de Sistemas de Informação, pela UniFtc, como requisito da matéria estágio supervisionado, tendo como orientador o professor e mestre Lucas Amorim de Oliveira.</h6> 

          <h6>O objetivo do sistema é auxiliar no cadsatro de todos os colaboradores, mantenedores e voluntarios assim como as doações recebidas, o controle de itens que a instituição possue e as refeições diarias.</h6>

        </div>
        
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
