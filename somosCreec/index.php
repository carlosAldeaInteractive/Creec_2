<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | Somos CreeC</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/somosCreec.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
    <link href="../responsive/somosCreec.css" rel="stylesheet">
</head>
<body>
<?= getHeader(false,"somos"); ?>
<?php require("../include/contact.php"); ?>
<?= getBanner("Somos CreeC"); ?>

<article id="slide_1" class="background">
    <div id="squares">
        <div xt="-90" yt="-30" id="top_right" class="square"></div>
        <div xt="110" yt="30" id="top_left" class="square"></div>
        <div xt="120" yt="40" id="bottom_right" class="square"></div>
        <div xt="-110" yt="-50" id="bottom_left" class="square"></div>
    </div>
    <div id="front"></div>
    <article class="margin">
        <h1>CreeC, la nueva forma de hacer banca</h1>
        <h3>Abre, administra, y transfiere tu dinero desde la comodidad de tu celular, tablet o computadora. <br>
            Olvídate de papelería y visitas a la sucursal.</h3>
        <div class="block_1">
            <h2>Somos una institución financiera 100% digital</h2>
            <p>
                Somos la primera entidad financiera no bancaria con sus propios
                medios de pago sin sucursales y con toda la movilidad, como hoy
                hacemos las cosas.  Puedes tener una tarjeta o solicitar créditos
                en línea, así como hacer todos tus movimientos bancarios donde
                quieras y como quieras de forma simple, segura y conveniente.
            </p>
            <ul>
                <li>Somos miembros del Sistema Financiero Mexicano</li>
                <li>Somos una SOFOM ERN, regulada y respaldada por la CONDUSEF y la CNBV</li>
                <li>Estamos acreditados ante la Cámara de Compensación Electrónica Nacional</li>
                <li>Nuestro dictamen folio es 0693089-2015-9893-NDT, emitido por CNBV</li>
            </ul>
        </div>
    </article>
</article>

<article id="slide_2" class="background">
    <article class="margin">
        <h1>Nos respaldamos en la tecnología</h1>
        <div class="block_2">
            <h2>Sin filas ni esperas<br>
                Atención 365 días del año<br>
                Banca en línea ágil y segura
            </h2>
            <p>
                Gracias a la plataforma tecnológica que desarrollamos, te atendemos donde quiera que te encuentres. Puedes consultar saldos y movimientos de tus cuentas, realizar transferencias a cuentas de terceros y otros bancos, pagar servicios, sin hacer largas filas.
            </p>
        </div>
    </article>
</article>

<article id="slide_3" class="background">
    <article class="margin">
        <h1>La banca es para todos</h1>
        <div class="block_1">
            <p>Nosotros te otorgamos una tarjeta al momento para que puedas realizar todos tus pagos o cobros diarios por pequeños que sean, enviar o recibir dinero de tus amigos, pagar en un restaurante, comprar unos zapatos, pagar el taxi o el periódico… sin lidiar con la burocracia y las filas de los bancos.</p>
            <p>Ten la tranquilidad de saber en qué gastas tu dinero en cada momento o cómo y cuándo quieres que se lo gasten. Tú decides. Así es CreeC: todo al alcance de tu mano.</p>
        </div>
    </article>
</article>

<?php require("../include/footer.php"); ?>
</body>
</html>