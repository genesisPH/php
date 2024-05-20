<?php
session_start();
?>

<html>
    <style>
        body {
            background-image: url("Interrogacion.gif");
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
             
        }

        #content-box {
            border: 2px solid black;
            padding: 100px;
            margin: 20px auto;
            max-width: 1200px;
            background: LightGray;
        }

        h1 {
            text-align: center; 
            font-family: fantasy; 
            color: blue;
            margin-top: -50px;
            margin-bottom: 20px;
           
        }

        form {
            
        }

    </style>
</html>

<div id="content-box">
    
    <h1>Registrarse</h1>

    <form action="pag5.php" method="get">
		<p>Usuari: <input type="text" name="NouU"></p>
		<p>Contraseña: <input type="password" name="NouC"></p>
		
		<input type="submit" value="Crear">
		
    </form>
   
</div>
