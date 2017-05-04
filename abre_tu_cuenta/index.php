<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | Abre tu cuenta</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/ac.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <script src="../script/ac.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
    <link href="../responsive/ac.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<?= getHeader(false,"ac"); ?>
<?php require("../include/contact.php"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <h1>Regístrate en CreeC</h1>

        <div class="text icon"></div><input id="email" type="text" placeholder="Correo electrónico">
        <div class="password icon"></div><input id="password1" type="password" placeholder="Escoge tu contraseña">
        <div class="password icon"></div><input id="password2" type="password" placeholder="Verifica tu contraseña">
        <div class="tel icon"></div><input id="phone" type="tel" placeholder="Teléfono celular">

        <span id="message">Al regístrate estás aceptando los <a class="click_able">Términos y condiciones</a>, el <a class="click_able">Aviso de privacidad</a><br>
        y los <a id="openComisiones" class="click_able">Costos y comisiones de CreeC.</a></span>
        <a class="click_able" id="submit">CONTRATA</a>
        <div class="g-recaptcha" data-sitekey="6LfQVxgUAAAAANdx8D2c5cnbm6bZExj2Cfzy3NrO"></div>
    </article>
</article>

<article id="slide_5" class="background" style="display: none;">
    <div class="click_able" id="closeSlide5"></div>
    <article class="margin">
        <section class="row"><span>Anualidad</span><span>$2000</span></section>
        <section class="row"><span>Manejo de cuenta</span><span>Sin costo</span></section>
        <section class="row"><span>Saldo mínimo</span><span>Sin costo</span></section>
        <section class="row"><span>Anualidad tarjeta adicional</span><span>$2000</span></section>
        <section class="row"><span>Consulta de saldo en cajero ATM</span><span>La que determine el banco operador</span></section>
        <section class="row"><span>Disposición de efectivo en cajero ATM</span><span>La que determine el banco operador</span></section>
        <section class="row"><span>Monto de retiro de efectivo en cajero ATM por 24 horas</span><span>$5000</span></section>
        <section class="row"><span>Pago en ventanillas bancarias en efectivo (48 horas)</span><span>Sin costo</span></section>
        <section class="row"><span>Traspasos por transferencia electrónica</span><span>Sin costo</span></section>
        <section class="row"><span>Pago tardío</span><span>Sin costo</span></section>
        <section class="row"><span>Reposición por robo o extravío</span><span>$250</span></section>
        <section class="row"><span>Aclaración improcedente</span><span>$300</span></section>
        <section class="row"><span>Servicio de alertas</span><span>$50</span></section>
        <section class="row"><span>Compra de tiempo aire (ATM RED®)</span><span>Sin costo</span></section>
        <section class="row"><span>Cambio de NIP (ATM RED®)</span><span>Sin costo</span></section>
    </article>
</article>

<?php require("../include/footer.php"); ?>
</body>
</html>