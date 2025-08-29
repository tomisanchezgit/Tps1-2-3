<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./Action/Ej7Calcu.php" method="POST">

    <label for="operando1">Operando 1</label>
    <input type="text" name="operando1" id="operando1">
    <label for="operando2">Operando 2</label>
    <input type="text" name="operando2" id="operando2">
    
    <select name="instruccion" id="instruccion">
    <option value="sumar">SUMA</option>
    <option value="restar">RESTA</option>
    <option value="multiplicar">Multiplicar</option>
    </select>

    <input type="submit" value="enviar">


</form>

    
</body>
</html>