<?php
session_start();
?>
<html>
    <style>
        body {
            background-image: url("Bienvenidos.gif");
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

      
     
    </style>
  </html>
  
<div id="content-box">
   
    <h1>SubeArticulos</h1>
    
   <form action="pag2.php" method="get">
	   <p>Usuario: <input type="text" name="usuario" ></p>
	   <p> Contraseña: <input type="password" name="contra"></p>
	  
	  
	   <input type="submit" name="reg" value="Iniciar sessió">
	   <input type="submit" name="reg" value="Registre">
	  
   </form>
   
</div>

