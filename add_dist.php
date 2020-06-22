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
            <h1 class="m-0 text-dark"><b>Adicionar Empresas</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="index_dist.php">Empresas</li></a> 
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
           <h3 class="card-title"><b>Cadastrar Empresas</b></h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="form_empresa" method="POST" action="cad_dist.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="nome" name= "nome" placeholder="Nome da Empresa" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">CNPJ</label>
                    <input type="text" class="form-control" id="cnpj" name= "cnpj" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Inscrição Estadual</label>
                    <input type="text" class="form-control" id="inscricao_estadual" name= "inscricao_estadual" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">E-mail</label>
                    <input type="text" class="form-control" id="email" name= "email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">CEP</label>
                    <input type="text" class="form-control" id="cep" name= "cep" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name= "endereco" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">N°</label>
                    <input type="text" class="form-control" id="numero" name= "numero" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name= "bairro" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name= "cidade" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">UF</label>
                    <input type="text" class="form-control" id="uf" name= "uf" required>
                  </div>
                  
                  <!-- phone mask -->
                <div class="form-group">
                  <label>Fone</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" id="celular" name="celular" class="form-control" data-inputmask='"mask": "(88)99999-9999"' data-mask>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success"><b>Cadastrar</b></button>
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
