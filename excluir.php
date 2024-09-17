<?php
    $conexao=mysqli_connect("localhost","root","");
    mysqli_select_db($conexao, "Bubble");
    session_start();
    $user=$_SESSION['user'];
    $pass=$_SESSION['pass'];

    

    if(isset($_SESSION['result'])){
        $cod=$_SESSION['result'];
        $query1 = mysqli_query($conexao, "DELETE  FROM usuarios WHERE cod_usuarios='$cod';") or die (mysqli_error($conexao));
    }
    else{
        $SQL=mysqli_query($conexao, "SELECT cod_usuarios FROM usuarios WHERE login_usuarios='$user'  ;") or die (mysqli_error($conexao));
        while($result=mysqli_fetch_array($SQL)){
            $result=$result['cod_usuarios'];
        }
    }
    $query2 = mysqli_query($conexao, "DELETE  FROM usuarios WHERE cod_usuarios='$result';") or die (mysqli_error($conexao));// DELETA O REGISTRO
    include 'logout.php';

    header('location: ../index.php');
?>