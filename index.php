<?php

use Core\CargadorDeClases\CargadorDeClases;

$cargador = new CargadorDeClases();
$assets = $cargador->assets;

$params = explode( "/", $_GET['params'] );
for($i = 0; $i < count($params); $i+=2) {
    echo $params[$i] ." has value: ". $params[$i+1] ."<br />";

}