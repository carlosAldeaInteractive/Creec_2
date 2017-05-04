<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | Factoraje</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/factoraje.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <script src="../script/moveBackground.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
    <link href="../responsive/factoraje.css" rel="stylesheet">
    <link href="../responsive/font_resize.css" rel="stylesheet">
</head>
<body>
<?= getHeader(false,"factoraje"); ?>
<?php require("../include/contact.php"); ?>
<?= getBanner("Factoraje"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <div class="block_1">
            <h1>Olvídate de cobrar<br>
                a 30, 60 o 90 días.</h1>
            <p>No dejes de operar tu negocio por falta de efectivo.
                Obtén liquidez para pagar a proveedores o para recibir
                pagos anticipados por tus ventas. Te damos financiamiento
                a corto plazo para ayudarte en la administración de tus
                cuentas por cobrar y pagar.</p>
        </div>
    </article>
</article>

<article id="slide_2" class="background">
    <article class="margin">
        <h1>¿Qué beneficios obtienes?</h1>

        <div class="block_3">
            <h2>Beneficios</h2>
            <ul>
                <li>Obtén efectivo inmediato</li>
                <li>Paga deudas a proveedores</li>
                <li>Compra inventario</li>
                <li>Mejora el flujo de efectivo y las proyecciones</li>
                <li>Te financiamos desde 60 hasta 180 días de tu operación</li>
            </ul>
            <a class="click_able openContact">SOLICITA SERVICIO A LA MEDIDA</a>
        </div>
        <div class="block_1">
            <h2>Requisitos</h2>
            <ul>
                <li>Ser cliente de CreeC</li>
                <li>Acta de nacimiento o credencial para votar</li>
                <li>Último comprobante de domicilio</li>
                <li>Datos de costos a cubrir</li>
                <li>Datos de proveedores para realizar pagos</li>
            </ul>
        </div>
    </article>
</article>

<?php require("../include/footer.php"); ?>
</body>
</html>