//Escribir una función que cuente cuántos positivos tiene un array.
<?php


$numero = [1 ,4, 5, -5, -8, 77, -9, 3];
function contar_positivos($array) { 
    $contador = 0;
    foreach ($array as $valor) {
        if ($valor > 0) {
            $contador++;
        }
    }
    return $contador;
}
echo "<br>";
echo contar_positivos($numero);
?>