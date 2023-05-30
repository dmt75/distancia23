<?php

/**
* Ejemplo de operaciones aritméticas
* @author     Daniel Mariano Torres
* @version    1.0.1
* @license    http://www.php.net/license/3_01.txt PHP License 3.01
* @deprecated File deprecated in version 2.0.1
*/

/**
* @var integer $num1 número1 con el que operar
* @var integer $num2 número2 con el que operar
* @var string $operacion operación a realizar, sumar, restar, multiplicar o dividir
*/
$num1 = 12;
$num2 = 6;

$operacion = "sumar";
$resultado = realizarOperacion($num1, $num2, $operacion);
mostrarResultado($resultado, $operacion);

$operacion = "restar";
$resultado = realizarOperacion($num1, $num2, $operacion);
mostrarResultado($resultado, $operacion);

$operacion = "multiplicar";
$resultado = realizarOperacion($num1, $num2, $operacion);
mostrarResultado($resultado, $operacion);

$operacion = "dividir";
$resultado = realizarOperacion($num1, $num2, $operacion);
mostrarResultado($resultado, $operacion);

/**
* Esta función devuelve el resultado de realizar distintas operaciones aritméticas entre $num1 y $num2
* @version 1.0.3
* @param integer $num1 primer número con el que realizar la operación aritmética elegida
* @param integer $num2 segundo número con el que realizar la operación aritmética elegida
* @return integer resultado de la operación aritmética, sumar, restar, multiplicar o dividir
*/
function realizarOperacion($n1, $n2, $operacion) {

    $resultado = 0;

    if ($operacion == "sumar") {
        $resultado = $n1 + $n2;
    } else if ($operacion == "restar") {
        $resultado = $n1 - $n2;
    } else if ($operacion == "multiplicar") {
        $resultado = $n1 * $n2;
    } else if ($operacion == "dividir") {
        $resultado = $n1 / $n2;
    }

    return $resultado;
}

/**
* Esta función imprime por pantalla un mensaje mostrando la operación realizada y el resultado
* @version 1.0.1
* @param string $resultado resultado a mostrar en el mensaje de texto
* @param string $operacion operación que se ha realizado, sumar, restar, multiplicar o dividir
*/
function mostrarResultado($resultado,$operacion) {

    printf("El resultado de la operación {$operacion} es: {$resultado}<br>");

}

?>
