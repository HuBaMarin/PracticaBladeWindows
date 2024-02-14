<?php
namespace Clases;
class Plantilla
{
    /******
    CORRECCION
Sin implementar


    */

    private static array $colores = ["Azul", "Rojo", "Naranja", "Verde", "Violeta", "Amarillo", "Marrón", "Rosa"];


    public static function generarPlantilla(): string
    {

        $html="";
        for ($i = 0; $i <=3; $i++) {
            $html.='<select name"colores">';

            for ($j = 0; $j < count(self::$colores)-1; $j++) {
                $html.="<option value='".self::$colores[$j].'"'."'>".self::$colores[$j]."</option>";
            }
            $html.='</select>';
        }

        return $html;
    }
}