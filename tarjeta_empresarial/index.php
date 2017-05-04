<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <meta charset="utf-8">
    <meta name="viewport" >
    <title>CreeC | Tarjeta Empresarial</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/servicios.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
    <link href="../responsive/te.css" rel="stylesheet">
    <link href="../responsive/font_resize.css" rel="stylesheet">
</head>
<body>
<?= getHeader(false,"tarjeta_empresarial"); ?>
<?php require("../include/contact.php"); ?>
<?= getBanner("Tarjeta empresarial CreeC"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <div class="block_1">
            <h1>Lleva los gastos de tu <br>negocio en un solo lugar.</h1>
            <p>Administra y controla los recursos de tu negocio, ya sea que operes como profesionista o tengas tu empresa. Centraliza todo en una sola cuenta.</p>
            <p>Te ofrecemos tu primera tarjeta. Funciona como una tarjeta de débito, pero te genera historial crediticio como una tarjeta de crédito. Solo gasta el saldo que deposites para manejar de forma eficiente y segura tu dinero.</p>
        </div>
    </article>
</article>

<article id="slide_2" class="background">
    <article class="margin">
        <h1>¿Qué beneficios obtienes?</h1>
        <div class="block_3">
            <h2>¿Cómo puedes usarla?</h2>
            <ul>
                <li>Paga gastos de viaje</li>
                <li>Paga a proveedores</li>
                <li>Paga servicios y telefonía</li>
                <li>Paga tus compras</li>
            </ul>
        </div>
        <div class="block_2">
            <h2>Beneficios</h2>
            <ul>
                <li>No hay saldo mínimo</li>
                <li>No hay intereses</li>
                <li>No hay penalizaciones</li>
                <li>No hay cobro por manejo de cuenta</li>
                <li>Aceptada por el SAT</li>
            </ul>
        </div>
        <div class="block_1">
            <ul>
                <li>Anualidad: $2,000</li>
                <li>CAT (Costo Anual Promedio): 0%</li>
                <li>Tasa de interés: 0%</li>
                <li>Monto de línea: ilimitado</li>
            </ul>
        </div>
        <a href="http://aldeainteractive.com/beta/creec/abre_tu_cuenta">ADQUIERE TU TARJETA</a>
        <a href="#slide_4">REQUISITOS</a>
    </article>
</article>

<article id="slide_3" class="background">
    <article class="margin">
        <h1>Que el efectivo no te limite</h1>
        <div class="block_1">
            <img src="../rsc/icon/consultaEnLinea.png">
            <h2>Consulta tu saldo en línea</h2>
            <p>Desde el portal de CreeC puedes consultar tus movimientos.</p>

            <img src="../rsc/icon/alertas.png">
            <h2>Recibe alertas por transacción</h2>
            <p>Ten en orden tus gastos sabiendo dónde y cuándo realizas un gasto al instante.</p>

            <img src="../rsc/icon/pagos.png">
            <h2>Red de pagos amplia</h2>
            <p>Es aceptada en más de 700,000 establecimientos en México y en cajeros RED®.</p>

        </div>
        <div class="block_2">
            <img src="../rsc/icon/bancos.png">
            <h2>Aceptada en todos los bancos*</h2>
            <p>Para tu comodidad, puedes pagar tu tarjeta desde todos los bancos en ventanilla o transferencia SPEI.</p>
            <div class="image bank"><img src="../rsc/icon/bancomer.png"></div>
            <div class="image bank"><img src="../rsc/icon/banamex.png"></div>
            <div class="image bank"><img src="../rsc/icon/afirme.png"></div>
            <div class="divisor"></div>
            <div class="image bank"><img src="../rsc/icon/hsbc.png"></div>
            <div id="banorte" class="image bank"><img src="../rsc/icon/banorte.png"></div>
            <div class="image bank"><img src="../rsc/icon/santander.png"></div>
            <div class="divisor"></div>
            <div class="image bank"><img src="../rsc/icon/scotiabank.png"></div>
            <div id="actinver" class="image bank"><img src="../rsc/icon/actinver.png"></div>
            <div class="image bank"><img src="../rsc/icon/banregio.png"></div>
            <div class="divisor"></div>
            <div class="image bank"><img src="../rsc/icon/mifel.png"></div>
            <div id="multiva" class="image bank"><img src="../rsc/icon/multiva.png"></div>
            <div id="banbajio" class="image bank"><img src="../rsc/icon/inbursa.png"></div>
            <br>
            <br>
            <p id="except">* Banamex y Bancomer solo acepta pagos en línea. El resto de bancos pueden pagar en línea o ventanilla bancaria.</p>

        </div>
    </article>
</article>

<article id="slide_4" class="background">
    <article class="margin">
        <div class="block_1">
            <h1>Personas morales</h1>
            <ul>
                <li>Acta constitutiva (debe verse el dato del representante legal <br>
                    y los datos de inscripción al RPPyC)</li>
                <li>Cédula fiscal</li>
                <li>Último comprobante de domicilio (no mayor a 3 meses)</li>
                <li>Último estado de cuenta (no mayor a 3 meses)</li>
                <li>Credencial para votar o pasaporte del representante legal</li>
            </ul>
        </div>
        <div class="block_2">
            <h1>Personas físicas o freelance</h1>
            <ul>
                <li>Ser mexicano mayor de 18 años</li>
                <li>Credencial para votar o pasaporte</li>
                <li>CURP</li>
                <li>Último recibo de luz o agua (no mayor a 3 meses)</li>
                <li>Último comprobante de ingresos o estado<br>
                    de cuenta (no mayor a 3 meses)</li>
                <li id="openComisiones" class="click_able">Ver comisiones</li>
            </ul>
        </div>
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