<?php

use Clases\Clave;
use Clases\Plantilla;

require "vendor/autoload.php";

session_start();
$mostrar_ocultar_clave = "Ver clave";

$plantilla = Plantilla::generarPlantilla();
/**
 * Mostramos la pantalla jugar con tres secciones (Opciones) (Informacion) (Jugada)
 */

$opcion = htmlspecialchars(filter_input(INPUT_POST, "submit"));

/******
* CORRECCION
 1. No has inicializado las sesiones con session_start, por lo que no puedes conltarlas

 */
//hasta 14 veces
$contador = 0;


/******
CORRECCION
PAra qué inicializas esta variable ?
*/


/******
CORRECCION
Falta la opcioń Resetear

*/
switch ($opcion) {
    case "Ver clave":
        /******
        CORRECCION
        Tendrías que recuperar la clave de una variable de sesión
        */

        $clave = Clave::generarClave();
        $mostrar_ocultar_clave = "Ocultar clave";
        break;
    case "Ocultar clave":
        $mostrar_ocultar_clave = "Ver clave";
        break;
    case "Jugar":
        $contador++;
/******
CORRECCION
No debes de dejar var_dump en el código
*/

/******
CORRECCION
1. No has inicializado las sesiones con session_start, por lo que no puedes
 consultarlas
 2. No es necesaria una varialbe de sesion contador
*/
        if ($contador<=14) {
            //mostrar jugada dada e intento


        } else {

        }
    /******
    CORRECCION
1 No evalúas el juego, falta prácticamente todo


    */
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
    <!-- CORRECCION
     Necesitarías 4 select, ya que son 4 los colores que hay que seleccionar
     Este código html lo debería de generar la clase Plantilla
     -->

    <?php
        echo $plantilla;

    ?>



    <br>
    <input type="submit" name="submit" value="Jugar"><br><br>
    <!-- CORRECCION
     info no lo gestionas en tu programa php
     -->
    <input type="submit" name="submit" value="info"><br><br>
    <input type="submit" name="submit" value="<?= "$mostrar_ocultar_clave" ?>">

</form>
</body>
</html>
