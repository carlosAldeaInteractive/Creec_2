<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | Contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/contacto.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <script src="../script/contacto.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<?= getHeader(false,''); ?>
<?php require("../include/contact.php"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <h1>Contacto de la Unidad Especializada de CreeC</h1>
        <div class="block_1">
            <h2>ConCreeC, S. A. de C. V., SOFOM, ENR y FoCreeC,
                S. A. de C. V. SOFOM, ENR</h2>
            <span>
                <h2>Domicilio:</h2>
                <p>Blr. Díaz Ordaz 140, Torre II,<br>
                    piso 20, Col. Santa María, Monterrey,<br>
                    Nuevo León, México</p>
            </span>
            <span>
                <h2>Horario:</h2>
                <p>lunes a viernes, de<br>
                    8:30 a 18:00 h.</p>
            </span>
            <span>
                <h2>Titular:</h2>
                <p>C. P. Sergio O. Zaragoza Sánchez</p>
            </span>
            <span>
                <h2>Correo electrónico</h2>
                 <h2>szaragoza@cree-c.com,</h2>
                 <h2>info@cree-c.com</h2>
            </span>
            <span>
                <h2>Teléfono</h2>
                <p>(81) 1107 1055</p>
            </span>
        </div>
        <div class="block_1">
            <div class="text fName icon"></div><input id="firstName" type="text" placeholder="Nombre(s):">
            <div class="text lName icon"></div><input id="lastName" type="text" placeholder="Apellidos:">
            <div class="email icon"></div><input id="email" type="email" placeholder="Correo Eléctronico:">
            <div class="emp icon"></div><input id="emp" type="text" placeholder="Empresa:">
            <div class="tel icon"></div><input id="tel" type="tel" placeholder="Teléfono:">
            <input type="hidden" value="">
            <section class="selector">
                <h3>Tipo de comentario</h3>
                <div hidden>Queja sobre el servicio/colaborador</div>
                <div hidden>Consulta/solicitud de información</div>
                <div hidden>Sugerencia</div>
                <div hidden>Aclaraciones/Reclamaciones</div>
            </section>
            <div class="comment icon"></div><textarea id="comment" type="tel" placeholder="Comentario:"></textarea>
            <button id="submit"><h3>Enviar</h3></button>
            <div class="g-recaptcha" data-sitekey="6LfQVxgUAAAAANdx8D2c5cnbm6bZExj2Cfzy3NrO"></div>
        </div>
    </article>
</article>



<?php require("../include/footer.php"); ?>
</body>
</html>