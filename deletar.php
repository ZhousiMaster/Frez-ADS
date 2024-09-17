<?php
    $conexao=mysqli_connect("localhost","root","");
    mysqli_select_db($conexao, "Bubble");
    session_start();

    $cod=$_SESSION['img'];
    $con=mysqli_query($conexao, "SELECT * FROM produtos");
    $query2 = mysqli_query($conexao, "DELETE  FROM produtos WHERE pro_codigo='$cod';") or die (mysqli_error($conexao));// DELETA O REGISTRO

    header('location: ../cardapio.php');
?>