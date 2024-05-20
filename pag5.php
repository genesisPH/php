<?php
session_start();

$Usu = $_REQUEST["NouU"];
$Con = $_REQUEST["NouC"];
$encrip = md5 ($Con);

$_SESSION["usu"]=$Usu;
$_SESSION["con"]=$Con;

?>

<!DOCTYPE html>
<html>
  
    <style>
          body {
            background: LightGray;
         }
         h1{
              color: blue;
              font-family: fantasy; 
         }
  
   
    </style>
</html>
    
<h1>Usuario creado con exito!!!</h1> <br>

	<form action="pag1.php" method="get">
		<p><input type="submit" value="Tornar al inici">
	</from>
