// Escribe un algoritmo en php que dados dos numeros cualquiera los muestre junto con su suma, resta, multiplicación y división.

<?php
$num1 = 8;
$num2 = 4;
echo "numero 1 : " . $num1 . "<br>";
echo "numero 2 : " . $num2 . "<br>";
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num2 / $num1;
echo "la suma es : " . $suma . "<br>";
echo "la resta es : " . $resta . "<br>";
echo "la multiplicación es : " . $multiplicacion . "<br>";
if ($num2 != 0) {
    echo $division = $num1 /  $num2;
} else {
    echo $division = "no se puede dividir por cero";
}
?>
