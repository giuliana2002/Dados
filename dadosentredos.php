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
        echo "<img src='img/{$dado}.svg' alt='Dado {$dado}' class='dice'>";
    }
    echo "</div>";

    // Dado a eliminar
    $dadoSuelto = tirarDado();
    echo "<div>";
    echo "<h2>Dado a eliminar</h2>";
    echo "<img src='img/{$dadoSuelto}.svg' alt='Dado {$dadoSuelto}' class='dice'>";
    echo "</div>";

    // Filtrar tirada inicial para que no aparezca el eliminado.
    $tiradaFiltrada = array_filter($tiradaInicial, function($dado) use ($dadoSuelto) {
        return $dado !== $dadoSuelto;
    });

    // Mostrar tirada filtrada sin dado eliminado
    echo "<div>";
    echo "<h2>Dados restantes</h2>";
    foreach ($tiradaFiltrada as $dado) {
        echo "<img src='img/{$dado}.svg' alt='Dado {$dado}' class='dice'>";
    }
    echo "</div>";
    ?>
</body>
</html>
