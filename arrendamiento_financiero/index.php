<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | Arrendamiento Financiero</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/productos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <script src="../script/moveBackground.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
    <link href="../responsive/af.css" rel="stylesheet">
    <link href="../responsive/font_resize.css" rel="stylesheet">
</head>
<body>
<?= getHeader(false,"arrendamiento_financiero"); ?>
<?php require("../include/contact.php"); ?>
<?= getBanner("Arrendamiento financiero"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <div class="block_1">
            <h1>Pon tu negocio <br> en movimiento.</h1>
            <p>Equipa tu negocio con una flotilla o maquinaria a través
                del servicio de leasing. En CreeC te ofrecemos alternativas
                para que obtengas beneficios fiscales al arrendar,
                mientras tú te aseguras de operar tu negocio.</p>
        </div>
    </article>
</article>

<article id="slide_2" class="background">
    <article class="margin">
        <h1>¿Qué beneficios obtienes?</h1>
        <div class="block_1">
            <h2>Beneficios</h2>
            <ul>
                <li>Equipa a tu negocio con vehículos o maquinaria</li>
                <li>Elimina el costo por depreciación</li>
                <li>Obtén financiamiento con tasas fijas</li>
                <li>Deduce los intereses pagados</li>
                <li>Deduce el ISR</li>
                <li>Acredita el IVA</li>
                <li>Recibe financiamiento hasta por 2 millones de pesos</li>
            </ul>
        </div>
        <div class="block_3">
            <h2>¿Cómo puedes usarla?</h2>
            <ul>
               <li>Ser cliente de CreeC</li>
               <li>Acta de nacimiento o credencial para votar</li>
               <li>Último comprobante de domicilio</li>
            </ul>
            <a class="click_able openContact">SOLICITA SERVICIO A LA MEDIDA</a>
        </div>
    </article>
</article>

<?php require("../include/footer.php"); ?>
</body>
</html>