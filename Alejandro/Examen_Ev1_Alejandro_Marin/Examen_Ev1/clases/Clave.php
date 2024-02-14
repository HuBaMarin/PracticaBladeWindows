<?php

namespace Clases;
class Clave
{

    private static array $array;

    /**
     * E1 Generación de la clave
     * @const string Muestra clave
     * @return string clave
     */
    public static function generarClave(): void
    {
        /******
        CORRECCIÓN
PEro aquí los colores se pueden repetir
        */
        $colores = ["Azul", "Rojo", "Naranja", "Verde", "Violeta", "Amarillo", "Marrón", "Rosa"];
        $pos = rand(0, 7);
        $pos2 = rand(0, 7);
        $pos3 = rand(0, 7);
        $pos4 = rand(0, 7);
        self::$array = [$colores[$pos], $colores[$pos2], $colores[$pos3], $colores[$pos4]];
        var_dump(self::$array);
    }

    /**
     * E2 Mostrar clave
     */
    public static function mostrarClave(): void
    {
        var_dump(self::$array);


        // TODO: Implement __toString() method.
    }
}