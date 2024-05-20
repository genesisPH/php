<?php
 if(isset($_GET['aceptar'])){
	 $caducidad = time() + (60 * 60 * 24 *365);
	 setcookie ('cookieM12','1',$caducidad);
 }
?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title> </title>
</head>
<body>
<?php
	if(!isset($_GET['aceptar']) && !isset($_COOKIE['MICOOKIE'])){
?>

<h2> Cookies </h2>
<p> Debes aceptar las cookies para poder seguir navegando </p>

<a href="pag1.php"> Aceptar </a>
<?php
	}
?>
</body>
</html>