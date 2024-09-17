<?php
    $conexao=mysqli_connect("localhost","root","");
    mysqli_select_db($conexao,"Bubble");
    
    session_start();
    $user=$_SESSION['user'];

    $con=mysqli_query($conexao, "SELECT ava_codigo FROM avaliacao WHERE user_login='$user';");
    while($result=mysqli_fetch_array($con)){
        $id=$result[0];
    }

    $del="DELETE FROM avaliacao   WHERE ava_codigo='$id'";
    $remove=mysqli_query($conexao, $del) or die(mysqli_error($conexao));
    header('location: ../perfil.php');
?>