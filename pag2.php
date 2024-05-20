<?php

session_start();

$usuarioT = $_REQUEST["usuario"];
$contraT = $_REQUEST["contra"];
$Reg = $_REQUEST["reg"];

$Nom = 0;
$Contra = 0;
$loginError = false; //mira si hi ha errors

if (!isset($_SESSION["regUSU"]) || !isset($_SESSION["regCONTRA"])) {
    header("Location: pag1.php");
  
}

if ($Reg == "Registre") {
    header("Location: pag4.php");
    exit();
} else {

    if (isset($_SESSION["usu"])) {
        if (isset($_SESSION["con"])) {
            $Nom = $_SESSION["usu"];
            $Contra = $_SESSION["con"];

            if (($usuarioT == $Nom) && ($contraT == $Contra)) {
                header("Location: pag3.php");
                exit();
            } else {
                $loginError = true;
            }
        }
   

    if ($loginError) {
        print "<html>";
            print "<style>";
                print "body {";
                print "    background:red;";
                print "    color: yellow;";
                print "}";
                print "#content-box {";
                print "    border: 2px solid black;";
                print "    padding: 20px;";
                print "    margin: 20px auto;";
                print "    max-width: 400px;";
                print "    background: red;";
                print "}";
                print "h1 {";
                print "    text-align: center;";
                print "    color: blue;";
                print "}";
            print "</style>";
        print "</html>";

        print "<form action=\"pag1.php\" method=\"get\">";
        print "<div id=\"content-box\">";

           print "<h3>Usuari o contrasenya incorrecte, torna-ho a intentar<h3><br>";

           print "<input type=\"submit\" value=\"Tornar al inici\">";
        print "</div>";
        print "</form>";

        exit();
}

    }
}
    ?>

