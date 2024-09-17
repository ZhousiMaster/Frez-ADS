<!DOCTYPE html>
<?php
    $conexao=mysqli_connect("localhost","root","");
    mysqli_select_db($conexao, "Bubble");
?>    
<html>
	<head>
		<link rel = "shortcut icon" type ="imagem/x-icon" href ="imagens/logo.png"/>
		<meta charset="UTF-8" />
		<title>Bubble Bass</title>
		<link rel="stylesheet" href="css/css font.css" type="text/css" >
		<link rel="stylesheet" href="css/gallery.theme.css" type="text/css" >
		<link rel="stylesheet" href="css/div.css" type="text/css" >
		<link rel="stylesheet" href="css/gallery.min.css" type="text/css" >
		<style>
			body, html {
				width: 100%;
				height: 100%;
				font-family: Arial, Tahoma, sans-serif;
				margin: 0;
				padding:0;
			}

			body {
				background: url(imagens/imagem.jpg) center center no-repeat fixed;
				
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}

			#site {
				width: 1000px;
				padding: 20px;
				margin: 40px auto;
				background: #FFF;
				background: rgba(255,255,255,0.8);
			}

			p {
				margin-bottom: 1.5em;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<style type="text/css">
 
			/*Configurações Padrões*/
			ul.menu, .menu li, .menu a{left:0px; right:0; margin:1px; padding:1px; list-style:none; text-decoration:none;}
			ul.menu ul{left:0px; right:0; position:relative; display:block; box-shadow:3px 3px 2px #333;}
			 
			/* Configurações nivel 1*/
			ul.menu{left:0%; font-family:Verdana, Geneva, sans-serif; font-size:15px; border-radius:5px; padding:30px 1px;}
			.menu li{  left:28px; right:0; float:left; width:auto; position:relative;}
			.menu li a{left:0px; right:0;top:-23px; display:block; padding:0 24px; line-height:45px; height:45px; float:left; transition:all 0.1s linear; }
			 
			/* Configurações nivel 2*/
			.menu li:hover > ul.submenu-1{ display:block; top:45px; left:0; padding:5px; width:200px; border-radius:0 0 5px 5px;   }
			.menu ul.submenu-1 a{  width:160px; padding:0 20px; border-radius:5px;  }
			 
			/* Configurações nivel 2*/
			.menu li:hover > ul.submenu-2{ display:block; top:0; left:195px; padding:5px; width:200px;  border-radius: 0 5px 5px 5px; }
			.menu ul.submenu-2 a{  width:160px; padding:0 20px; border-radius:5px; }
			 
			/* Configurações nivel 3*/
			.menu li:hover > ul.submenu-3{ display:block; top:0; left:195px; padding:5px; width:200px;  border-radius: 0 5px 5px 5px; }
			.menu ul.submenu-3 a{  width:160px; padding:0 20px; border-radius:5px; }
			 
			 
			/*Configurações de cores*/
			 
			/*nivel 1*/
			.menu{left:0px; right:0px;top:45px; position:relative; display:block; box-shadow:3px 3px 2px #333; background:#CCC; }
			.menu a{position:relative; display:block; color:#000;}
			.menu li:hover > a{left:0px; right:0; position:relative; display:block; background:#999;  color:#fff;}

			 
			</style>
	</head>
	<body bgcolor="#ffccf2">

		<div id="site">
			<div id="Lateral">
				<center>
                    <h1 style="font-size:100px; color:#FF8000;"><p class="cooper-black-1-font" align='center'>Bubble Bass</p></h1>	
					<ul class="menu"> <!-- Esse é o 1 nivel ou o nivel principal -->
						<li><a href="cardapio.php">Cardápio</a></li>
						<li><a href="pgload.php">Perfil</a></li>
						<li><a	href="index.php">Home</a></li>
						<li><a href="Sobre.php">Sobre</a></li>
                    </ul>
                </center>
					<br><br><br>
                    <?php
                        session_start();
						$user=$_SESSION['user'];
						$codigo=$_SESSION['codigo'];
                        $coment=$_GET['coment'];

                        $count="SELECT COUNT(user_login) FROM avaliacao WHERE user_login='$user';";
                        $sql=mysqli_query($conexao,$count);
                        $linhas= mysqli_fetch_array($sql);
                        $consulta=$linhas['COUNT(user_login)'];

                        $distinct=mysqli_query($conexao, "SELECT ava_codigo FROM avaliacao a WHERE ava_descricao='$coment' AND user_login='$user';");
                        
                        if($consulta<3){
                            if(mysqli_num_rows($distinct)>0){
                    ?>
                                <h1 style="font-size:35px; color:#000000;"><p class="roman-font" align='center'>
                                    Comentário repetido
                                </p></h1>
                                <center>    
                                    <img src='imagens/hamburguer.png'></img><br>
                                    <button>
                                    <a href="feedback.php">Voltar</a>
                                    </button>
                                </center>
                    <?php            
                            }
                            else{
                                $inserir="INSERT INTO avaliacao (ava_descricao, user_login, user_codigo) VALUES ('$coment', '$user', '$codigo');";
                                mysqli_query($conexao, $inserir) or die(mysqli_error($conexao));
                    ?>
                        
                    
					
                                <h1 style="font-size:35px; color:#000000;"><p class="roman-font" align='center'>
                                    Nós da equipe Bubble Bass agradeçemos o seu comentário e tentaremos melhorar com base nele ;)
                                </p></h1>
                                <center>    
                                    <img src='imagens/hamburguer.png'></img><br>
                                    <button>
                                    <a href="feedback.php">Voltar</a>
                                    </button>
                                </center>

                    <?php 
                            }   
                        }
                        else{
                    ?>
                                <h1 style="font-size:35px; color:#000000;"><p class="roman-font" align='center'>
                                    Máximo de comentários atingido
                                </p></h1>
                                <center>    
                                    <img src='imagens/hamburguer.png'></img><br>
                                    <button>
                                    <a href="feedback.php">Voltar</a>
                                    </button>
                                </center>
                    
                    <?php    }  ?>
                      
			</div>
					<br><br>
			</div>
		</div>
		<br>
	</body>
</html>