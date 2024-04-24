<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Academia de Idiomas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 20px; }
        .container { max-width: 800px; }
        h1, h2 { text-align: center; }
        .table { margin-bottom: 40px; }
    </style>
</head>
<body>
<div class="container">
    <h1>Registro de Alumnos por Idioma y Nivel</h1>
    <?php
    $students = [
        'Básico' => ['Inglés' => 25, 'Francés' => 10, 'Mandarín' => 8, 'Ruso' => 12, 'Portugués' => 30, 'Japonés' => 90],
        'Intermedio' => ['Inglés' => 15, 'Francés' => 5, 'Mandarín' => 4, 'Ruso' => 8, 'Portugués' => 15, 'Japonés' => 25],
        'Avanzado' => ['Inglés' => 10, 'Francés' => 2, 'Mandarín' => 1, 'Ruso' => 4, 'Portugués' => 10, 'Japonés' => 67]
    ];

    function display_students($students) {
        foreach ($students as $level => $languages) {
            echo "<h2>Nivel $level</h2>";
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th>Idioma</th><th>Alumnos</th></tr></thead>";
            echo "<tbody>";
            foreach ($languages as $language => $count) {
                echo "<tr><td>$language</td><td>$count</td></tr>";
            }
            echo "</tbody></table>";
        }
    }

    display_students($students);
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
