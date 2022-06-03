<?php
    require "conexao.php";
     
    $nome = $login = $senha = "";
 
    $id =  trim($_GET["id"]);
        
    $sql = "SELECT USU_NOME, USU_ANIVERSARIO, USU_CPF, USU_TELEFONE, USU_MAE, USU_EMAIL, USU_ENDERECO, USU_CEP, USU_LOGIN, USU_SENHA FROM Usuarios WHERE USU_CODIGO = ?";

    if($stmt = mysqli_prepare($connection, $sql)){
       
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        $param_id = $id;
        
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
            } else{
                header("location: error.php");
                exit();
            }
            
        } else{
            header("location: error.php");
            exit();
        }
    }
        
    mysqli_stmt_close($stmt);
    
    mysqli_close($connection);
?>
 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atualização de dados dos usuários</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
		Nome: <input type="text" name="nome" value="<?php echo $nome ?>">
		<br>
        Aniversário:<input type="date" name="aniversario" value="<?php echo $aniversario ?>">
        <br>
        CPF:<input type="text" name="cpf" value="<?php echo $cpf ?>">
        <br>
        Telefone:<input type="text" name="telefone" value="<?php echo $telefone ?>">
        <br>
        MÃE:<input type="text" name="mae" value="<?php echo $mae ?>">
        <br>
        E-MAIL:<input type="text" name="email" value="<?php echo $email ?>">
        <br>
        Endereço:<input type="text" name="endereco" value="<?php echo $endereco ?>">
        <br>
        CEP:<input type="text" name="cep" value="<?php echo $cep ?>">
        <br>
        Login:<input type="text" name="login" value="<?php echo $login ?>">
        <br>
        Senha:<input type="text" name="senha" value="<?php echo $senha ?>">
        <br><br>
        <input type="submit" value="Submeter">
        <a href="consulta.php">Cancelar</a>
    </form>
</body>
</html>