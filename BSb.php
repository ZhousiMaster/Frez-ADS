<html>
	<head>
        <title>Bubble Studio</title>
        <meta charset="utf-8" />
        <link rel = "shortcut icon" type = "imagem/x-icon" href ="logo.png"/>
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/botao escolha.css" />
        <link rel="stylesheet" href="css/form.css" />
        
		<style>
			body {
				font-family: Calibri Light;
            }
            
            .cent{
                margin-top: 5%;
                width: 65%;
                height: 85%;
                background: linear-gradient(rgb(89, 4, 168),rgb(168, 85, 245) ) ;

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
		</style>
	</head>
	<body>
        <center>
            <div class="cent">
                <center>
                    <img class="ico" src="logo.png" width="120" height="100">
                    <h1 style='margin-top: -10%; color:#fff; '>
                    Bubble Studio 4.2
                    </h1>
                    <br><br><br>
                    <!--<h2 style='color:#fff; '>
                        
                     </h2>
                     <br>-->
                     <h2 style='color:#fff; '>
                          Nome e Tipo do Item item 
                    </h2>
                   
                <div class="cx-texto"id="div">
                        <center>
                            <form method="POST" action="BS1.php">
                                <input type='text' name='nome' size='30' required="required" placeholder="ex: Bubble Chedar Duplo" >
                                <br>
                                <input class="hoverzada" type='submit' value='avançar' >
                            </form>
                 </div>
        </center>
	</body>
</html>