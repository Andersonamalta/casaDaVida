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

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/casadavida.css" rel="stylesheet">

  </head>

  <body id="page-top">

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

    <div style="background-color: #e3f2fd">
    
      <div class= "row p-2" >
        
        <div class="col-md-2">  
          <a href="index.php"><i class="fa fa-chevron-left" aria-hidden="true" style="margin-top: 12px"></i></a>
        </div>
        <div class="col-md-8">  
          <h5 id="texto_colab" style="text-align: center; margin-top: 12px">Manual do usuário</h5>
        </div>

      </div>
    </div><br><br>

    <ul class="list-group">
      <li class="list-group-item">
        <div class="md-v-line"></div><a data-toggle="modal" data-target="#modalCadastroNovoUsuario" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-address-book mr-5"></i>Cadastro de novo usuário</a>
      </li>
      <li class="list-group-item">
        <div class="md-v-line"></div><a data-toggle="modal" data-target="#modalCadastro" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-users mr-5"></i>Cadastro de colaboradores, mantenedores e voluntários</a>
      </li>
      <li class="list-group-item">
        <div class="md-v-line"></div><a data-toggle="modal" data-target="#modalCadastroDoação" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-heart mr-5"></i>Cadastro de doações</a>
      </li>
      <li class="list-group-item">
        <div class="md-v-line"></div><a data-toggle="modal" data-target="#modalItens" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-list-alt mr-5"></i>Cadastro, saídas e devoluções de itens</a>
      </li>
      <li class="list-group-item">
        <div class="md-v-line"></div><a data-toggle="modal" data-target="#modalControleRefeicao" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-utensils mr-5"></i>Controle de refeições</a>
      </li>
    </ul>


    <!-- Modal do tutorial do cadastro de novos usuário-->
    <div class="modal fade" id="modalCadastroNovoUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        
        <div class="modal-content">

          <div id="carouselIndicador" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#carouselIndicador" data-slide-to="0" class="active"></li>
              <li data-target="#carouselIndicador" data-slide-to="1"></li>
              <li data-target="#carouselIndicador" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="manual/cadastroNovo1.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/cadastroNovo2.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/cadastroNovo3.png" class="d-block w-100" alt="...">
              </div>
            </div>

            <a class="carousel-control-prev" href="#carouselIndicador" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicador" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
        </div>
       
      </div>
    </div>

    <!-- Modal do tutorial do cadastro de colaborador/mantenedor/voluntário-->
    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        
        <div class="modal-content">

          <div id="carouselIndicador2" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#carouselIndicador2" data-slide-to="0" class="active"></li>
              <li data-target="#carouselIndicador2" data-slide-to="1"></li>
              <li data-target="#carouselIndicador2" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="manual/cadastroCola_Mate_Volu1.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/cadastroCola_Mate_Volu2.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/cadastroCola_Mate_Volu3.png" class="d-block w-100" alt="...">
              </div>
            </div>

            <a class="carousel-control-prev" href="#carouselIndicador2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicador2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
        </div>
       
      </div>
    </div>

    <!-- Modal do tutorial do cadastro de doação-->
    <div class="modal fade" id="modalCadastroDoação" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        
        <div class="modal-content">

          <div id="carouselIndicador3" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#carouselIndicador3" data-slide-to="0" class="active"></li>
              <li data-target="#carouselIndicador3" data-slide-to="1"></li>
              <li data-target="#carouselIndicador3" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="manual/cadastroDoacao1.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/cadastroDoacao2.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/cadastroDoacao3.png" class="d-block w-100" alt="...">
              </div>
            </div>

            <a class="carousel-control-prev" href="#carouselIndicador3" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicador3" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
        </div>
       
      </div>
    </div>

    <!-- Modal do tutorial itens-->
    <div class="modal fade" id="modalItens" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        
        <div class="modal-content">

          <div id="carouselIndicador4" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#carouselIndicador4" data-slide-to="0" class="active"></li>
              <li data-target="#carouselIndicador4" data-slide-to="1"></li>
              <li data-target="#carouselIndicador4" data-slide-to="2"></li>
              <li data-target="#carouselIndicador4" data-slide-to="3"></li>
              <li data-target="#carouselIndicador4" data-slide-to="4"></li>
              <li data-target="#carouselIndicador4" data-slide-to="5"></li>
            </ol>

            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="manual/moduloItem1.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/moduloItem2.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/moduloItem3.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/moduloItem4.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/moduloItem5.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/moduloItem6.png" class="d-block w-100" alt="...">
              </div>
            </div>

            <a class="carousel-control-prev" href="#carouselIndicador4" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicador4" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
        </div>
       
      </div>
    </div>

    <!-- Modal do tutorial controle refeição-->
    <div class="modal fade" id="modalControleRefeicao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        
        <div class="modal-content">

          <div id="carouselIndicador5" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#carouselIndicador5" data-slide-to="0" class="active"></li>
              <li data-target="#carouselIndicador5" data-slide-to="1"></li>
              <li data-target="#carouselIndicador5" data-slide-to="2"></li>
              <li data-target="#carouselIndicador5" data-slide-to="3"></li>
              <li data-target="#carouselIndicador5" data-slide-to="4"></li>
              
            </ol>

            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="manual/controleRefeicao1.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/controleRefeicao2.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/controleRefeicao3.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/controleRefeicao4.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="manual/controleRefeicao5.png" class="d-block w-100" alt="...">
              </div>

            </div>

            <a class="carousel-control-prev" href="#carouselIndicador5" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicador5" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
        </div>
       
      </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <script src="js/sb-admin.min.js"></script>

    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
