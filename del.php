<?php
session_start();
?>
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
				height: 200%;
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
			 
			/*Configurações de cores*/
			 
			/*nivel 1*/
			.menu{left:0px; right:0px;top:45px; position:relative; display:block; box-shadow:3px 3px 2px #333; background:#CCC; }
			.menu a{position:relative; display:block; color:#000;}
			.menu li:hover > a{left:0px; right:0; position:relative; display:block; background:#999;  color:#fff;}
			 
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
                margin-top: 0%;
                text-align: center;
                margin-left: 0%;
                border-width: medium;
                border-style: solid;
                border-color: #000;
            }

            .textinho{
                margin-top: 15%;
                margin-left: 50%;
                font-size: 50px;
            }

            .content{
			 margin: 30px;
             
			}
		.botao01{
            margin-left: 88%;
            margin-top: -5%;
			 background: -webkit-linear-gradient(bottom, #FF0000, #FF0000 70%);
			 background: -moz-linear-gradient(bottom, #FF0000, #FF0000 70%);
			 background: -o-linear-gradient(bottom, #FF0000, #FF0000 70%);
			 background: -ms-linear-gradient(bottom, #FF0000, #FF0000 70%);
			 background: linear-gradient(bottom, #FF0000, #FF0000 70%);
			 border: 1px solid #FF0000;
			 border-radius: 3px;
			 box-shadow: 0 3px 0 rgba(0, 0, 0, .3),
						   0 2px 7px rgba(0, 0, 0, 0.2);
            
			 color: #FFFFFF;
			 display: block;
			 font-family: "Trebuchet MS";
			 font-size: 14px;
			 font-weight: bold;
			 line-height: 25px;
			 text-align: center;
			 text-decoration: none;
			 text-transform: uppercase;
			 text-shadow:1px 1px 0 #FF0000;
			 padding: 5px 15px;
             position: relative;
             width: 100px;
			
		}
		 
		.botao01:before{
			 border: 1px solid #FF0000;
			 border-radius: 3px;
			 box-shadow: inset 0 -2px 12px -4px rgba(70, 70, 70, .2),
						   inset 0 3px 2px -1px rgba(255, 255, 255, 1);
			 content: "";
			 bottom: 0;
			 left: 0;
			 right: 0;
			 top: 0;
			 padding: 5px;
			 position: absolute;
			}
		 
			.botao01:after{
			 background: rgba(255, 255, 255, .4);
			 border-radius: 2px;
			 content: "";
			 bottom: 15px;
			 left: 0px;
			 right: 0px;
			 top: 0px;
			 position: absolute;
			}
		 .botao01:active{
			 box-shadow: inset 0 0 7px rgba(0, 0, 0, .2);
			 top: 4px;
			}
			.botao01:active:before{
			 border: none;
			 box-shadow:none;
            }
            
            .alinhar{
                margin-top: 0%;
                margin-left: -15%;
                width: 30px;
                height: 10px;
            }
			</style>
	</head>
	<body bgcolor="#ffccf2">

		<div id="site">
			<div id="Lateral">
				<center>
                    <h1 style="font-size:100px; color:#FF8000;"><p class="cooper-font">Bubble Bass</p></h1>
					<br><br><br>
					<?php
									$conexao=mysqli_connect("localhost", "root", "");
									mysqli_select_db($conexao, "Bubble");
									
									$con=mysqli_query($conexao, "SELECT * FROM produtos");
									while($result=mysqli_fetch_array($con)){
										
										?>	
                    <table border="5" style="width:8%; margin-left: 0%;">
                            <tr class="tabelao">
                              <!--<td>Janeiro: 1,5 milhões</td>-->
                              <td class="tabelao"><img class="icons" src="../adm/edicao/upload/<?php echo $result['pro_imagem']; ?>" width="100" height="100"></td>
                            </tr>
                            
                          </table>
                          <div class="alinhar">
                          <div class="content">
                                <a align="left" href="deletar.php" class="botao01"><?php $_SESSION['img']=$result['pro_codigo']; ?>Deletar</a>
						</div>
									<?php } ?>
                    </div>
                    <br><br><br>
				</center>
		</div>
		<br>
	</body>
</html>