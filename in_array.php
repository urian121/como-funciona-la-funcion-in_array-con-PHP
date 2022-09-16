<?php

/**
    in_array es una función php, que permite comprobar si un valor existe en un array.
    Recordar que un array en PHP no es más que un tipo de datos que asocia llave y un valor.

    Estructura de la función in_array
    in_array(El valor a buscar, array a recorrer, valor opcional, que valua una condición estricta)
    Nota: Si el tercer parámetro 'condición estricta' está establecido a true,
    la función in_array() también comprobará los tipos tanto en el parametro uno como en el parametro 2
*/

echo '<h1 style="text-align:center;font-weight: 800; font-size: 40px;font-family: system-ui;"> 
            in_array PHP 
            </h1> 
            <p style="text-align:center; color:red; font-weight: 800;">
                ¿Como hago para buscar un elemento en un array PHP?
            </p>
     <hr>';
$styleGreen   =" color: green;font-weight: 700;font-size: 25px;font-family: system-ui";
$styleCrimson =" color: crimson;font-weight: 700;font-size: 25px;font-family: system-ui";

$MyarrayCliente = array(
    "nombre" => "Brenda",
    "edad" => "2",
    "telefono" => 123654
);


$Myarray = [
    "nombre" => "Brenda",
    "edad" => "2",
    "telefono" => 123654
];


$tareas = array("Cocinar", "Lavar", "Estudiar", 2022);
if (in_array("Lavar", $tareas)) {
    echo "<p style='$styleGreen'>La tarea SI existe** </p> <br>";
} else {
    echo "<p style='$styleCrimson'>La Tarea NO existe** </p> <br>";
}


$year ="2022";
$newYear = (int)$year;
if (in_array($year, $tareas, true)) {
    echo "<p style='$styleGreen'>Si Existe ++</p> <br>";
} else {
    echo "<p style='$styleCrimson'> No Existe ++ </p> <br>";
}


$frutas = array('Pera', 'Banana', 'Manzana');
if (in_array('Banana', $frutas)):
    echo "<p style='$styleGreen'> Si existe la fruta en el Array </p> <br>";
else :
    echo "<p style='$styleCrimson'> No existe la fruta en el Array </p> <br>";
endif;


$numeros = array('1', '2', '3', '4', '5', '10', '11', '12','26', '61', '62');
if (in_array('10', $numeros)) {
    echo "<p style='$styleCrimson'> existe </p> <br>";
}
