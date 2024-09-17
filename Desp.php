<html>
	<head>
        <title>Administrador</title>
        <meta charset="utf-8">
        <link rel= "shortcut icon" href="../imagens/logo.png">
        <link rel="stylesheet" href="../butaum.css" type="text/css" >
        <link rel="stylesheet" href="dasTabela.css" type="text/css" >
        <link rel="stylesheet" href="butaum2.css" type="text/css" >
        <link rel="stylesheet" href="../css/main.css" />
        <link rel="stylesheet" href="botao escolha.css" />
		<style>
			body {
                
				font-family: Calibri Light;
                background: url(fundo.fw.png) center center no-repeat fixed;
				
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
            }

            .desp{
                font-family: Arial, Helvetica, sans-serif;
                border-radius: 40px;
                margin-top: 5%;
                background-color: red;
                width: 50%;
                height: 70%;
                text-align: center;
            }

           /* .text{
                
            }*/

            .alinhamento{
                margin-top: 30%;
                width: 65%;
                height: 10%;
               margin-left: -60%;

            }

            .alinhamento2{
                margin-top: -6.6%;
                width: 65%;
                height: 10%;
               margin-left: 20%;

            }

            .alt-a{
                margin-top: 8%;
            }
        </style>

        </head>
        <body>
            <center>
                    <div class="desp">
                        <center>
                                <h1 style="font-size: 40px; color: white;">
                                    <br>
                                        Deseja realmente excluir este perfil?
                                   </h1> 
                                   <div class="alinhamento">
                                        <ul style="margin-left: 40%;" class="actions">
                                            <li ><a href="../excluir.php" class="button2">Excluir</a></li><!--Quando ele clicar aqui o perfil sumiria das tabela-->
                                        </ul>
                                    </div>
                                    <?php session_start();  ?>
                                    <div class="alinhamento2">
                                        <ul style="margin-left: 40%;" class="actions">
                                                <li ><a href="adm.php" class="button2">Cancelar</a></li>
                                        </ul>
                                </div>
                        </center>
                           
                    
                        </div>
            </center>
            
            
        </body>
        </html>

            