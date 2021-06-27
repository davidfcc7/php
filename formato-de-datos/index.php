<?php

$text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur repellendus reiciendis sed distinctio obcaecati consectetur quia corporis eveniet 
earum consequatur odio, recusandae voluptatum. Ex, quibusdam ab voluptas sunt aperiam quis?<br><br>";

echo strtolower($text); //string a minuscula
echo strtoupper($text); //string a mayuscula
echo ucfirst($text); //primera letra en mayuscula
echo lcfirst($text); //primera letra en minuscula

$slug = str_replace(' ', '-', $text); //reemplaza los espacios por un -
echo $slug;

$word = str_replace('Lorem ipsum', 'PHP', $text); //reemplazar Lorem ipsum por PHP
echo $word;

$code = 1;
echo str_pad($code, 8, '#', STR_PAD_LEFT); // replica 8 veces el caracter #

$texto = "<h1>Esto es un texto con etiqueta</h1>"; 
echo strip_tags($texto); // strip_tags elimina las etiquetas para guardar el string en la bd sin etiquetas



