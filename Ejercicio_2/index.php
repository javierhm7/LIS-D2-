<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="header h1">
            <h1>Biblioteca<br></h1>
            <h2>Registro de un Libro<br></h2>
        </div>
    </header>

    <div class="container">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="row g-4 mt-3">
            <div class="col-md-6">
                <label for="autorInput" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autorInput" name="autor" required pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s,]+">
            </div>

            <div class="col-md-6">
                <label for="tituloInput" class="form-label">Título del Libro</label>
                <input type="text" class="form-control" id="tituloInput" name="titulo" required>
            </div>

            <div class="col-md-6">
                <label for="edicionInput" class="form-label">Número de Edición</label>
                <input type="text" class="form-control" id="edicionInput" name="edicion" required pattern="\d{1,3}">
            </div>

            <div class="col-md-6">
                <label for="lugarInput" class="form-label">Lugar de la Publicación</label>
                <input type="text" class="form-control" id="lugarInput" name="lugar" required>
            </div>

            <div class="col-md-6">
                <label for="editorialInput" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorialInput" name="editorial" required>
            </div>

            <div class="col-md-6">
                <label for="anioInput" class="form-label">Año de la Edición</label>
                <input type="number" class="form-control" id="anioInput" name="anio" required min="1000" max="9999">
            </div>

            <div class="col-md-6">
                <label for="paginasInput" class="form-label">Número de Páginas</label>
                <input type="number" class="form-control" id="paginasInput" name="paginas" required min="1">
            </div>

            <div class="col-md-6">
                <label for="isbnInput" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbnInput" name="isbn" required pattern="\d{3}-\d{1}-\d{2}-\d{6}-\d{1}">
            </div>

            <div class="col-12">
                <label for="notasInput" class="form-label">Notas</label>
                <input type="text" class="form-control" id="notasInput" name="notas">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Ingresar Libro</button>
            </div>
        </form>
    </div>

    <?php
    class Libro
    {
        public $autor;
        public $titulo;
        public $edicion;
        public $lugar;
        public $editorial;
        public $anio;
        public $paginas;
        public $isbn;
        public $notas;

        public function __construct($autor, $titulo, $edicion, $lugar, $editorial, $anio, $paginas, $isbn, $notas)
        {
            $this->autor = $autor;
            $this->titulo = $titulo;
            $this->edicion = $edicion;
            $this->lugar = $lugar;
            $this->editorial = $editorial;
            $this->anio = $anio;
            $this->paginas = $paginas;
            $this->isbn = $isbn;
            $this->notas = $notas;
        }
    }

    $libros = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $libro = new Libro(
            $_POST["autor"],
            $_POST["titulo"],
            $_POST["edicion"],
            $_POST["lugar"],
            $_POST["editorial"],
            $_POST["anio"],
            $_POST["paginas"],
            $_POST["isbn"],
            $_POST["notas"]
        );
        array_push($libros, $libro);
    }

    foreach ($libros as $libro) {
        echo "<h2>Información del Libro</h2>";
        echo "Autor: " . $libro->autor . "<br>";
        echo "Título: " . $libro->titulo . "<br>";
        echo "Edición: " . $libro->edicion . "<br>";
        echo "Lugar de Publicación: " . $libro->lugar . "<br>";
        echo "Editorial: " . $libro->editorial . "<br>";
        echo "Año de Edición: " . $libro->anio . "<br>";
        echo "Páginas: " . $libro->paginas . "<br>";
        echo "ISBN: " . $libro->isbn . "<br>";
        echo "Notas: " . $libro->notas . "<br>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
