<?php

session_start();
include "conexao.php";
$conn = connection();

try {
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  // prepare sql and bind parameters
  $stmt = $conn->prepare("UPDATE empresas SET nome=:nome, cnpj=:cnpj, inscricao_estadual=:inscricao_estadual, email=:email, cep=:cep, endereco=:endereco, numero=:numero, bairro=:bairro, cidade=:cidade, uf=:uf, celular=:celular WHERE id=:id");
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':cnpj', $cnpj);
  $stmt->bindParam(':inscricao_estadual', $inscricao_estadual);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':cep', $cep);
  $stmt->bindParam(':endereco', $endereco);
  $stmt->bindParam(':numero', $numero);
  $stmt->bindParam(':bairro', $bairro);
  $stmt->bindParam(':cidade', $cidade);
  $stmt->bindParam(':uf', $uf);
  $stmt->bindParam(':celular', $celular);


  $id                      = $_GET['id'];
  $nome                   =  $_POST['nome'];
  $cnpj                   =  $_POST['cnpj'];
  $inscricao_estadual     =  $_POST['inscricao_estadual'];
  $email                  =  $_POST['email'];
  $cep                    =  $_POST['cep'];
  $endereco               =  $_POST['endereco'];
  $numero                 =  $_POST['numero'];
  $bairro                 =  $_POST['bairro'];
  $cidade                 =  $_POST['cidade'];
  $uf                     =  $_POST['uf'];
  $celular                =  $_POST['celular'];
  $stmt->execute();

  $_SESSION['msg_atual'] = "Empresa Atualizada com sucesso!";
} catch(PDOException $e) {
    $_SESSION['msg_atual'] = "Error: " . $e->getMessage();
}
$conn = null;

header('Location: index_dist.php');

?>