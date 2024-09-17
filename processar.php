<!DOCTYPE html>
<?php
    $conexao=mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexao, "Bubble");
?>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
	<link rel="shortcut icon"	type="imagem/x-icon"	href="../imagens/logo.png"/>
    <link rel="stylesheet" type="text/css" href="../css/cadlog.css">
    <title>Cadastro - Bubble Bass</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
        <script language="javascript">
            function sucesso() {
                setTimeout("window.location='../index.php'", 4000);
            }
            function failed() {
                setTimeout("window.location='pgcadastro.php'", 4000);
            }
        </script>       
  </head>
    <body>
        <div  class="login-form">
            <?php
                session_start();
                $name=$_POST['name'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $_SESSION['nivel']=$_POST['nivel'];


                $consulta=mysqli_query($conexao, "SELECT * FROM usuarios WHERE login_usuarios='$user'")
        or die (mysqli_error($conexao));
                $linhas=mysqli_num_rows($consulta);
                if($linhas==0){        
                    if($_SESSION['nivel']==1){
                        $inserir="INSERT INTO usuarios (nome_usuarios, login_usuarios, senha_usuarios, nivel_usuarios) VALUES ('$name', '$user', '$pass', 1);";
                        mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));

                        $con=mysqli_query($conexao, "SELECT cod_usuarios FROM usuarios WHERE login_usuarios='$user';" );
                        while($result=mysqli_fetch_array($con)){
                            $_SESSION['codigo']=$result['0'];
                        }
                        
                        $_SESSION['user']=$user;
                        $_SESSION['pass']=$pass;
                        echo"
                        <p align='center'>Olá ".$user."
                        <br>Bem-vindo ao Bubble Bass
                        <br>Você possui acesso administrativo</p>
                        <br><br><br>";
                        echo "<script language='javascript'>sucesso()</script>";
                        }
                    elseif($_SESSION['nivel']==2){
                        $inserir="INSERT INTO usuarios (nome_usuarios, login_usuarios, senha_usuarios, nivel_usuarios) VALUES ('$name', '$user', '$pass', 2);";
                        mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));
            ?>
                        <p  align="center">Você foi cadastrado.</p><br><br><br>
                        <p  align='center'><a href='login.php'>Clique aqui para Login</a></p>
                        <p  align="center"><a href="pgcadastro.php">Clique aqui para Voltar</a></p>    
            <?php       }
                    else{
                        header('location: pgcadastro.php');
                        exit;
                    } 
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