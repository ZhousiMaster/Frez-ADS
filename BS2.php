<html>
	<head>
		<title>Bubble Studio</title>
		<link rel= "shortcut icon" href="logo.png">
	</head>
	<body>
		<?php
			$desc = $_POST['desc']; 
			$expira = time() + 3600;
			setcookie('desc',$nome= $_POST['desc']);
			setcookie($expira);
			 
			header("location:BSb3.php	");
		?>
	</body>
</html>