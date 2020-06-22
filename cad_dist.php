<?php
session_start();
include "conexao.php";
$conn = connection();
//Vai substituir --> $conn = new PDO...

try {
  //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO empresas (nome, cnpj, inscricao_estadual, email, cep, endereco, numero, bairro, cidade, uf, celular)
  VALUES (:nome, :cnpj, :inscricao_estadual, :email, :cep, :endereco, :numero, :bairro, :cidade, :uf, :celular)");
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

  @$nome                   =  $_POST['nome'];
  @$cnpj                   =  $_POST['cnpj'];
  @$inscricao_estadual     =  $_POST['inscricao_estadual'];
  @$email                  =  $_POST['email'];
  @$cep                    =  $_POST['cep'];
  @$endereco               =  $_POST['endereco'];
  @$numero                 =  $_POST['numero'];
  @$bairro                 =  $_POST['bairro'];
  @$cidade                 =  $_POST['cidade'];
  @$uf                     =  $_POST['uf'];
  @$celular                =  $_POST['celular'];
  $stmt->execute();

  $_SESSION['msg_cad'] = "Empresa cadastrada com sucesso!";
    } catch(PDOException $e) {
        $_SESSION['msg_cad'] = "Error: " . $e->getMessage();
    }
$conn = null;

header('Location: index_dist.php');

?>