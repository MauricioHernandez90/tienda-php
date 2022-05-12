<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/slide-motor.css">
    <link rel="stylesheet" href="./css/slide-marcas.css">
    <link rel="stylesheet" href="./css/productos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
    
    <title>Tienda</title>
</head>

<body>

    <?php
    include "./vistas/modulos/header.php";
    include "./vistas/modulos/nav.php";
    include "./vistas/modulos/slide-show.php";
    echo "<br />";
    include "./vistas/modulos/productos_galeria.php";

    ?>






    <footer class="footer">

    </footer>

    <script src="./vistas/js/slide.js"></script>
</body>

</html>