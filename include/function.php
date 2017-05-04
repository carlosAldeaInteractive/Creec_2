<?php

    function getHeader($isHome,$flag) {
        $sourceLogo = "rsc/icon/logo.png";
        $logoLink = "..";
        $arrendamiento_financieroLink = "arrendamiento_financiero";
        $somosLink = "somosCreec";
        $tarjeta_empresarialLink = "tarjeta_empresarial";
        $tpvLink = "terminal_punto_venta";
        $tmcLink = "tarjeta_marca_compartida";
        $crLink = "cobranza_referenciada";
        $factorajeLink = "factoraje";
        $cctLink = "capital_de_trabajo";
        $fnLink = "formacion_de_negocios";
        $acLink = "abre_tu_cuenta";
        $ayudaLink = "ayuda";

        $tarjeta_empresarialSelected = '';
        $arrendamiento_financieroSelected = '';
        $ayudaSelected = '';
        $somosSelected = '';
        $carteraSelected = '';
        $tpvSelected = '';
        $tmcSelected = '';
        $crSelected = '';
        $factorajeSelected = '';
        $cctSelected = '';
        $fnSelected = '';
        $acSelected = '';

        if(!$isHome) {
            $sourceLogo = "../$sourceLogo";
            $arrendamiento_financieroLink = "../$arrendamiento_financieroLink";
            $somosLink = "../$somosLink";
            $tarjeta_empresarialLink = "../$tarjeta_empresarialLink";
            $tpvLink = "../$tpvLink";
            $tmcLink = "../$tmcLink";
            $crLink = "../$crLink";
            $factorajeLink = "../$factorajeLink";
            $cctLink = "../$cctLink";
            $fnLink = "../$fnLink";
            $acLink = "../$acLink";
            $ayudaLink = "../$ayudaLink";
            if($flag == "arrendamiento_financiero") {
                $arrendamiento_financieroLink = ".";
                $arrendamiento_financieroSelected = "selectedLink";
            }
            if($flag == "tarjeta_empresarial") {
                $tarjeta_empresarialLink = ".";
                $tarjeta_empresarialSelected = "selectedLink";
            }
            if($flag == "somos") {
                $somosLink = '.';
                $somosSelected = "selectedLink";
            }
            if($flag == "tpv") {
                $tpvLink = '.';
                $tpvSelected = "selectedLink";
            }
            if($flag == "tmc") {
                $tmcLink = '.';
                $tpvSelected = "selectedLink";
            }
            if($flag == "cr") {
                $crLink = '.';
                $crSelected = "selectedLink";
            }
            if($flag == "factoraje") {
                $factorajeLink = '.';
                $factorajeSelected = "selectedLink";
            }
            if($flag == "cct") {
                $cctLink = '.';
                $cctSelected = "selectedLink";
            }
            if($flag == "fn") {
                $fnLink = '.';
                $fnSelected = "selectedLink";
            }
            if($flag == "ac") {
                $acLink = '.';
                $acSelected = "selectedLink";
            }
            if($flag == "ayuda") {
                $ayudaLink = '.';
                $ayudaSelected = "selectedLink";
            }
        }else {
            $arrendamiento_financieroLink = "./".$arrendamiento_financieroLink;
            $tpvLink = "./".$tpvLink;
            $tmcLink = "./".$tmcLink;
            $crLink = "./".$crLink;
            $factorajeLink = "./".$factorajeLink;
            $cctLink = "./".$cctLink;
            $fnLink = "./".$fnLink;
            $acLink = "./".$acLink;
            $logoLink = ".";
        }
        ?>
        <header>
            <a id="headerLogo" href="<?=$logoLink?>"><img src="<?= $sourceLogo ?>"></a>
            <a class="click_able" <?=$crSelected?><?=$tpvSelected?><?=$tmcSelected?><?=$tarjeta_empresarialSelected?> id="services"><span  class="headerLink">servicios</span></a>
            <a class="click_able" <?=$fnSelected?><?=$cctSelected?><?=$factorajeSelected?><?=$arrendamiento_financieroSelected?> id="products"><span class="headerLink">productos</span></a>
            <a <?=$ayudaSelected?> href="<?=$ayudaLink?>"><span class="headerLink">ayuda</span></a>
            <a <?=$somosSelected?> href="<?=$somosLink?>"><span class="headerLink">creec</span></a>
            <a ><span class="headerLink click_able">contacto</span></a>
            <a <?=$carteraSelected?>  id="myWallet"><span  class="click_able headerLink">mi cartera</span></a>
            <a id="signUp" <?=$acSelected?> href="<?=$acLink?>"><span>abre tu cuenta</span></a>
            <a href="" id="facebookLogo" class="socialIcon"></a>
            <a href="" id="twitterLogo" class="socialIcon"></a>
        </header>

        <div class="hiddenPopup mainDropDown" id="serviciosDropdown">
            <a href="<?=$tarjeta_empresarialLink?>">tarjeta empresarial</a>
            <a href="<?=$tpvLink?>">Terminal punto de venta</a>
            <a href="<?=$tmcLink?>">Tarjetas de marca compartida</a>
            <a href="<?=$crLink?>">cobranza referenciada</a>
        </div>
        <div class="hiddenPopup mainDropDown" id="productosDropdown">
            <a href="<?=$arrendamiento_financieroLink?>">Arrendamiento financiero</a>
            <a href="<?=$factorajeLink?>">Factoraje</a>
            <a href="<?=$cctLink?>">Crédito para capital de trabajo</a>
            <a href="<?=$fnLink?>">Formación de negocios</a>
        </div>

        <header class="mobileHeader">
            <a id="headerLogo" href="<?=$logoLink?>"><img src="<?= $sourceLogo ?>"></a>
            <div id="mobileMenuToggle"></div>
        </header>

        <section id="mobileMenu">
            <a href="<?=$tarjeta_empresarialLink?>">tarjeta empresarial</a>
            <a href="<?=$tpvLink?>">Terminal punto de venta</a>
            <a href="<?=$tmcLink?>">Tarjetas de marca compartida</a>
            <a href="<?=$crLink?>">cobranza referenciada</a>
            <a href="<?=$arrendamiento_financieroLink?>">Arrendamiento financiero</a>
            <a href="<?=$factorajeLink?>">Factoraje</a>
            <a href="<?=$cctLink?>">Crédito para capital de trabajo</a>
            <a href="<?=$fnLink?>">Formación de negocios</a>
            <a <?=$ayudaSelected?> href="<?=$ayudaLink?>"><span class="headerLink">ayuda</span></a>
            <a <?=$somosSelected?> href="<?=$somosLink?>"><span class="headerLink">cree-c</span></a>
            <a id="signUp" <?=$acSelected?> href="<?=$acLink?>"><span>abre tu cuenta</span></a>
        </section>

        <?php
    }

    function getBanner($title) {
        ?>
        <article class="background banner">
            <h1><?=$title?></h1>
        </article>
        <?php
    }

    function getTab($num) {
        $return = "";
        for($i = 0; $i<$num ; $i++) {
            $return .= "&nbsp;";
        }
        return $return;
    }

    function getMeta($isHome) {
        $extraPath = $isHome?"":"../";
        ?>
        <meta charset="utf-8">
        <meta name="viewport" >
        <link rel="shortcut icon" href="<?=$extraPath?>rsc/icon/favicon.ico">
        <?php
    }

?>
