<?php

$data = 'Estudio PHP';
//echo $data[0];
$post = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus saepe, iste rem odit nam magnam corrupti 
molestiae et reiciendis consectetur delectus libero, vitae harum! Quo praesentium itaque harum facilis! Amet.';
$extract = substr($post, 0, 20);
echo "$extract.... [Ver más]";

$data = 'javascript, php, laravel';//campo tags
$tags = explode(', ', $data);//array
// implode -> hacer lo contrario de explode
// trim -> eliminar los espacios excesivos de una frase
echo "<pre>";//previsualiza de forma estructurada los datos
var_dump($tags);
