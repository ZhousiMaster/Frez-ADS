<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
	<link rel="shortcut icon"	type="imagem/x-icon"	href="../imagens/logo.png"/>
    <link rel="stylesheet" type="text/css" href="../css/cadlog.css">
    <title>Cadastro</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
	<body>
		<form	method="POST"	action="processar.php"	class="login-form">
			<h1>Cadastro</h1>
			<div class="txtb">
				<input	type="text"	name="name"	 required="required">
				<span data-placeholder="Nome completo"></span>
			</div>
			<div class="txtb">	
				<input	type="text"	name="user"	 required="required">
				<span data-placeholder="Nome de usuário"></span>
			</div>
			<div class="txtb">
				<input	type="password"	name="pass" required="required">
				<span data-placeholder="Senha"></span>
			</div>
			<select name="nivel">
				<option value="">Tipo de Usuário</option>
				<option value="1">Administrador</option>
				<option value="2">Usuário Comum</option>
			</select><br />
			</div>
			<div class="bottom-text">
				<input	type="submit"	class="logbtn"	value="Cadastrar">
			<br><br>
				 Já possui uma conta? <a href="login.php">Login</a>
				 <br><br>
				 <a	href="../index.php">Site</a>
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