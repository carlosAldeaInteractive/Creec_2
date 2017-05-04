<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | Terminal Punto de Venta</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/tpv.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
    <link href="../responsive/tpv.css" rel="stylesheet">
    <link href="../responsive/font_resize.css" rel="stylesheet">
</head>
<body>
<?= getHeader(false,"tpv"); ?>
<?php require("../include/contact.php"); ?>
<?= getBanner("Servicio de cobro CreeC"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <div class="block_1">
            <h1>Convierte tu smartphone en un medio de pago</h1>

            <p> Olvídate de tramitar tu terminal en el banco y tener que pagar
                cuotas de mantenimiento, fianzas y papel para poder cobrar. Queremos hacer
                crecer tu negocio, ofreciéndoles a tus clientes una opción más cómoda
                de pago desde tu celular o tableta.</p>
            <h2>Todo por un pago único de $800</h2>
        </div>
    </article>
</article>

<article id="slide_2" class="background">
    <div id="card"></div>
    <article class="margin">
        <h1>¿Qué beneficios obtienes?</h1>
        <div class="block_2">
            <h2>¿Cómo puedes usarla?</h2>
            <ul>
                <li>Recibe pagos con tarjeta de débito o crédito</li>
                <li>Ofrece meses sin intereses</li>
            </ul>
            <h2>¿Cuáles son los requisitos?</h2>
            <ul>
                <li>Tener una Tarjeta CreeC</li>
                <li>Registrar correo electrónico y teléfono celular</li>
            </ul>
        </div>
        <div class="block_3">
            <h2>Beneficios</h2>
            <ul>
                <li>Acepta todas las tarjetas bancarias</li>
                <li>Cobra al momento</li>
                <li>Dispón del dinero al día siguiente</li>
                <li>No pagas anualidad</li>
                <li>No pagas facturación ni renta mensual</li>
                <li>Sin límite de monto por ventas</li>
            </ul>
            <a class="click_able" href="http://aldeainteractive.com/beta/creec/abre_tu_cuenta">CONTRATA</a>
        </div>
    </article>
</article>


<article id="slide_3" class="background">
    <article class="margin">
        <div class="block_2">
            <h1>Servicio de cobro CreeC</h1>
            <img src="../rsc/icon/consultaEnLinea.png">
            <h2>Acepta todas las tarjetas</h2>
            <p>La terminal acepta todas las tarjetas de débito y crédito.</p>
            <div id="visa" class="image card"><img src="../rsc/icon/visa.png"></div>
            <div id="mastercard" class="image card"><img src="../rsc/icon/mastercard.png"></div>
            <div id="americanExpress" class="image card"><img src="../rsc/icon/americanExpress.png"></div>
            <div class="divisor"></div>
            <div id="carnet" class="image card"><img src="../rsc/icon/carnet.png"></div>
            <div id="sodexo" class="image card"><img src="../rsc/icon/sodexo.png"></div>
			<div id="sivale" class="image card"><img src="../rsc/icon/sivale.png"></div>
        </div>
        <div class="block_1">
            <img src="../rsc/icon/pagos.png">
            <h2>Comisión fija</h2>
            <p>Por cada transacción paga una comisión de 3.5% más IVA, una de las tasas más bajas de pagos móviles en México.</p>

            <img src="../rsc/icon/pagos.png">
            <h2>Transacciones seguras</h2>
            <p>Protegemos tus datos con altos estándares de calidad. Recibirás notificaciones por cada venta.</p>

            <img src="../rsc/icon/alertas.png">
            <h2>Meses sin intereses</h2>
            <p>Puedes ofrecer a tus clientes 3, 6, 9 y 12 meses sin intereses.</p>

        </div>
    </article>
</article>



<?php require("../include/footer.php"); ?>
</body>
</html>