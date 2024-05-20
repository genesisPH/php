<?php
session_start();


$Usu = $_SESSION["usu"];

// Verifica si se ha enviado un archivo
if(isset($_FILES['imagen'])){
    $file_name = $_FILES['imagen']['name'];
    $file_tmp = $_FILES['imagen']['tmp_name'];
    $file_type = $_FILES['imagen']['type'];
    $file_size = $_FILES['imagen']['size'];
    
    // Mueve el archivo a una ubicación deseada
    move_uploaded_file($file_tmp,"uploads/".$file_name);
    
    // Muestra la imagen subida
    echo "<h1>Session iniciada: $Usu </h1><br>";
    echo "<h2>Imagen subida:</h2><br>";
    echo "<img src='uploads/$file_name' alt='Imagen subida'>";
} else {
    // Si no se ha enviado ningún archivo, muestra un mensaje de error o redirige a otra página.
    echo "No se ha subido ninguna imagen.";
}
	
?>
<form action="pag3.php" method="get">
		<p><input type="submit" value="subir otra foto">
	</from>
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