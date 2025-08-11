//Crear un array que guarde frutas y las muestre en un recuadro.

<?php
$frutas = ["pera", "naranja", "banana", "manzana"];
echo "<div style='padding: 10px; background-color: green; width: 100px; height: 100px;'>";
echo "<ul>";
foreach ($frutas as $fruta) {
    echo "<li>" . $fruta . "</li>";
}
echo "</ul>";
echo "</div>";
?>