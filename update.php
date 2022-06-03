<?php
    require "conexao.php";
 

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $aniversario = $_POST["aniversario"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $mae = $_POST["mae"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];


    $sql = "UPDATE Usuarios SET USU_NOME=?, USU_ANIVERSARIO=?, USU_CPF=?, USU_TELEFONE=?, USU_MAE=?, USU_EMAIL=?, USU_ENDERECO=?, USU_CEP=?, USU_LOGIN=?, USU_SENHA=? WHERE USU_CODIGO=?";

    if($stmt = mysqli_prepare($connection, $sql)){
        mysqli_stmt_bind_param($stmt, "ssssssssssi", $param_nome, $param_aniversario, $param_cpf, $param_telefone, $param_mae, $param_email, $param_endereco, $param_cep, $param_login, $param_senha, $id);

        $param_nome = $nome;
        $param_aniversario = $aniversario;
        $param_cpf = $cpf;
        $param_telefone = $telefone;
        $param_mae = $mae;
        $param_email = $email;
        $param_endereco = $endereco;
        $param_cep = $cep;
        $param_login = $login;
        $param_senha = $senha;

        if(mysqli_stmt_execute($stmt)){

            mysqli_commit($connection);

            mysqli_stmt_close($stmt);

            mysqli_close($connection);

            header("location: consulta.php");
            exit();

        } else{
            header("location: error.php");
            exit();
        }
    }
?>