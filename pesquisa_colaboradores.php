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
          <a href="colaboradores.php"><i class="fa fa-chevron-left" aria-hidden="true" style="margin-top: 12px"></i></a>
        </div>
        <div class="col-md-5">  
          <h5 id="texto_colab" style="text-align: center; margin-top: 12px">Colaboradores</h5>
        </div>
        <div class="col-md-3" style="margin-top: 4.1px">
          <form class="form-inline my-2 my-lg-0" method="POST" action="pesquisa_colaboradores.php">
            <input class="form-control mr-sm-2" style="width: 200px" name="pesquisar" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search" aria-hidden="true" ></i> Pesquisar</button>
          </form>
        </div>
        <div class="col-md-2"> 

          <a href="formulario_colaborador.php"><button id=button_colabo type="button" class="btn btn-outline-primary waves-effect" style = "float: right; margin-top: 5px"><i class="fa fa-plus" aria-hidden="true" ></i> Colaboradores</button></a>
        </div>
      </div>
    </div>


    <!-- Tabela onde são listados todos os colaboradores cadastrados no banco-->
    <?php

      include_once('conexao.php');
      $pesquisa = $_POST['pesquisar'];


      $consulta = mysqli_query($conexao, "SELECT * FROM colaboradores WHERE nome LIKE '%$pesquisa%' LIMIT 20");

      $row = mysqli_num_rows($consulta);
      
    ?>

    <table class="table table-white">

      <thead>
        <tr style="text-align: center;">
          <th scope="col">Nome</th>
          <th scope="col">CPF</th>
          <th scope="col">Telefone</th>
          <th scope="col">E-mail</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>

      <tbody>
        <?php while($row = mysqli_fetch_array($consulta)){ ?>
        <tr style="text-align: center;">
          <td><?php echo $row['nome']; ?></td>
          <td><?php echo $row['cpf']; ?></td>
          <td><?php echo $row['telefone']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td> <a href="visualizar_colaborador.php?&id=<?php echo $row['id'];?>"><button class="btn btn-success" style="padding:5px"><i class="fa fa-eye"></i> Visualizar </button></a></td>

          <td> <a href="formulario_editar_colaborador.php?&id=<?php echo $row['id'];?>"><button class="btn btn-warning" style="padding:5px"><i class="fa fa-edit"></i> Editar </button></a></td>

          <td> <a href="javascript: if(confirm ('Tem certeza que deseja excluir o colaborador <?php echo $row['nome']; ?> ?')) location.href= 'excluir_colaboradores.php?&id=<?php echo $row['id'];?>';"><button class="btn btn-danger" style="padding: 5px"><i class="fa fa-ban" aria-hidden="true"></i> Excluir </button></a></td>
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

  </body>

</html>
