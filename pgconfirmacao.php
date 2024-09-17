<html>
	<head>
        <title>Bubble Studio</title>
        <meta charset="utf-8" />
        <link rel = "shortcut icon" type = "imagem/x-icon" href ="logo.png"/>
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/botao escolha.css" />
        <link rel="stylesheet" href="css/form.css" />
        <link rel="stylesheet" href="css/form2.css" />
        
		<style>
			body {
				font-family: Calibri Light;
            }
            
            .cent{
                margin-top: 1%;
                width: 65%;
                height: 110%;
                background: linear-gradient(rgb(89, 4, 168),rgb(168, 85, 245) ) ;
                color: white;
                font-family: Calibri Light;

            }
            .ico{
                margin-left: -80%;
                margin-top: 2%;
            }


            .opa{
                margin-top: -30%;
            }

            .opa:hover{
                background-color: rgba(0, 0, 0, 0.527);
            }

            .alinhamento{
                margin-top: -10%;
                width: 65%;
                height: 10%;
               margin-left: -40%;

            }

            .alinhamento2{
                margin-top: -6%;
                width: 65%;
                height: 10%;
               margin-left: 20%;

            }

            .alt-a{
                margin-top: 8%;
            }

            .dados{
                text-align: center;
                width: 45%;
                height: 10%;
                background-color: rgb(8, 84, 224);
                border-radius: 45px;
                margin-top: -2%;
                font-size: 30px;                
            }
		</style>
	</head>
	<body>
        <center>
            <div class="cent">
                <center>
                    <a href="pgstudio.php"><img class="ico" src="logo.png" width="120" height="100"></a>    
                    <h1 style='margin-top: -10%; color:#fff; '>
                     Bubble Studio 4.2
                    </h1>
                    <br><br><br>
                    
                     <br>
                    <?php
                        $conexao=mysqli_connect("localhost","root","");
                        mysqli_select_db($conexao, "Bubble");

                        $nome = $_COOKIE['nome'];
                        $desc = $_COOKIE['desc'];
                        $novo = $_COOKIE['novo'];
                        $diretorio = $_COOKIE['diretorio'];
                        $extensao = $_COOKIE['extensao'];
                        $img = $diretorio.$novo;

                         if(!strstr('.jpg;.jpeg;.gif;.png', $extensao)){
                             echo "Não é uma imagem";
                    ?>
                            <br><br><br>
                            <ul style="margin-left: 40%;" class="actions">
                                <li ><a href="load.php" class="button">Voltar</a></li>
                            </ul>
                    <?php    
                        }
                        else{
                    ?>
                        <h2 style='color:#fff; '>
                            Os dados foram recebidos com sucesso
                        </h2>
                    <?php 
                        echo" <div class='dados'>$nome</div>";
                        echo"<br>";
                        echo" <div class='dados'>$desc</div>";
                        echo"<br>"; 
                        $query="INSERT INTO produtos (pro_nome, pro_descricao, pro_imagem)  VALUES ('$nome', '$desc', '$novo');";
                        mysqli_query($conexao, $query) or die(mysqli_error($conexao));
                    ?>     
                        <img src="<?php echo $img;  ?>"  width="450" height="300"> </img>
                    
                    <br><br><br>
                    <ul style="margin-left: 40%;" class="actions">
                        <li ><a href="fimcad.html" class="button">Confirmar</a></li>
                    </ul>
                    <?php }  ?>
        </center>
	</body>
</html>