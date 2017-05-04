<!DOCTYPE HTML>
<html lang="es">
<head>
    <?php include_once("../include/function.php") ?>
    <?= getMeta(false); ?>
    <title>CreeC | Formación de negocios</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/fn.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../script/script.js"></script>
    <link href="../responsive/header.css" rel="stylesheet">
    <link href="../responsive/fn.css" rel="stylesheet">
    <link href="../responsive/font_resize.css" rel="stylesheet">
</head>
<body>
<?= getHeader(false,"fn"); ?>
<?php require("../include/contact.php"); ?>
<?= getBanner("Cursos y programas de formación en negocios"); ?>

<article id="slide_1" class="background">
    <article class="margin">
        <div class="block_1">
            <h1>Mantente actualizado<br>
                y fortalece tu negocio.</h1>
            <p>En CreeC queremos brindarte las herramientas necesarias para
                que tu negocio crezca. Ofrecemos programas de educación
                continua, cursos y diplomados para que tu equipo de trabajo
                esté capacitado  sobre temas como educación financiera,
                administración, ventas, entre otros.</p>
            <a class="openContact click_able">CONTÁCTANOS</a>
        </div>
    </article>
</article>

<?php require("../include/footer.php"); ?>
</body>
</html>