<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | Cobranza referenciada</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/cr.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
    <link href="../responsive/cr.css" rel="stylesheet">
    <link href="../responsive/font_resize.css" rel="stylesheet">
</head>
<body>
<?= getHeader(false,"cr"); ?>
<?php require("../include/contact.php"); ?>
<?= getBanner("Cobranza referenciada"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <div class="block_1">
            <h1>Identifica qué cliente te pagó sin importar el banco o el modo de pago.</h1>
            <p>Administra la cobranza de tu negocio. Recibe los pagos de tus clientes
                dándoles una cuenta de 16 dígitos y podrás saber quién te pagó. Todo se
                concentra y se abona en una sola cuenta. Nosotros te desglosamos los
                datos de clientes que pagaron.</p>
        </div>
    </article>
</article>

<article id="slide_2" class="background">
    <article class="margin">
        <h1>¿Qué beneficios obtienes?</h1>
        <div class="block_2">
            <h2>Beneficios</h2>
            <ul>
               <li>Recibe una cuenta aceptada en todos los bancos*</li>
               <li>Identifica cuáles clientes te han pagado a través de referencia</li>
               <li>Centraliza tus pagos en una sola cuenta</li>
               <li>Automatiza la conciliación de tu negocio</li>
               <li>Reduce los tiempos de cobranza</li>
               <li>Obtén un servicio a la medida</li>
            </ul>
            <span id="except">* Banamex y Bancomer solo acepta pagos en línea. El resto de bancos pueden pagar en línea o ventanilla bancaria.</span>
        </div>
        <div class="block_3">
            <h2>¿Cuáles son los requisitos?</h2>
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