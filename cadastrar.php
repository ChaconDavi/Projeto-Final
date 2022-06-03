<?php

    $nome = $_POST['nome'];
    $aniversario = $_POST['aniversario'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $mae = $_POST['mae'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    

    $connection = new mysqli ('localhost', 'root', 'root', 'mydb');

    if($connection -> connect_error){
        die('Error ao conectar : '.$connection->connect_error);
    }else{
        $stmt = $connection->prepare("insert into usuarios(USU_NOME, USU_ANIVERSARIO, USU_CPF, USU_TELEFONE, USU_MAE, USU_EMAIL, USU_ENDERECO, USU_CEP, USU_LOGIN, USU_SENHA)
                                    values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssss", $nome, $aniversario, $cpf, $telefone, $mae, $email, $endereco, $cep, $login, $senha);
        $stmt->execute();
        header("location: consulta.php");

        $stmt->close();
        $connection->close();
    }
?>