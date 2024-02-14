<?php
require "vendor/autoload.php";

use Clases\Clave;

$mostrar_ocultar_clave = "Ver clave";

/**
 * Mostramos la pantalla jugar con tres secciones (Opciones) (Informacion) (Jugada)
 */

$opcion = htmlspecialchars(filter_input(INPUT_POST, "submit"));

$contador = isset($_SESSION['contador'])?$_SESSION['contador']:0;


$clave = "";
switch ($opcion) {
    case "Ver clave":
        $clave = Clave::generarClave();
        $mostrar_ocultar_clave = "Ocultar clave";
        break;
    case "Ocultar clave":
        $mostrar_ocultar_clave = "Ver clave";
        break;
    case "Jugar":

        var_dump($_POST['colores']);

        if (isset($_SESSION['contador'])) {

            $_SESSION['contador'] += 1;

        } else {
            $_SESSION["contador"] = 1;
        }

        break;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p><?= "$clave" ?></p><br>

<form action="jugar.php" method="post">

    <label for="colores">Selecciona 4 colores para jugar</label><br>
    <select name="colores" id="colores">
        <option value="Azul">Azul</option>
        <option value="Rojo">Rojo</option>
        <option value="Naranja">Naranja</option>
        <option value="Verde">Verde</option>
        <option value="Violeta">Violeta</option>
        <option value="Amarillo">Amarillo</option>
        <option value="Marrón">Marrón</option>
        <option value="Rosa">Rosa</option>
    </select>


    <br>
    <input type="submit" name="submit" value="Jugar"><br><br>
    <input type="submit" name="submit" value="info"><br><br>
    <input type="submit" name="submit" value="<?= "$mostrar_ocultar_clave" ?>">

</form>
</body>
</html>
