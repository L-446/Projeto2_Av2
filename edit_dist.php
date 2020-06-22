<?php //APRESENTAR DIRETO EM TABELA

  //echo "<table style='border: solid 1px black;'>";
  //echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

  include "conexao.php";
  $conn = connection();

  try {
    //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM empresas WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $id    = $_GET['id'];
    $stmt->execute();


    //ESTE FOREACH É RESPONSAVEL POR COLOCAR OS DADOS EM CADA LINHA DA TABELA - LISTA OS DADOS NO BANCO
    foreach($stmt->fetchAll() as $k=>$v) {

      $id                     = $v['id'];
      $nome                   = $v['nome'];
      $cnpj                   = $v['cnpj'];
      $inscricao_estadual     = $v['inscricao_estadual'];
      $email                  = $v['email'];
      $cep                    = $v['cep'];
      $endereco               = $v['endereco'];
      $numero                 = $v['numero'];
      $bairro                 = $v['bairro'];
      $cidade                 = $v['cidade'];
      $uf                     = $v['uf'];
      $celular                = $v['celular'];

    }
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Ambiental Baobá</title>
 
  <!-- Icone da Pagina--> 
  <link rel="icon" href="dist/img/ecolo.ico">

  <?php
    
    include "_includes/header.php";
  
  ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <?php
   
    include "_includes/leftnav.php";
  
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><b>Atualização de Empresa</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="index_dist.php">Empresa</li></a> 
              <li class="breadcrumb-item active">Ambiental Baobá</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        
   
      <div class="card card-success">
         <div class="card-header">
           <h3 class="card-title"><b>Atualizar Empresa</b></h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="form_empresa" method="POST" action="editar.php?id=<?php echo $id;?>">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" id="id" name= "id" required disabled value="<?php echo $id;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="nome" name= "nome" value="<?php echo $nome;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">CNPJ</label>
                    <input type="text" class="form-control" id="cnpj" name= "cnpj" value="<?php echo $cnpj;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Inscrição Estadual</label>
                    <input type="text" class="form-control" id="inscricao_estadual" name= "inscricao_estadual" value="<?php echo $inscricao_estadual;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">E-mail</label>
                    <input type="text" class="form-control" id="email" name= "email" value="<?php echo $email;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">CEP</label>
                    <input type="text" class="form-control" id="cep" name= "cep" value="<?php echo $cep;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name= "endereco" value="<?php echo $endereco;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">N°</label>
                    <input type="text" class="form-control" id="numero" name= "numero" value="<?php echo $numero;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name= "bairro" value="<?php echo $bairro;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name= "cidade" value="<?php echo $cidade;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">UF</label>
                    <input type="text" class="form-control" id="uf" name= "uf" value="<?php echo $uf;?>" required>
                  </div>

                  <!-- phone mask -->
                <div class="form-group">
                  <label>Fone</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" id="celular" name="celular" class="form-control" data-inputmask='"mask": "(88)99999-9999"' data-mask value="<?php echo $celular;?>">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success"><b>Atualizar</b></button>
                </div>
              </form>
            </div>
            <!-- /.card -->
    
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->

    <?php

    include "_includes/footer.php";

    ?>



</body>
</html>
