<?php
    require "conexao.php";

    $sql = "DELETE FROM usuarios WHERE USU_CODIGO = ?";

    if($stmt = mysqli_prepare($connection, $sql)){

        mysqli_stmt_bind_param($stmt, "i", $param_id);


        $param_id = $_GET["id"];


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
