<?php

require "vendor/autoload.php";

use Dotenv\Dotenv;
use Utilidades_2\DB;

$dotenv = Dotenv::createImmutable(__DIR__ . "./..");
$dotenv->safeLoad();
$clase = new DB();
session_start();
$nombre = $_SESSION['nombre'];
$precio = $_SESSION['PVP'];
var_dump($_SESSION['nombre']);
var_dump($_SESSION['PVP']);
$nuevoNombre = $_POST['nuevoNombre'];
$nuevoPVP = $_POST['nuevoPVP'];
$opt = $_POST['submit'];
if ($opt === "Editar") {

    if (isset($nuevoNombre)&&isset($nuevoPVP)) {
        $clase->editar($nombre, $precio,$nuevoNombre, $nuevoPVP);
    }else{
        echo "No se ha podido editar";
    }
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
<form action="editar.php" method="post">
    <label>
        Nuevo nombre
        <input type="text" name="nuevoNombre" value="<?= $nuevoNombre ?>">
    </label>
    <label>
        Nuevo PVP
        <input type="text" name="nuevoPVP" value="<?= $nuevoPVP ?>">
    </label>
    <input type="submit" name="submit" value="Editar">
</form>
</body>
</html>

