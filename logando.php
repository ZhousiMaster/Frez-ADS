<!DOCTYPE html>
<?php
    $conexao=mysqli_connect("localhost","root","");
	mysqli_select_db($conexao, "Bubble");
    session_start();
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
	    <link rel="shortcut icon"	type="imagem/x-icon"	href="../imagens/logo.png"/>
        <link rel="stylesheet" type="text/css" href="../css/cadlog.css">
        <title>Login - Bubble Bass</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
        <script language="javascript">
            function sucesso() {
                setTimeout("window.location='../index.php'", 4000);
            }
            function failed() {
                setTimeout("window.location='login.php'", 4000);
            }
        </script>    
    </head>
    <body>
        <div class="login-form">
        <?php
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $consulta=mysqli_query($conexao, "SELECT * FROM usuarios WHERE login_usuarios='$user' AND senha_usuarios='$pass'")
        or die (mysqli_error($conexao));
            while($result=mysqli_fetch_array($consulta)){
                $nivel=$result['nivel_usuarios'];
                $_SESSION['codigo']=$result['cod_usuarios'];
            }    
            $linhas=mysqli_num_rows($consulta);
            if($linhas==0) {
                echo "<h3    align='center'>O login falhou<br> Redirecionado...</h3>";
                echo "<script languaguage='javascript'>failed()</script>";
            }
            else{
                $_SESSION['user']=$user;
                $_SESSION['pass']=$pass;
                $_SESSION['nivel']=$nivel;
                if($nivel==1){
                    echo "<p   align='center'>Bem-vindo administrador <b>".$_SESSION['user']."<br> Redirecionando...</p></b>";
                }
                else{
                    echo "<p    align='center'>Bem-vindo <b>".$_SESSION['user']."<br> Redirecionando...</p></b>";
                }
                echo "<script language='javascript'>sucesso()</script>";
            }
        ?>
        
        </div>   
    </body>
</html>