<?php


function darNumero(){


if (isset($_POST["numero"])){
     
   $numero = $_POST["numero"];


    if($numero > 0 ){
        $retorno ="El numero". $numero. "Es positivo";
    }elseif($numero < 0 ){
        $retorno = "El numero". $numero. "es negativo";
    }else{
        $retorno = "El numero". $numero. "es 0";
    }

    return $retorno;
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1><?php echo darNumero(); ?></h1>
    <a href="Ej1.php">Volver al formulario</a>
</body>
</html>