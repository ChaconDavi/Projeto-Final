<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylecadastro.css"/>
    <link rel="stylesheet" href="fundo.css"/>
    <script>
      function voltar(){
        document.forms[0].action="index.php";
        document.forms[0].submit();
      }
    </script>
    <title>Cadastro</title>
  </head>
  <body>
    <form method="post" action="cadastrar.php">
      <main>
        <section class="main-section">
          <div>
          <img src="telecalllogo.png" class="calllogo" alt="imagem tele">
          <div class="card">
            <br />
            <div class="title"><h1 >CADASTRO</h1></div>
            <div class="text">
              <label for="name">Nome Completo</label>
              <input
                type="text"
                name="nome"
                placeholder="Insira seu nome aqui!"
              />

              <label for="aniversario">Aniversário</label>
              <input type="date" name="aniversario" /><br />

              <label for="cpf">CPF</label>
              <input
                type="text"
                class="text"
                name="cpf"
                placeholder="000.000.000-00"
                minlength="11"
                maxlength="14"
              /><br />

              <label for="telefone">Telefone</label>
              <input type="text" name="telefone" placeholder="(DD)00000-0000"><br>

              <label for="mae">Nome da Mãe</label>
              <input type="text" name="mae" placeholder="Nome Completo"><br>

              <label for="e-mail">E-Mail</label>
              <input type="text" name="email" placeholder="E-mail Válido" />

              <label for="endereco">Endereço</label>
              <input type="text" name="endereco" placeholder="Digite seu endereço" /><br />

              <label for="cep">CEP</label>
              <input
                type="text"
                name="cep"
                placeholder="00000-000"
                minlength="8"
                maxlength="9"
              /><br /><br />

              <label for="login">Login</label>
              <input type="text" name="login" placeholder="Login" />

              <label for="senha">Senha</label>
              <input type="password" name="senha" placeholder="Senha" /><br />

              <input type="submit" class="btn-cad" value="Enviar" /><br />
              
              <input type="button" class="btn-cad" value="voltar" onclick="voltar();" /><br />
              </div>
          </div>
        </div>
        </section>
      </main>
    </form>
    <canvas id="canvas"></canvas>
    <script src="fundo.js"></script>
  </body>
</html>