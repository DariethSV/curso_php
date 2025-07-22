<?php
//Utilizamos "echo" para imprimir, se puede imprimir código HTML
    echo '<p> Hola mundo </p>';

// Las variables que hay son: Enteros, Flotantes, Strings, Arrays y Booleanos, usamos "$nombre_de_la_variable" para acceder a ellas o crearlas

$entero = 2;
$flotante = 2.5;
$string = "Hola";
$colores = Array("Amarillo", "azul", "rojo");
$isTrue = true;

if($isTrue){
    echo "<p> La variable es verdadera";
    echo "Entero es $entero";
    echo "Flotante es $flotante";
    echo "String es $string";
    echo "Primer color es $colores[0]";
}

//Las variables "Superglobals" son variables de php que nos proporcionan información especial, o crear variables globales (se pueden llamar y actualizar en cualquier parte del código) como en este caso $GLOBALS["variable"] la cual puede usar la variable aunque no se pase por parámetro ni esté dentro de una función

const PI = 3.14; // Constante escritas en mayúsculas, no se puede cambiar pero se pueden acceder desde cualquier lugar

$e = 2.71;
function mostrarPI(){
    echo "PI TIENE VALOR DE: ";
    echo PI;
    echo "e TIENE VALOR DE: ";
    echo $GLOBALS["e"];

    
}

mostrarPI();

/*
$_SERVER - información del entorno del servidor y de ejecución
$_GET - Variable HTTP GET
$_POST - Variable HTTP POST
$_FILES - Variable de subida de archivos HTTP
$_REQUEST - Variables HTTP request
$_SESSION - Variable de sesión
$_ENV - Variable de entorno
$_COOKIE - Cookies HTTP
$php_errormsg - Mensaje de error 
$HTTP_RAW_POST_DATA - Datos POST sin tratar
$http_response_header - Encabezados de respuesta HTTP
$argc - El número de argumentos pasados a un script
$argv - Array de argumentos pasados a un script
*/

/* Constantes predefinidas en PHP, usadas para el manejor de errores y diversas cosas

PHP_INT_MIN - Mínimo número entero admitido
__FILE__ - Archivo donde está actualmente 
__LINE__ - Línea actual
__FUNCTION__ - Función actual
__CLASS__ - Clase actual
__METHOD__ - Método actual
__NAMESPACE__ - Espacio de nombres actual
*/

/* CAMBIO DE TIPO: en php al realizar una operación de dos variables de diferente tipo, este hace el cambio por defecto, pero podemos forzarlo de la siguiente forma */

$var = "20 hola";
$forzando_tipo = (int)$var;
$forzando_tipo = (float)$var;
$forzando_tipo = (string)$var;
$forzando_tipo = (bool)$var; // Si es mayor a 0 o hay un dato, entonces devolverá un "1"
echo "SIN FORZAR $var";
echo "FORZADO DE TIPO $forzando_tipo";
// Conversión a array, solo se puede un string separado por un separador, sin espacios, usamos la funcion explode(separador,variable,elementos a separar)

$numeros = "1,2,3,4,5,6";
echo "Numeros sin cambiar a array: $numeros";
$numeros_separados = explode(",",$numeros,6);
echo "SEPARADOS: ";
echo $numeros_separados[0];
echo $numeros_separados[1];
echo $numeros_separados[2];
echo $numeros_separados[3];
echo $numeros_separados[4];
echo $numeros_separados[5];

// Conversion de array a string, utilizamos implode(separador,$variable)
echo "JUNTOS DE NUEVO: ";
$unidos = implode(" ",$numeros_separados);
echo $unidos;

//Concatenación

$palabra = "codigo ";
$palabra2 = "facilito";
$facilito = "hoho";
$union = $palabra . $palabra2;
echo "{$union} \n hola";

// También podemos concatenar y guardar en la misma variable
$palabra .= $facilito;
echo $palabra;

// Con comillas simples no podemos utilizar estos caracteres especiales que nos proporciona funciones como \n, \r, ni podemos poner el valor de la variable, es decir no podemos usar interpolacion





?>
