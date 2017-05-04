<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | Crédito para capital de trabajo</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/cct.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <script src="../script/moveBackground.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
    <link href="../responsive/cct.css" rel="stylesheet">
    <link href="../responsive/font_resize.css" rel="stylesheet">
</head>
<body>
<?= getHeader(false,"cct"); ?>
<?php require("../include/contact.php"); ?>
<?= getBanner("Crédito para capital de trabajo"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <div class="block_1">
            <h1>El impulso que esperas<br>
                para tu negocio.</h1>
            <p>Aprovecha una oportunidad de negocio o atiende imprevistos
                importantes. Te ofrecemos un crédito simple para que
                atiendas las necesidades de tu empresa, asegurándote que
                tengas la liquidez en el momento que lo necesites. </p>
        </div>
    </article>
</article>

<article id="slide_2" class="background">
    <div class="absoluteDiv"></div>
    <article class="margin">
        <h1>¿Qué beneficios obtienes?</h1>


        <div class="block_3">
            <h2>Beneficios</h2>
            <ul>
                <li>Dispón de efectivo inmediato</li>
                <li>Adquiere inventarios</li>
                <li>Compra materia prima</li>
                <li>Consigue equipamiento para el negocio</li>
                <li>Te financiamos desde 60 hasta 180 días de tu operación</li>
            </ul>
        </div>

        <div class="block_2">
            <h2>Requisitos</h2>
            <ul>
                <li>Ser cliente de CreeC</li>
                <li>Acta de nacimiento o credencial para votar</li>
                <li>Estados financieros de 2 últimos cierres de año</li>
                <li>Estado financiero parcial del año en curso</li>
            </ul>
            <a class="click_able openContact">SOLICITA SERVICIO A LA MEDIDA</a>
        </div>
    </article>
</article>

<?php require("../include/footer.php"); ?>
</body>
</html>