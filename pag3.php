<?php
session_start();

if (!isset($_SESSION["usu"])) {
  header("Location: pag1.php");
}
$Usu = $_SESSION["usu"];

?>


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

 
<h1>Session iniciada: <?php$Usu ?></h1><br>

<h2>Quieres subir un articulo?</h2><br>

<form id="miformu" method="post" enctype="multipart/form-data" action="pag6.php">

	<p>
		<label for="imagen"> Sube la foto de el articulo </label>
		<input type="file" id="imagen" name="imagen">
	</p>
	
	<p>
		<input type="submit" id="submit" value="subir">
	</p>
</form>


