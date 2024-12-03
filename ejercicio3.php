<?php
// Función para determinar si una cadena de texto es un palíndromo
function esPalindromo($cadena) {
    // Eliminar espacios, convertir a minúsculas y quitar caracteres especiales
    $cadenaLimpia = preg_replace('/[^a-z0-9]/i', '', strtolower($cadena));

    // Comparar la cadena original con su reverso
    $reversa = strrev($cadenaLimpia);

    // Verificar si la cadena limpia es igual a su reverso
    return $cadenaLimpia === $reversa;
}

// Ejemplo de uso
$texto = "Ejercicios de Logica"; 

// Verificar si la cadena es un palíndromo y mostrar el resultado
if (esPalindromo($texto)) {
    echo "La cadena '$texto' es un palíndromo.";
} else {
    echo "La cadena '$texto' no es un palíndromo.";
}
?>
