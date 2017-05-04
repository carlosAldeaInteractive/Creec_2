<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | Corporativo CreeC</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/corporativo.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
</head>
<body>
<?= getHeader(false,''); ?>
<?php require("../include/contact.php"); ?>
<?= getBanner("Corporativo CreeC"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <h1>Corporativo CreeC</h1>
        <h3>Creemos que podemos aportar para que microempresarios y<br>
            empresas hagan crecer su patrimonio y sus negocios.</h3>
        <div class="block_1">
            <p>
                Somos una de las primeras instituciones financieras con un nuevo
                modelo de negocio sin sucursales para adaptarnos a las necesidades
                del mundo virtual. Nuestro Corporativo CreeC está integrado por
                las SOFOM ConcreeC y FocreeC.
            </p>
            <p>
                CreeC nació de la necesidad de ayudar a pymes a obtener créditos,
                gestión de fondos y asesoría financiera, sin las condiciones difíciles
                de los bancos y enfocándose a ayudar a acelerar el desarrollo
                de los negocios.
            </p>
            <p>
                Iniciamos operaciones en 1998 y desde 2010 nos transformamos
                en CreeC. Fuimos pioneros en ofrecer descuentos por nómina,
                después en el manejo de microcréditos a pymes y microempresas a
                nivel nacional. Actualmente, estamos renovándonos para ofrecer
                mejores servicios a nuestros clientes, por eso ahora somos de las
                primeras Entidades Financieras No Reguladas que brinda medios
                de pago.
            </p>
            <p>
                CreeC somos un equipo de personas que queremos mostrar
                el lado humano de las finanzas. Trabajamos codo a codo con nuestros
                clientes para diseñarles productos a la medida, que se adapten las
                necesidades de su negocio y que les ayude a crecer.
            </p>
        </div>
        <div class="block_1">
            <h2>Un cambio a la visión de los servicios financieros</h2>
            <ul>
                <li>Utilizamos la última tecnología para darte soluciones seguras y
                    sencillas a tus necesidades crediticias.</li>
                <li>Ofrecemos 100% de los canales digitales para estar siempre
                    en contacto contigo. ¡Olvídate de la banca tradicional!</li>
                <li>Somos un equipo transparente y honesto, usamos un lenguaje
                    directo y objetivo en toda la información que compartimos.</li>
                <li>Tratamos a los clientes como una persona, escuchando y valorando
                    sus comentarios para mejorar cada día nuestros procesos
                    y ganar su confianza.</li>
            </ul>
        </div>
    </article>
</article>



<?php require("../include/footer.php"); ?>
</body>
</html>