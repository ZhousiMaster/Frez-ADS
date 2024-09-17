<!DOCTYPE html>
<?php session_start(); ?>
<html	lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<link rel = "shortcut icon" type = "imagem/x-icon" href ="imagens/logo.png"/>
		<title>Bubble Bass - Index</title>
		<link rel="stylesheet" href="css/css font.css" type="text/css" >
		<link rel="stylesheet" href="css/gallery.theme.css" type="text/css" >
		<link rel="stylesheet" href="css/gallery.min.css" type="text/css" >
		<link rel="stylesheet" href="css/reset.css" type="text/css">
		<link rel="stylesheet" href="css/index.css" type="text/css">
		<style>
			body, html {
				width: 100%;
				height: 100%;
				font-family: Arial, Tahoma, sans-serif;
				margin: 0;
				padding:0;
			}

			body {
				background: url(imagens/madera.jpg) center center no-repeat fixed;
				
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

			/*Configurações Padrões*/
            ul.menu, .menu li, .menu a{left:0px; right:0; margin:1px; padding:1px; list-style:none; text-decoration:none;}
            ul.menu ul{left:0px; right:0; position:relative; display:block; box-shadow:3px 3px 2px #333;}
            
            /* Configurações nivel 1*/
            ul.menu{left:0%; font-family:Verdana, Geneva, sans-serif; font-size:15px; border-radius:5px; padding:30px 1px;}
            .menu li{  left:28px; right:0; float:left; width:auto; position:relative;}
            .menu li a{left:0px; right:0;top:-23px; display:block; padding:0 20px; line-height:45px; height:45px; float:left; transition:all 0.1s linear; }
            
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<style type="text/css">
 
			
		
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
			</style>
	</head>
	<body bgcolor="#ffccf2">
		<div id="site">
			<div id="Lateral">
				<center>
					<h1 style="font-size:100px; color:#FF8000;"><p class="cooper-black-1-font">Bubble Bass</p></h1>	
					<?php
						if(isset($_SESSION['user'])){
							if($_SESSION['nivel']==1){
					?>
								<a href="adm/adm.php" class="adm"><?php echo $_SESSION['user']; ?></a>

								<ul class="menu"> <!-- Esse é o 1 nivel ou o nivel principal -->
									<li><a href="adm/intermed1.php">Administração</a></li>
									<li><a href="cardapio.php">Produtos</a></li>
									<li><a href="adm/edicao/load.php">Editar</a></li>
									<li><a	href="Sobre.php">Sobre</a></li>
								</ul>
					<?php
							}
							else{
					?>	
								<a href="perfil.php" class="user"><?php echo $_SESSION['user']; ?></a>
								<ul class="menu">
									<li><a href="cardapio.php">Cardápio</a></li>
									<li><a href="pgload.php">Perfil</a></li>
									<li><a href="feedback.php">Avaliação</a></li>
									<li><a	href="Sobre.php">Sobre</a></li>
								</ul>
					<?php
							}
						}
						else{
					?>
								<a class="visi"	href="Logar/login.php">Visitante</a>
								<ul class="menu">
									<li><a href="Logar/pgcadastro.php">Cadastrar</a></li>
									<li><a href="Logar/login.php">Logar</a></li>
									<li><a href="cardapio.php">Cardápio</a></li>
									<li><a href="Sobre.php">Sobre</a></li>
								</ul>
					<?php
						} 
					?>
				<br><br><br><br>
				
				<div class="gallery autoplay items-3">
					<div id="item-1" class="control-operator"></div>
					<div id="item-2" class="control-operator"></div>
					<div id="item-3" class="control-operator"></div>
					
					<figure class="item">
						<h1><img src="imagens/img-1.jpg" align="center" width="620" height="330"></h1>
					</figure>
					<figure class="item">
						<h1><img src="imagens/img-2.jpg" align="center" width="620" height="330"></h1>
					</figure>
					<figure class="item">
						<h1><img src="imagens/img-3.jpg" align="center" width="620" height="330"></h1>
					</figure>
				</div>
				<br><br><br>
				<div class='painel' border>
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">  	
                        <div class="flipper">  		
                            <div class="front">  
                                <a><img src='imagens/frente.png' width="350" height="500"></a>			
                            <!-- Conteúdo da frente -->  		
                            </div>  		
                        <div class="back">  	
                            <a href="#"><img src='imagens/trais.png' width="350" height="500"></a>		
                        <!-- Conteúdo do verso -->  		
                        </div>  	
                        </div>  
                    </div>
            </div>
			<div class='painel2' border>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">  	
					<div class="flipper">  		
						<div class="front">  
							<a><img src='imagens/f2.png' width="350" height="500"></a>			
						<!-- Conteúdo da frente -->  		
						</div>  		
					<div class="back">  	
						<a href="#"><img src='imagens/b2.png' width="350" height="500"></a>		
					<!-- Conteúdo do verso -->  		
					</div>  	
					</div>  
				</div>
		   </div>

			</div>

				</center>
		</div>
		<br>
	</body>
</html>