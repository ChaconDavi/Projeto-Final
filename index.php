<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fundo.css">
    <title>Login</title>
    
</head>
<body>
    <form method="post" action="valida.php">
    <div class="main-login">
        <div class="left-login">
           
            <img src="telecalllogo.png" class="logo-tele" alt="imagem tele">
            <img src="imagem.svg" class="left-login-image" alt="Imagem inicial">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usuario">Login</label>
                    <input type="text" name="login" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Password">
                </div>
                <button class="btn-login">Entrar</button>
                </fomr>
                <div class="btn-cadastro">
                    Não tem cadastro ? <a href="cadastro.php">Cadastre-se</a>
                </div>
            </div>
        </div>
    </div>
    <canvas id="canvas"></canvas>
    <script src="fundo.js"></script>
</body>
</html>
