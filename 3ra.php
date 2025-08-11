<?php 
$perfil1 = "usuario";
$perfil2 = "administrador";
$privilegios = "false";

echo "Bienvenido <br>";
echo "<hr> <br>";
echo "<p style='color=blue;'>". $perfil2. "</p>";

echo "<p style='color=black;'>". $perfil1. "</p>";
echo "<hr> <br>";

if ($privilegios == "true") {
    echo "<p>" . "Se trata de una cuenta" . $administrador;
} else {
    echo "<p>" . "Se trata de una cuenta" . $usuario;
}
echo "<hr> <br>";
var_dump($privilegios);
?>