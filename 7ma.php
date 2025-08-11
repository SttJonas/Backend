<?php 
$dato1 = 20;
$dato2 = 50;
function prod($num1, $num2) {
    return $num1 * $num2;
}
    function pot( $num1, $num2 ) {
        return pow($num1, $num2); 
}
echo "Bienvenido al programa <br> ";
echo "<hr>";
echo "$dato1" . "*" . "$dato2" . "=" . prod($dato1, $dato2);
$res_pot = pot($dato1, 2);
echo "$res_pot";
?>