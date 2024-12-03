<?php
// Función para generar la serie de Fibonacci hasta n términos
function generarFibonacci($n) {
    // Validar que el número ingresado sea mayor o igual a 1
    if ($n <= 0) {
        return "El número de términos debe ser mayor a 0.";
    }

    // Array para almacenar los términos de la serie
    $fibonacci = [];

    // Caso base: si solo se requiere un término, devolvemos [0]
    if ($n == 1) {
        $fibonacci[] = 0;
        return $fibonacci;
    }

    // Iniciar la serie con los primeros dos términos
    $fibonacci[] = 0; // Primer término
    $fibonacci[] = 1; // Segundo término

    // Generar los siguientes términos de la serie
    for ($i = 2; $i < $n; $i++) {
        // Cada término es la suma de los dos anteriores
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Retornar el array con la serie generada
    return $fibonacci;
}

// Ejemplo de uso: generar los primeros 10 términos de la serie Fibonacci
$n = 10; // Número de términos deseados
$resultado = generarFibonacci($n);

// Imprimir el resultado
echo "Los primeros $n términos de la serie Fibonacci son: " . implode(", ", $resultado);
?>
