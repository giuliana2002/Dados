<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tirada de Dados entre Alvaro y Giuliana</title>
    <style>
        .dice {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Tirada de dados</h1>
    <?php
    function tirarDado() {
        return rand(1, 6);
    }

    // Tirada inicial de 6 dados
    $tiradaInicial = [];
    for ($i = 0; $i < 6; $i++) {
        $tiradaInicial[$i] = tirarDado();
    }

    // Mostrar tirada inicial
    echo "<div>";
    echo "<h2>Tirada de 6 dados</h2>";
    foreach ($tiradaInicial as $dado) {
        echo "<img src='imagenes/{$dado}.svg' alt='Dado {$dado}' class='dice'>";
    }
    echo "</div>";

    // Calcular suma de la tirada inicial
    ?>
</body>
</html>
