<?php

include "../Vistas/action/Ej3HolaYo.php";

$arraymulti = array(

    "lunes"=> $_POST["lunes"],
    "martes"=> $_POST["martes"],
    "miercoles"=> $_POST["miercoles"],
    "jueves"=> $_POST["jueves"],
    "viernes"=> $_POST["viernes"]

);


$totalHoras = array_sum($arraymulti);


echo "<h2>Horas de cursada por semana</h2>";
foreach ($arraymulti as $dia => $hora){
    echo "$dia : $hora horas <br>";
}

echo "<h1> Total de horas en la semana: $totalHoras </h1>";


echo '<a href="form.php">Volver al formulario</a>';