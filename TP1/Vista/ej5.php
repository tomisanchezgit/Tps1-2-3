<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


   <form action="./Action/Ej5form.php" method="post">

     <label for="nombre">Nombre: </label> 
    <input type="text" name="nombre" id="nombre"><br>
    <label for="apellido">Apellido: </label>
    <input type="text" name="apellido" id="apellido"><br>
    <label for="edad">Edad: </label>
    <input type="number" name="edad" id="edad"><br>
    <label for="direcion">Direccion: </label>
    <input type="text" name="direccion" id="direccion"><br>

  <br>
    <label for="sinestudios">no estudio</label>
    <input type="radio" name="estudios" id="sinestudios" value="sinestudio">
    <label for="conestudios">primario nomas</label>
    <input type="radio" name="estudios" id="primario" value="primario">
    <label for="secundario">secundario nomas</label>
    <input type="radio" name="estudios" id="secundario" value="secundario">
    <br>
    <label for="mujer">mujer</label>
    <input type="radio" name="sexo" id="mujer" value= "mujer">
    <label for="hombre">hombre</label>
    <input type="radio" name="sexo" id="hombre"value="hombre">
    
       

<br>

    <input type="submit" value="enviar">

    </form>


    
</body>
</html>