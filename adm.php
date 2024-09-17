<?php
    $conexao=mysqli_connect("localhost","root","");
	mysqli_select_db($conexao,"Bubble");
	
	session_start();

	if(!isset($_SESSION['user']) || !isset($_SESSION['pass'])){
		header("location: login.php");
		exit;
	}

?>
<html>
	<head>
        <title>Bubble Bass - ADM <?php  echo $_SESSION['user']; ?></title>
        <meta charset="utf-8">
        <link rel= "shortcut icon" href="../imagens/logo.png">
        <link rel="stylesheet" href="butaum.css" type="text/css" >
        <link rel="stylesheet" href="dasTabela.css" type="text/css" >
        <link rel="stylesheet" href="butaum2.css" type="text/css" >
        <link rel="stylesheet" href="../css/butaum.css" type="text/css" >
		<style>
			body {
				font-family: Calibri Light;
                background: url(../imagens/madera.jpg) center center no-repeat fixed;
				
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}

            .grafics{
                opacity: 0.9;
                background-color: #FF8000;
                margin-left: 2%;
                margin-top: 10%;
                width: 96%;
                height:400%;
            }

            .grafics2{
                opacity: 0.9;
                background-color: #FF8000;
                margin-left: 2%;
                margin-top: 10%;
                width: 96%;
                height:550px;
            }

            .grafics3{
                opacity: 0.9;
                background-color: #FF8000;
                margin-left: 2%;
                margin-top: 10%;
                width: 96%;
                height:650px;
            }

            .mold input{
                width: 100px;
                height:100px;
               /* border-width: medium;
                border-style: solid;
                border-color: #000;*/
                margin-left: 5%;
                margin-top: 90px;
                position: absolute;
            }
            .perfil{
                width: 100px;
                height:100px;
                border-width: medium;
                border-style: solid;
                border-color: #000;
                margin-left: 5%;
                margin-top: 2%;
                
            }
            #file{
                width: 64px;
                border-width: thin;
                border-style: solid;
                border-color: #000;
                height: 20px;
            }
            
            .topo{
                background-color:#FF8000;
                width: 100%;
                height:150px;
            }
            /**/*/*//**//*/*///*********************/
            .content{
			 margin: 30px;
             
             
            }
            .bot {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9) );
	background:-moz-linear-gradient( center top, #f9f9f9 5%, #e9e9e9 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9');
	background-color:#f9f9f9;
	-webkit-border-top-left-radius:20px;
	-moz-border-radius-topleft:20px;
	border-top-left-radius:20px;
	-webkit-border-top-right-radius:20px;
	-moz-border-radius-topright:20px;
	border-top-right-radius:20px;
	-webkit-border-bottom-right-radius:20px;
	-moz-border-radius-bottomright:20px;
	border-bottom-right-radius:20px;
	-webkit-border-bottom-left-radius:20px;
	-moz-border-radius-bottomleft:20px;
	border-bottom-left-radius:20px;
	text-indent:0;
	border:1px solid #dcdcdc;
	display:inline-block;
	color:#666666;
	font-family:Arial Black;
	font-size:15px;
	font-weight:normal;
	font-style:italic;
	height:40%;
	line-height:35%;
	width:15%;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #ffffff;
	margin-left: 30px;
}
.bot:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9) );
	background:-moz-linear-gradient( center top, #e9e9e9 5%, #f9f9f9 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9');
	background-color:#e9e9e9;
}.bot:active {
	position:relative;
	top:1px;	
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

           /* @font-face {

            font-family: "molho";
            src: url("molho.ttf") format("truetype");

            }


            .molho-font{
            font-family: "molho";  
            } */

            .text{
                text-align: center;
                margin-left: 0%;
                margin-top: 1%;
                width: 20%;
                height: 12%;
                background-color: #FF0000;
            }

            .text2{
                text-align: center;
                margin-left: 0%;
                margin-top: -3%;
                width: 20%;
                height: 200px;
                background-color: #FF0000;
            }

            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .text3 {
                width: 98%;
                
            }
            }

            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .content {
                margin-left: 75%;
                
            }
            }

            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .text, .text2 {
                width: 48%;
                height: 12%;
                margin-left: 0%;
                
            }
            }

            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .content, .botao01, .botao01:before, .botao01:after, .botao01:active, .botao01:active:before{
                margin-left: 40%;
                margin-top: -10%;
                
                
            }
            }

            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .botao01:before {
                top: 35%;
                width: 92%;
                /*height: 100%;*/
                left: -40%;
                
            }
            }

            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .botao01:after {
                top: 35%;
                width: 100%;
                /*height: 100%;*/
                left: -40%;
                
            }
            }

            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .grafics {
                margin-top: 15%;
                
            }
            }
            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .traço {
                font-size: 15px;
                
            }
            }

            .ico2{
                margin-left: 40%;
                margin-top: -26%;
            }

            .traco p{
                color: #FFFF00 ;
                width: 5%;
                font-size: 25px;
            }

            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .text2 {
               height: 49%;
                
            }
            }

            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .text2 {
               height: 30%;
                
            }
            }

            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .cx-texto input{
               width: 50%;
               margin-left: 0%;
            }
            }

            @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .textonalinha{
               width: 500%;
               margin-left: 0%;
            }
            }



            .button {
	  background-color: #b30000;
	  border: none;
	  color: white;
	  padding: 15% 32%;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16%;
	  
	  
	}
	
	.a {
		text-decoration: none;
		color: white;
		
		
	}

        .cx-texto ::placeholder{
            color: #FFFFFF;
        }

        .cx-texto ::placeholder :hover{
            color: #FF0000;
        }

        .cx-texto input{
        text-align: center;
        margin-left: 0%;
		height: 40px;
		border-radius: 40px;
		background: #FF0000;
		padding: 10;
		color: white;
	}
	
		.cx-texto input:hover{
		height: 40px;
		border-radius: 40px;
		background: #b30000;
		padding: 10;
		color: #FF0000;
		transform: scale(1.1);
		transition: 0.4s;
	}
	
	
	.cx-texto .hoverzada{
		border-radius: 10px;
        margin-left: 0%;
	}
	
	.cx-texto .hoverzada:hover{
	  background: linear-gradient(#FF4000, #FF8000);
	  transition: 0.3s;
	  border-radius: 10px;
      color:#FFFFFF;
	}
	
	.cx-texto .hoverzada:active{
		background: linear-gradient(#FF4000, #FF8000);
	}

   /* #text{
        margin-left: 55%;
        margin-top: -5%;
    }

    #text2{
        margin-top: 8%;
    }

    .textUser{
        margin-top: 7%;
    }
    .textoZica{
        margin-left: 5%;
        
    }*/

    .textochave{
        text-align: center;
        
        

    }

    .text3{
        text-align: center;
         margin-left: 0%;
        margin-top: 1%;
         width: 30%;
          height: 15%;
          background-color: #FF0000;
            }

   .tabelinha table, th, td {
         text-align: center;
         border: 3px solid black;
        border-color: rgb(230, 247, 4);
        background-color: #FF0000;
        color: #FFFFFF;
        font-size: 20px;
	}
		</style>
	</head>
	<body>
		<div class='topo'>
                
            <div class="mold">
               <img class='perfil' src='perfil2.jpg.png'  > 
               <button class="bot"><a href="../index.php"><?php echo $_SESSION['user'];?></a></button>
            </div>
            </div>
            <div class="content">
                    <a align="left" href="../Destroy/logout.php" class="botao01">Deslogar</a>
            </div>
            <div class="content">
                    <a align="left" href="../Destroy/excluir.php" class="botao01">Excluir</a>
            </div>

               <div class="grafics2"><center>
                    <div class="text2" >
                            <h1 style=" text-align: center; font-size:30px; color:#FFFF00;">
                                <p class="molho-font">
                                    Meu perfil<br>
                                    ____________
                                </p>
                            </h1>
                                <h1 style="font-size:25px; color:#FFFFFF;">
                                    <p>
                                        Por que ficar no mesmo? Altere seu perfil nos campos abaixo
                                    </p>
                            </h1>
                        </div>  
                        <div class="cx-texto"id="div">
                        <form method="POST" action="../gerador.php">
                            <h2 style="font-size:20px; color:#FFFFFF;"><p class="textochave">Usuário</p></h2>
                            <input id="text2" type='text' name='user' size='50' required="required" placeholder="ex: User_Bubble_Bass" >
                            <br><br>
                            <h2 style="font-size:20px; color:#FFFFFF;"><p class="textochave">Senha</p></h2>
                            <input type='password' name='Senha' size='50' required="required" placeholder="ex:............">
                            <br><br>
                            <input class="hoverzada" type='submit' value='proximo' >
                            <br><br>
                        </form>
                        </div></center>
               </div>

               <div class="grafics3">
                   <center>
                   <div class="text3">
                        <h1 style=' font-size: 30px; color: #FFFF00;'>
                        Visitantes
                        </h1>
                   </div>
                   <br><br><br>
                  
                        <?php
							$SQL="SELECT cod_usuarios, login_usuarios FROM usuarios   WHERE nivel_usuarios=2";
							$consulta=mysqli_query($conexao, $SQL);
							while($result=mysqli_fetch_array($consulta)){
                        ?>
                         <table class="tabelao" style="width:90%">
                        <tr class="tabelao">
							  <td><div class="content2">
                                    <?php $_SESSION['result']=$result[0]; echo "<a class='botao012' href='desp.php'>Delete-ME</a>"; ?>
                              </div></td>
                              <td ><?php echo $result[1]; ?></td>
                        </tr>
						  </table>
						</center>
						
						<?php
							}
						?>
                      </table>
                </center>
                </div>
        </div>
        

	</body>
</html>