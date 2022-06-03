<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    require_once "conexao.php";
        
    $sql = "SELECT * FROM usuarios";
    if($result = mysqli_query($connection, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo '<table border="1">';
                echo "<tr>";
                echo "<th>#</th>";
                echo "<th>Nome</th>";
                echo "<th>Aniversário</th>";
                echo "<th>CPF</th>";
                echo "<th>Telefone</th>";
                echo "<th>MÃE</th>";
                echo "<th>E-mail</th>";
                echo "<th>Endereço</th>";
                echo "<th>CEP</th>";
                echo "<th>Login</th>";
                echo "<th>Senha</th>";
                
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['USU_CODIGO'] . "</td>";
                    echo "<td>" . $row['USU_NOME'] . "</td>";
                    echo "<td>" . $row['USU_ANIVERSARIO'] . "</td>";
                    echo "<td>" . $row['USU_CPF'] . "</td>";
                    echo "<td>" . $row['USU_TELEFONE'] . "</td>";
                    echo "<td>" . $row['USU_MAE'] . "</td>";
                    echo "<td>" . $row['USU_EMAIL'] . "</td>";
                    echo "<td>" . $row['USU_ENDERECO'] . "</td>";
                    echo "<td>" . $row['USU_CEP'] . "</td>";
                    echo "<td>" . $row['USU_LOGIN'] . "</td>";
                    echo "<td>" . $row['USU_SENHA'] . "</td>";
                    echo "<td>";
                        echo '<a href="read.php?id='. $row['USU_CODIGO'] .'">visualizar</a>|';
                        echo '<a href="update_form.php?id='. $row['USU_CODIGO'] .'">atualizar</a>|';
                        echo '<a href="delete.php?id='. $row['USU_CODIGO'] .'">excluir</a>';
                    echo "</td>";
                echo "</tr>";
            }
        echo "</table>";
        mysqli_free_result($result);
        } else{
            echo '<div>Não há ainda usuários cadastrados no banco de dados.</div>';
        }
    } else{
        header("location: error.php");
    exit();
    }

    mysqli_close($connection);
?>
    <br>    
    <a href="cadastro.php">Incluir Novo Usuário</a>
</body>
</html>