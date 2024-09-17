<html>
	<head>
		<title>Bubble Studio</title>
		<link rel= "shortcut icon" href="logo.png">
	</head>
	<body>
		<?php
			$nome = $_POST['nome']; 
			$expira = time() + 3600;
			setcookie('nome',$nome= $_POST['nome']);
			setcookie($expira);
			 
			header("location:BSb2.html");
		?>
	</body>
</html>