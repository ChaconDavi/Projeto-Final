<?php 
session_start(); 
include "conexao.php";

if (isset($_POST['login']) && isset($_POST['senha'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['login']);
    $pass = validate($_POST['senha']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM usuarios WHERE USU_LOGIN='$uname' AND USU_SENHA='$pass'";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['USU_LOGIN'] === $uname && $row['USU_SENHA'] === $pass) {
                $_SESSION['USU_LOGIN'] = $row['USU_LOGIN'];
                $_SESSION['login'] = $row['login'];
                $_SESSION['USU_CODIGO'] = $row['USU_CODIGO'];
                header("Location: consulta.php");
                exit();
            }else{
                header("Location: index.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }

}else{
    header("Location: index.php");
    exit();
}
?>
