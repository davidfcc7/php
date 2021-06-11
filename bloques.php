<?php

if (condition) {
    # code...
}
else {
    # code...
}

switch ($variable) {
    case true:
        # code...
        break;
    case false:
        # code...
        break;
        //si ninguno de los dos se cumple se realiza el default
    default:
        # code...
        break;
}

// se utiliza cunado se quieren consultar datos
// acceder a los datos del usuario por la key 
foreach ($datos as $id => $name) {
    # code...
}
// acceder a los datos del usuario en la tabla "n"
foreach ($datos as $row) {
    # code...
}

// itera hasta que el valor sea mayor a 10 y se rompa la condicion
$a = 1;
while ($a <= 10) {
    # code...
    $a++;
}

//esta condicion se usa solo cuando necesitamos que la condicion se ejecute al menos una vez
do {
    # code...
} while ($a <= 10);

for ($i=0; $i < 10; $i++) { 
    # code...
}
















?>