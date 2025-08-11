//Implementar una función que permita calcular la raíz de un número cualquiera. Si esta es menor que 10, mostrarlo con un fondo de color naraja, en caso contrario de color verde. Además validar que no sea en números negativos.
<?php
function raiz($num) {
    if ($num<0) {
        return "no se puede calcular la raíz de un número negativo";
    }
    $resultado = sqrt($num);
    if ($resultado < 10) {
        return "<div style='background-color: orange;'>" . $resultado . "</div>";
    } else {
        return "<div style='background-color: green;'>" . $resultado . "</div>";
    }
}
echo raiz(25);
?>