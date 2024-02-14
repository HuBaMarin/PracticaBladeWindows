<?php

namespace Clases;
class Clave
{
    /******
    CORRECCION
El nombre no es significativo, mejor $clave
    */
    private static array $array;

    /**
     * E1 Generación de la clave
     * @const string Muestra clave
     * @return string|bool clave
     */
    public static function generarClave(): string
    {
        /******
        CORRECCION
Tienes el problema que los colores se podrían repetir en la clave
        */
    //clave y plantilla
        $colores = ["Azul", "Rojo", "Naranja", "Verde", "Violeta", "Amarillo", "Marrón", "Rosa"];
        $pos = rand(0, 7);
        $pos2 = rand(0, 7);
        $pos3 = rand(0, 7);
        $pos4 = rand(0, 7);
        self::$array = [$colores[$pos], $colores[$pos2], $colores[$pos3], $colores[$pos4]];

       return  print_r(array_unique(self::$array));
/******
CORRECCION
No debes de dejar var_dump
*/

    }

    /**
     * E2 Mostrar clave
     */
    public static function mostrarClave(): void
    {
        /******
        CORRECCION
No debes de generar var_dump
         * Ls idea está bien, pero debes de mostrar cada color del array
        */
        var_dump(self::$array);


        // TODO: Implement __toString() method.
    }
}