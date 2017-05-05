<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | CONDUSEF</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/condusef.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
</head>
<body>
<?= getHeader(false,''); ?>
<?php require("../include/contact.php"); ?>
<?= getBanner("CONDUSEF"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <h1>CONDUSEF</h1>
        <div class="block_1">
            <p>
                En caso de dudas, quejas, reclamos o consultar información sobre
                las comisiones para fines informativos y de comparación, podrá
                acudir a la CONDUSEF (Comisión Nacional para la Protección y
                Defensa de los Usuarios de Servicios Financieros):
            </p>
        </div>
        <div class="block_1">
            <h2>Domicilio:</h2>
            <p>Insurgentes Sur 762, Colonia del Valle,
            Delegación Benito Juárez, C. P. 03100,
            Ciudad de México</p>

            <h2>Teléfonos:</h2>
            <p>01 800 999 8080 y (55) 5340 0999</p>

            <h2>Sitio web:</h2>
            <p>http://www.gob.mx/condusef</p>

            <h2>Correo electrónico:</h2>
            <p>asesoria@condusef.gob.mx</p>

        </div>
    </article>
</article>



<?php require("../include/footer.php"); ?>
</body>
</html>