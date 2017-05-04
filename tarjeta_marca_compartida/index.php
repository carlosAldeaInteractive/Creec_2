<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | Tarjeta de marca compartida</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/tmc.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
    <link href="../responsive/tmc.css" rel="stylesheet">
    <link href="../responsive/font_resize.css" rel="stylesheet">
</head>
<body>
<?= getHeader(false,"tmc"); ?>
<?php require("../include/contact.php"); ?>
<?= getBanner("Tarjetas de marca compartida"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <div class="block_1">
            <h1>Combina tu logotipo con la<br>
                marca CreeC y ofrece<br>
                tu propia tarjeta.</h1>
            <p>Posiciona tu marca por donde quiera que vayan tus clientes. Crea una tarjeta
                a la medida y ofrece beneficios exclusivos. Cuanto más valiosa sea la tarjeta,
                mayor lealtad tendrás de tus clientes. Es aceptada en más de 700,000
                establecimientos y 43,000 cajeros RED® en México.</p>
        </div>
    </article>
</article>

<article id="slide_2" class="background">
    <article class="margin">
        <h1>¿Qué beneficios obtienes?</h1>
        <div class="block_2">
            <h2>Beneficios</h2>
            <ul>
                <li>Ofrece beneficios exclusivos a los clientes</li>
                <li>Ofrece descuentos y reembolsos</li>
                <li>Ofrece programas de comprador frecuente</li>
                <li>Posiciona tu marca</li>
                <li>Te guiamos en el desarrollo de marca</li>
                <li>Producimos tirajes a la medida</li>
            </ul>
        </div>
        <div class="block_3">
            <h2>¿Cómo puedes usarla?</h2>
            <ul>
                <li>Tener una Tarjeta CreeC</li>
                <li>Tener 3 meses con nosotros</li>
            </ul>
            <a class="click_able openContact">CONTRATA</a>
        </div>
    </article>
</article>

<?php require("../include/footer.php"); ?>
</body>
</html>