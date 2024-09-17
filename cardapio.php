<?php
session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel = "shortcut icon" type = "imagem/x-icon" href ="imagens/logo.png"/>
		<link rel="stylesheet" href="css/teste.css" type="text/css" >
		<link rel="stylesheet" href="css/csslanchao.css" type="text/css" >
		
		<meta charset="UTF-8" />
		<title>Bubble Bass - Cardápio</title>
				<style>

			body {
				/*background-color: #ffffff;*/
				width: 100%;
				height: 100%;
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

		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		
	</head>
	<body bgcolor="#ffccf2">
			<input type='checkbox' id='check'>
			<label id="icone" for='check'>
				<img class='img' src='imagens/logo.png' width='130' height='130'>
			</label>
			<div class='barra'>
			
			<nav>
			<a href='cardapio.php'><div class='link'>Food</div></a>
			<a href='bebidas.php'><div class='link'>Bebidas</div></a>
			<a href='index.php'><div class='link'>Home</div></a>

			<?php 
				if(isset($_SESSION['nivel']) && $_SESSION['nivel']==1){
			?>

			<a href='adm/edicao/load.php'><div class='link'>Editar</div></a>
			<a href='Destroy/remove.php'><div class='link'>Remover</div></a>

			<?php }?>

			</nav>
				</div>
		</div>
	</div>
			<div id="site">
				<div id="Lateral">
					<center>
						<br>
						<h1 style="font-size:100px; color:#FF8000;">
							<p class="../cooper-black-1.ttf">
								Bubble Bass</p></h1>
								<br><br><br>
								<?php
									$conexao=mysqli_connect("localhost", "root", "");
									mysqli_select_db($conexao, "Bubble");

									$con=mysqli_query($conexao, "SELECT * FROM produtos");
									while($result=mysqli_fetch_array($con)){
										
										?>	
								<ul class="estilizacao"> <!-- Criando uma lista -->
									<li>
										<img src="adm/edicao/upload/<?php echo $result['pro_imagem']; ?>" width="300" height="300"> <!-- Dentro desta lista, temos uma imagem -->
										<div class="conteudo"> <!-- Dentro desta lista, temos uma div, onde vamos ter o nome, descrição e download da imagem -->
											<p class="nome"><?php echo $result['pro_nome']; ?></p> <!-- Nome -->
											<p class="descricao"><?php echo $result['pro_descricao']; ?></p> <!-- Descrição -->


											<br><br>
										</div>
									</li>
								</ul>
								<?php
								}
								?>
								
						</div>
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						<br><br><br><br><br><br><br><br><br><br><br><br>
						
					</div>
					</center>
					
		
		
	</body>
</html>