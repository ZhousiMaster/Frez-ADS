<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
	  <link rel="shortcut icon"	type="imagem/x-icon"	href="../imagens/logo.png"/>
    <link rel="stylesheet" type="text/css" href="../css/cadlog.css">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
        <form action="logando.php"  method="POST" class="login-form">
          <h1>Entrar na conta</h1>
          <div class="txtb">
            <input type="text" required="required"  name="user">
            <span data-placeholder="Usuário"></span>
          </div>
          <div class="txtb">
            <input type="password" required="required"  name="pass">
            <span data-placeholder="Senha"></span>
          </div>

          <input type="submit" class="logbtn" value="Entrar">

          <div class="bottom-text">
            Não tem uma conta ainda? <a href="pgcadastro.php">Cadastrar</a>
            <br><br>
            <a  href="../index.php">Index</a>
          </div>
        </form>

        <script type="text/javascript">
          $(".txtb input").on("focus",function(){
            $(this).addClass("focus");
          });

          $(".txtb input").on("blur",function(){
            if($(this).val() == "")
            $(this).removeClass("focus");
          });
        </script>
  </body>
</html>
