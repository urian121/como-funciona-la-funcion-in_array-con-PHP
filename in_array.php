<?php
/**
 * ¿Como hago para buscar un elemento en un array PHP?
 */
/*
in_array es una funcion, que permite comprobar si un valor existe en un array.
Recordar que un array en PHP no es más que un tipo de datos que asocia llave y un valor.
*/

/*
Estructura de la funcion in_array
in_array(El valor a buscar, array a recorrer, valor opcional, que valua una condición estricta)
Nota: Si el tercer parámetro 'condición estricta' está establecido a true,
la función in_array() también comprobará los tipos tanto en el parametro uno como en el parametro 2
*/

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
    echo "Existe " . $tareas;
} else {
    echo "No existe Lavar en" . $tareas;
}


if (in_array("2022", $tareas, true)) {
    echo "Existe " . $tareas;
} else {
    echo "No Existe " . $tareas;
}


$frutas = array('Pera', 'Banana', 'Manzana');
if (in_array('Banana', $frutas)) :
    echo 'Si existe la fruta' . $frutas . 'en el Array';
else :
    echo 'No existe la fruta' . $frutas . 'en el Array';
endif;


$numeros = array('1', '2', '3', '4', '5', '10', '11', '12', '14', '16', '17', '18', '23', '24', '26', '61', '62');
if (in_array('10', $numeros)) {
    echo 'existe';
}
