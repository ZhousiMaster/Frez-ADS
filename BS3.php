<?php
			$expira = time() + 3600;
			setcookie($expira);
			$img=$_FILES['img'];

			$extensao = strtolower(substr($img['name'], -4));
			$diretorio = "upload/";
			$novo = md5(time()) . $extensao;

			setcookie('novo', $novo);
			setcookie('diretorio', $diretorio);
			setcookie('extensao', $extensao);

			if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
				move_uploaded_file($img['tmp_name'], $diretorio.$novo);

			header("location: pgconfirmacao.php");
?>