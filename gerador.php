<!DOCTYPE html>
<?php
    $conexao=mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexao, "Bubble");

    session_start();

	if(!isset($_SESSION['user']) || !isset($_SESSION['pass'])){
		header("location: login.php");
		exit;
    }

    $atual=$_SESSION['user'];

    $con=mysqli_query($conexao, "SELECT cod_usuarios FROM usuarios WHERE login_usuarios='$atual';");
        while($result=mysqli_fetch_array($con)){
            $id=$result[0];
    }
?>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
	<link rel="shortcut icon"	type="imagem/x-icon"	href="imagens/logo.png"/>
    <link rel="stylesheet" type="text/css" href="css/cadlog.css">
    <title>Cadastro - Bubble Bass</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
        <script language="javascript">
            function sucesso() {
                setTimeout("window.location='index.php'", 4000);
            }
            function failed() {
                setTimeout("window.location='perfil.php'", 4000);
            }
        </script>       
  </head>
    <body>
        <div  class="login-form">
            <?php
                $user=$_POST['user'];
                $pass=$_POST['Senha'];

                $consulta=mysqli_query($conexao, "SELECT * FROM usuarios WHERE login_usuarios='$user'")
        or die (mysqli_error($conexao));
                $linhas=mysqli_num_rows($consulta);
                if($linhas==0){        
                        $update="UPDATE usuarios SET  login_usuarios='$user', senha_usuarios='$pass' WHERE cod_usuarios = '$id';";
                        mysqli_query($conexao, $update) or die (mysqli_error($conexao));

                        
                        $_SESSION['user']=$user;
                        $_SESSION['pass']=$pass;
                        echo"
                        <p align='center'>Seu nome foi trocado para <b>".$user."
                        <br>Aproveite o Bubble Bass</b>
                        <br><br><br>";
                        echo "<script language='javascript'>sucesso()</script>";
                        }
                else{
                    echo "<h3 align='center'>Login já existe</h3> <br> <h3 align='center'>Redirecionando...</h3>";
                    echo "<script language='javascript'>failed()</script>";
                }
            ?>
        </div>
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