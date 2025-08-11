<?php 
$planetas = ["Mercurio", "Venus", "Tierra", "Marte", "Júpiter", "Saturno", "Urano", "Neptuno"];

echo "los planetas del sistema solar son: " . "<br";
var_dump ($planetas[2]) . "<br>";
var_dump ($planetas[0]) . "<br>";
var_dump ($planetas[7]) . "<br>";
var_dump ($planetas[6]) . "<br>";
var_dump ($planetas[5]) . "<br>";
var_dump ($planetas[3]). "<br>";
var_dump ($planetas[4]) . "<br>";
var_dump ($planetas[1]) . "<br>";
foreach ($planetas as $planeta) {
    echo $planeta . "<br>";
}


function ver_planeta(){
    return false;
}
?>