// Escribir un algoritmo que dado el año de nacimiento de una persona, el programa diga si puede votar o no 

<?php
$anioNacimiento = 2010;
$anioActual = 2025;
$edad = $anioActual - $anioNacimiento;

echo "tu año de nacimiento es: " . $anioNacimiento . "<br>";
echo "tu edad es: " . $edad . " <br> ";

if ($edad >= 18) {
    echo "es mayor de edad, puede votar";
} else {
    echo "es menor de edad, no puede votar";
}
?>