<!DOCTYPE html>
<html>
	<head>
		<link rel = "shortcut icon" type = "imagem/x-icon" href ="../imagens/logo.png"/>
		<meta charset="UTF-8" />
		<title>Bubble Bass</title>
		<link rel="stylesheet" href="../css/css font.css" type="text/css" >
		<link rel="stylesheet" href="../css/gallery.theme.css" type="text/css" >
        <link rel="stylesheet" href="../css/gallery.min.css" type="text/css" >
        <link rel="stylesheet" href="../css/teste.css" type="text/css" >
		<link rel="stylesheet" href="../css/csslanchao.css" type="text/css" >
		<style>
			body, html {
				width: 100%;
				height: 100%;
				font-family: Arial, Tahoma, sans-serif;
				margin: 0;
				padding:0;
			}

			body {
				background: url(../imagens/imagem.jpg) center center no-repeat fixed;
				
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
				height: 500%;
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
			.menu li a{text-align: center;left:0px; right:0;top:-23px; display:block; padding:0 20px; line-height:45px; height:45px; float:left; transition:all 0.1s linear; }
			 
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
			 
			/*nivel 2*/
			.submenu-1{ background:#999;}
			.submenu-1 a{color:#fff;}
			.submenu-1 li:hover > a{ background:#666; }
			 
			/*nivel 3*/
			.submenu-2{ background:#666;}
			.submenu-2 a{color:#fff;}
			.submenu-2 li:hover > a{ background:#333; }
			 
			/*nivel 3*/
			.submenu-3{ background:#333;}
			.submenu-3 a{color:#fff;}
			.submenu-3 li:hover > a{ background:#000; }
			 
			.painel{
                width:350px;
                height:500px;
                border-width: medium;
                border-style: solid;
                border-color: #000;
                text-align: center;
                align-items: center;
                margin-left: -600px;
                background-color: #000;
            }
            /* O container geral define a perspectiva */  
.flip-container { perspective: 1000; }  	

/* vira os containers frente e verso quando o mouse passa em cima */
.flip-container:hover .flipper, .flip-container.hover .flipper {  		
  transform: rotateY(180deg);  	
}    
.flip-container, .front, .back {  	
  width: 350px;  	
  height: 500px;  
}

/* define a velocidade da transição */
.flipper {  	
  transition: 0.6s;  	
  transform-style: preserve-3d;    	
  position: relative;  
}
    
/* esconde o verso durante a animação */
.front, .back {  	
  backface-visibility: hidden;    	
  position: absolute;  	
  top: 0;  	
 left: 0;  
}
    
/* frente posicionada sobre o verso */
.front { z-index: 2;  }    

/* verso inicialmente escondido */
.back { transform: rotateY(180deg); }

.flip-container:hover .flipper, 
.flip-container.hover .flipper, 
.flip-container.flip .flipper {  	
  transform: rotateY(180deg);  
}

.vertical.flip-container { position: relative; }    	
.vertical .back { transform: rotateX(180deg); }    	
.vertical.flip-container .flipper {  		
  transform-origin: 100% 213.5px; /* metade da altura */
}    	
.vertical.flip-container:hover .flipper { transform: rotateX(-180deg); }

			/*-------------------------------------------------------------------------------*/

			.painel2{
                width:350px;
                height:500px;
                border-width: medium;
                border-style: solid;
                border-color: #000;
                text-align: center;
                align-items: center;
				margin-left: 600px;
                background-color: #000;
				margin-top: -505px;
            }
            
            .icons{
                margin-top: 5%;
                text-align: center;
                margin-left: -50%;
                border-width: medium;
                border-style: solid;
                border-color: #000;
            }

            .textinho{
                margin-top: 15%;
                margin-left: 50%;
                font-size: 50px;
            }
			</style>
	</head>
	<body bgcolor="#ffccf2">

		<div id="site">
				<center>
                    <h1 style="font-size:100px; color:#FF8000;"><p class="cooper-font">Bubble Bass</p></h1>
                    <br><br><br>
                    <h1 style="font-size:50px; color:#FF8000;">
                            <p class="cooper-font">
                                Escolha um dos itens abaixo para excluir</p></h1>
                    <?php
									$conexao=mysqli_connect("localhost", "root", "");
									mysqli_select_db($conexao, "Bubble");
									
									$con=mysqli_query($conexao, "SELECT * FROM produtos");
									while($result=mysqli_fetch_array($con)){
										
										?>	
								<ul class="estilizacao"> <!-- Criando uma lista -->
									<li>
										<a href="del.php"><img src="../adm/edicao/upload/<?php echo $result['pro_imagem']; ?>" width="300" height="300"> <!-- Dentro desta lista, temos uma imagem -->
										<div class="conteudo"> <!-- Dentro desta lista, temos uma div, onde vamos ter o nome, descrição e download da imagem -->
										<p class="nome"><?php echo $result['pro_nome']; ?></p> <!-- Nome -->
										<p class="descricao"><?php echo $result['pro_descricao']; ?></p></a> <!-- Descrição -->
										</div>
									</li>
								</ul>
								<?php
								}
								?>
		 
				</center>
		</div>
		<br>
	</body>
</html>