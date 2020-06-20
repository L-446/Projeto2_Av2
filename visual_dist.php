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

      $id                  = $v['id'];
      $nome                = $v['nome'];
      $cnpj                = $v['cnpj'];
      $inscricao_estadual  = $v['inscricao_estadual'];
      $email               = $v['email'];
      $cep                 = $v['cep'];
      $endereco            = $v['endereco'];
      $numero              = $v['numero'];
      $bairro              = $v['bairro'];
      $cidade              = $v['cidade'];
      $uf                  = $v['uf'];
      $celular             = $v['celular'];
     
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
  <title> Loja Construção</title>
 
  <!-- Icone da Pagina--> 
  <link rel="icon" href="dist/img/php.ico">

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
            <h1 class="m-0 text-dark">Visualizar Dados</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="index_dist.php">Empresa</li></a> 
              <li class="breadcrumb-item active">Loja de Construção</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
   
      <div class="card card-info">
         <div class="card-header" style="text-align: center;">
           <h4><i class="fas fa-globe"></i> Dados da Empresa</h4>
            </div>
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <address>
                    <strong><?php echo mb_strtoupper ($nome, "utf-8");?></strong><br>
                    <b>CNPJ: </b><?php echo $cnpj;?><br>
                    <b>Inscrição Estadual: </b><?php echo $inscricao_estadual;?><br>
                    <b>E_mail: </b><?php echo $email;?><br>
                    <b>CEP: </b><?php echo $cep;?><br>
                    <b>Endereço: </b><?php echo $endereco;?><br>
                    <b>N°: </b><?php echo $numero;?><br>
                    <b>Bairro: </b><?php echo $bairro;?><br>
                    <b>Cidade: </b><?php echo $cidade;?><br>
                    <b>UF: </b><?php echo $uf;?><br>
                    <b>Telefone: </b><?php echo $celular;?></br>
                  </address>
                </div>
              </div>
              <!-- /.row -->

          
            </div>
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
