<?php
// Función para determinar si un número es primo
function esPrimo($numero) {
    // Validar que el número sea mayor que 1, ya que 1 y los números negativos no son primos
    if ($numero <= 1) {
        return false;
    }

    // Iterar desde 2 hasta la raíz cuadrada del número para buscar divisores
    for ($i = 2; $i <= sqrt($numero); $i++) {
        // Si el número es divisible por algún número entre 2 y su raíz cuadrada, no es primo
        if ($numero % $i == 0) {
            return false;
        }
    }

    // Si no se encontraron divisores, el número es primo
    return true;
}

// Ejemplo de uso
$numero = 29; 

// Verificar si el número es primo y mostrar el resultado
if (esPrimo($numero)) {
    echo "El número $numero es primo.";
} else {
    echo "El número $numero no es primo.";
}
?>
