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
        
        <div class="col-md-2">  
          <a href="index.php"><i class="fa fa-chevron-left" aria-hidden="true" style="margin-top: 12px"></i></a>
        </div>
        <div class="col-md-5">  
          <h5 id="texto_colab" style="text-align: center; margin-top: 12px">Controle de refeições</h5>
        </div>
        <div class="col-md-5"> 

          <button id=button_colabo type="button" data-toggle="modal" data-target="#controleModal"class="btn btn-outline-primary waves-effect" style = "float: right; margin-top: 5px"><i class="fa fa-plus" aria-hidden="true" ></i> Mês</button>
        </div>
      </div>
    </div>


    <!-- Tabela onde são listados todos os colaboradores cadastrados no banco-->
    <?php

      include_once('conexao.php');

      $consulta = mysqli_query($conexao, "SELECT * FROM controle_refeicaoMes ORDER BY id DESC");

      $row = mysqli_num_rows($consulta);
      
    ?>

    <table class="table table-white">

      <thead>
        <tr style="text-align: center;">
          <th scope="col">Mês</th>
          <th scope="col">Ano</th>
          <th scope="col">Total</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>

      <tbody>
        <?php while($row = mysqli_fetch_array($consulta)){ ?>
        <tr style="text-align: center;">
          <td><?php if($row['mes'] == "01"){ 
                        echo "Janeiro";
                      }if($row['mes'] == "02"){
                        echo "Fevereiro";
                      }if($row['mes'] == "03"){
                        echo "Março";
                      }if($row['mes'] == "04"){
                        echo "Abril";
                      }if($row['mes'] == "05"){
                        echo "Maio";
                      }if($row['mes'] == "06"){
                        echo "Junho";
                      }if($row['mes'] == "07"){
                        echo "Julho";
                      }if($row['mes'] == "08"){
                        echo "Agosto";
                      }if($row['mes'] == "09"){
                        echo "Setembro";
                      }if($row['mes'] == "10"){
                        echo "Outubro";
                      }if($row['mes'] == "11"){
                        echo "Novembro";
                      }if($row['mes'] == "12"){
                        echo "Dezembro";
                      } ?></td>
          <td><?php echo $row['ano']; ?></td>
          <td><?php echo $row['total']; ?></td>
          <td></td>

          <td> <a href="criar_semana.php?&id=<?php echo $row['id'];?>&usuario=<?php echo $_SESSION['email']?>"><button class="btn btn-primary" style="padding:5px"><i class="fa fa-plus"></i> Semana</button></a></td>

          <td> <a href="refeicao_semana.php?&id=<?php echo $row['id'];?>"><button class="btn btn-success" style="padding:5px"><i class="fas fa-door-open"></i> Abrir</button></a></td>


          <td> <a href="javascript: if(confirm ('Tem certeza que deseja excluir o mês ?')) location.href= 'excluir_mes_controleRefeicao.php?&id=<?php echo $row['id'];?>';"><button class="btn btn-danger" style="padding: 5px"><i class="fa fa-ban" aria-hidden="true"></i> Excluir </button></a></td>
        </tr>
        <?php }?>
      </tbody>

    </table>

    <!-- Modal -->
    <div class="modal fade" id="controleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-notify modal-success" role="document">
        <div class="modal-content">
                  
          <div class="modal-header" style="background-color: #1C81C8; box-shadow: 0px 3px 1px #D3D3D3;">
            <h3 style="color: white;">Adicionar mês</h3>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text" style="color: white;">&times;</span>
            </button>
          </div>

                  
          <div class="modal-body"><br>

            <form class="form-horizontal" method="POST" action="controle_refeicaoMes.php">

              <div class="form-group">
                <div class="row">
                  <div>
                    <label class="mdb-main-label" style="margin-left: 13px; margin-top: 5px">Selecione o mês </label>
                  </div>
                  <div>
                    <select class="form-control" name="mes" style="background-color: white; width: 110px; margin-left: 5px;">
                      <option value="" disabled selected></option>
                      <option value="01">Janeiro</option>
                      <option value="02">Fevereiro</option>
                      <option value="03">Março</option>
                      <option value="04">Abril</option>
                      <option value="05">Maio</option>
                      <option value="06">Junho</option>
                      <option value="07">Julho</option>
                      <option value="08">Agosto</option>
                      <option value="09">Setembro</option>
                      <option value="10">Outubro</option>
                      <option value="11">Novembro</option>
                      <option value="12">Dezembro</option>
                    </select>
                  </div>
                </div>
              </div><br>
              
              <div class="form-group">
                <div class="row">
                  <div style="margin-top: 5px">
                    <label class="col-md-1 control-label">Ano</label>
                  </div>
                  <div class="col-md-3">
                    <input id="ano" name="ano" placeholder="" class="form-control" type="text">
                  </div>
                </div>
              </div>

              <input type="hidden" name="session" value="<?php echo $_SESSION['email']; ?>">

                <div class="modal-footer justify-content-center">
                  <button type="submit" class="btn btn-success">Confirmar</button>
                  <button type="button" id="btnCancelar" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>  
          </div>
        </div>
      </div>
    </div>


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

    <script>
     $(function (){
        $("#btnCancelar").click(function (){
             $( ".form-control" ).each(function() {
                  $(".form-control").val("");
             });
        });
     });
    </script>

  </body>

</html>
