<?php

/**
* Clase que representa un coche con las propiedades nombre, marca y color
* @author     Daniel Mariano Torres
* @version    1.0.1
* @license    http://www.php.net/license/3_01.txt PHP License 3.01
* @deprecated File deprecated in version 2.0.1
* @method     set_nombre Hace un set del nombre en la variable pública nombre
* @method     string get_nombre Devuelve el nombre del coche 
* @method     set_marca Hace un set de la marca en la variable pública marca
* @method     string get_marca Devuelve la marca del coche
* @method     set_color Hace un set del color en la variable pública color 
* @method     string get_color Devuelve el color del coche
* @method     string concatenar Devuelve el nombre, marca y color concatenado
*/
class Coche
{
    //Propiedades
    public $nombre;
    public $marca;
    public $color;

    /**
    * Hace un set del nombre del coche en la propiedad $nombre
    * @param string $nombre recibe el nombre a guardar
    */
    function set_nombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
    * Obtiene el valor de la propiedad nombre
    * @return string Devuelve el valor de la propiedad nombre del coche
    */
    function get_nombre() {
        return $this->nombre;
    }

    /**
    * Hace un set de la marca del coche en la propiedad $marca
    * @param string $marca recibe la marca a guardar
    */
    function set_marca($marca) {
        $this->marca = $marca;
    }

    /**
    * Obtiene el valor de la propiedad marca
    * @return string Devuelve el valor de la propiedad marca del coche
    */
    
    function get_marca() {
        return $this->marca;
    }

    /**
    * Hace un set del color del coche en la propiedad $color
    * @param string $color recibe el color a guardar
    */
    function set_color($color) {
        $this->color = $color;
    }

    /**
    * Obtiene el valor de la propiedad color
    * @return string Devuelve el valor de la propiedad color del coche
    */
    function get_color() {
        return $this->color;
    }

    /**
    * Obtiene el nombre, marca y color concatenados
    * @version 1.0.0
    * @return string Devuelve el nombre, marca y color concatenados con ENTER entre ellos
    */
    function concatenar() {
        return "Nombre: " . $this->nombre . "<br>Marca: " . $this->marca . "<br>Color: " . $this->color;
    }
}

$doscaballos = new Coche();
$doscaballos->set_nombre('Dyane');
$doscaballos->set_marca('Citroen');
$doscaballos->set_color('Amarillo');

print $doscaballos->concatenar();
?>
