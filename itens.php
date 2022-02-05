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
          
          <div class="col-md-1">  
            <a href="index.php"><i class="fa fa-chevron-left" aria-hidden="true" style="margin-top: 12px"></i></a>
          </div>
          <div class="col-md-7">  
            <h5 id="texto_colab" style="text-align: center; margin-top: 12px">Itens</h5>
          </div>
          <div class="col-md-2"> 
            <a href="registro_saida.php"><button id=button_colabo type="button" class="btn btn-outline-primary waves-effect" style = "float: right; margin-top: 5px"><i class="fas fa-sign-out-alt" aria-hidden="true" ></i> Registro de Saidas</button></a>
          </div>
          <div class="col-md-2"> 

            <button id=button_item type="button" data-toggle="modal" data-target="#cadastroItemModal" class="btn btn-outline-primary waves-effect" style = "float: right; margin-top: 5px"><i class="fa fa-plus" aria-hidden="true" ></i> Item</button>
          </div>
        </div>
      </div>


      <!-- Tabela onde são listados todos os colaboradores cadastrados no banco-->
      <?php

        include_once('conexao.php');

        $consulta = mysqli_query($conexao, "SELECT * FROM item ORDER BY id ASC");

        $row = mysqli_num_rows($consulta);
        
      ?>

      <table class="table table-white">

        <thead>
          <tr style="text-align: center;">
            <th scope="col">Código</th>
            <th scope="col">Descrição</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Disponível</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>

        <tbody>
          <?php while($row = mysqli_fetch_array($consulta)){ ?>
          <tr style="text-align: center;">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['descricao']; ?></td>
            <td><?php echo $row['quantidade']; ?></td>
            <td><?php echo $row['quantidade_disponivel']; ?></td>

            <td><button class="btn btn-warning" data-toggle="modal" data-target="#saidaItemModal" style="padding:5px"><i class="fas fa-sign-out-alt"></i> Saida </button></td>

            <td> <a href="javascript: if(confirm ('Tem certeza que deseja excluir o item <?php echo $row['descricao']; ?> ?')) location.href= 'excluir_item.php?&id=<?php echo $row['id'];?>';"><button class="btn btn-danger" style="padding: 5px"><i class="fa fa-ban" aria-hidden="true"></i> Excluir </button></a></td>
          </tr>
          <?php }?>
        </tbody>

      </table>


      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Page level plugin JavaScript-->
      <script src="vendor/datatables/jquery.dataTables.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin.min.js"></script>

      <!-- Demo scripts for this page-->
      <script src="js/demo/datatables-demo.js"></script>

    <!-- Modal para cadastro de um item novo -->
    <div class="modal fade" id="cadastroItemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-notify modal-success" role="document">
        <div class="modal-content">
                  
          <div class="modal-header" style="background-color: #1C81C8; box-shadow: 0px 3px 1px #D3D3D3;">
            <h3 style="color: white;">Novo item</h3>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text" style="color: white;">&times;</span>
            </button>
          </div>

                  
          <div class="modal-body">

            <form class="form-horizontal" method="POST" action="cadastro_item.php">
                      
              <div class="form-group">
                <label class="col-md-1 control-label">Descrição</label>
                  <div class="col-md-9">
                    <input id="descricao" name="descricao" placeholder="" class="form-control" type="text">
                  </div>
              </div>

              <div class="form-group">
                <label class="col-md-1 control-label">Quantidade</label>
                <div class="def-number-input number-input safari_only">
                  <div class="col-md-3">
                    <input class="form-control" min="0" name="quantidade" value="0" type="number">
                  </div>
                </div>
              </div>

              <input type="hidden" name="session" value="<?php echo $_SESSION['email']; ?>">

                <div class="modal-footer justify-content-center">
                  <button type="submit" class="btn btn-success">Cadastrar</button>
                  <button type="button" id="btn_cancelarCadastro" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>  
          </div>
        </div>
      </div>
    </div>

    <script>
     $(function (){
        $("#btn_cancelarCadastro").click(function (){
             $( ".form-control" ).each(function() {
                  $(".form-control").val("");
             });
        });
     });
    </script>

    <!-- Modal para saida de um item -->
    <div class="modal fade" id="saidaItemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-notify modal-success" role="document">
        <div class="modal-content">
                  
          <div class="modal-header" style="background-color: #1C81C8; box-shadow: 0px 3px 1px #D3D3D3;">
            <h3 style="color: white;">Saida de item</h3>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text" style="color: white;">&times;</span>
            </button>
          </div>

                  
          <div class="modal-body">

            <form class="form-horizontal" method="POST" action="saida_item.php">

              <div class="form-group">
                <label class="col-md-4 control-label">Código do item</label>
                  <div class="col-md-2">
                    <input id="codigo" name="codigo" placeholder="" class="form-control" type="text">
                  </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Data de saida</label>
                <div class="col-md-6">
                  <input id="dataSaida" name="dataSaida" placeholder="DD/MM/AAAA" class="form-control" type="date" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-1 control-label">Quantidade</label>
                <div class="def-number-input number-input safari_only">
                  <div class="col-md-2">
                    <input class="form-control" min="0" name="quantidade" value="0" type="number">
                  </div>
                </div>
              </div>
                      
              <div class="form-group">
                <label class="col-md-1 control-label">Responsável</label>
                  <div class="col-md-9">
                    <input id="responsavel" name="responsavel" placeholder="" class="form-control" type="text">
                  </div>
              </div>

              <div class="form-group">
                <label class="col-md-1 control-label">Justificativa</label>
                  <div class="col-md-9">
                    <textarea id="justificativa" name="justificativa" placeholder="" class="form-control" maxlength="40" type="text"></textarea>
                  </div>
              </div>

              <input type="hidden" name="session" value="<?php echo $_SESSION['email']; ?>">

                <div class="modal-footer justify-content-center">
                  <button type="submit" class="btn btn-success">Confirmar</button>
                  <button type="button" id="btn_cancelarSaida" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>  
          </div>
        </div>
      </div>
    </div>

    <script>
     $(function (){
        $("#btn_cancelarSaida").click(function (){
             $( ".form-control" ).each(function() {
                  $(".form-control").val("");
             });
        });
     });
    </script>

  </body>
</html>
