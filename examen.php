<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Examen Servidor</title>
</head>
<body>

    <?php
    $nombre_alumno = "Cristopher 
    rosquel"; 
    $modulo = "Desarrollo Web en Entorno Servidor";
    $nota_media = 7.5;
    $es_matriculado = true;

    echo "<h1>$nombre_alumno</h1>";
    echo "<h2>$modulo</h2>";
    echo "Mi nota media actual es: $nota_media";
    echo 'Mi nota media actual es: $nota_media';

    if ($nota_media >= 9) {
        echo "<p>Sobresaliente</p>";
    } elseif ($nota_media >= 7) {
        echo "<p>Notable</p>";
    } elseif ($nota_media >= 5) {
        echo "<p>Aprobado</p>";
    } else {
        echo "<p>Suspenso</p>";
    }

    if ($es_matriculado) {
        echo "Estado: Alumno matriculado";
    }

    
    
    echo "<table border='1' cellpadding='5'>";
    $i = 1; 
    
    while ($i <= 5) { //mientras $i sea menor o igual a 5
        echo "<tr>";
        echo "<td>fila numero $i generada con hile</td>";
        echo "</tr>";
        $i++; 
    }
    
    echo "</table>"; 
    ?>

</body>
</html>