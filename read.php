<?php
 require "conexao.php";

 $sql = "SELECT USU_NOME, USU_ANIVERSARIO, USU_CPF, USU_TELEFONE, USU_MAE, USU_EMAIL, USU_ENDERECO, USU_CEP, USU_LOGIN, USU_SENHA FROM USUARIOS WHERE USU_CODIGO = ?";

 if($stmt = mysqli_prepare($connection, $sql)){
     mysqli_stmt_bind_param($stmt, "i", $param_id);
      
        $param_id = trim($_GET["id"]);

        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                $nome = $row["USU_NOME"];
                $aniversario = $row["USU_ANIVERSARIO"];
                $cpf = $row["USU_CPF"];
                $telefone = $row["USU_TELEFONE"];
                $mae = $row["USU_MAE"];
                $email = $row["USU_EMAIL"];
                $endereco = $row["USU_ENDERECO"];
                $cep = $row["USU_CEP"];
                $login = $row["USU_LOGIN"];
                $senha = $row["USU_SENHA"];
            }

            else{
                header("location: error.php");
                exit();
            }

        } else{
            echo "Algo deu errado. Tente novamente.";
        }
 }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        Nome: <?php echo $nome ?><br>
        Aniversário: <?php echo $aniversario ?><br>
        CPF: <?php echo $cpf ?><br>
        Telefone: <?php echo $telefone ?><br>
        MÃE: <?php echo $mae ?><br>
        E-MAIL: <?php echo $email ?><br>
        Endereço: <?php echo $endereco ?><br>
        CEP: <?php echo $cep ?><br>
        Login: <?php echo $login ?><br>
        Senha: <?php echo $senha ?><br>
        <a href="consulta.php" class ="btn btn-primary">Voltar</a>
    </body>
    </html>