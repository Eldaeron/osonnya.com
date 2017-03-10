<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="ua">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta charset="utf-8">
<!-- TITLE --><title>
<?php echo $PAGE_TITLE;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="shortcut icon" href="<?php echo SITE_URL; ?>images/favicon.png">
<!-- GOOGLE FONT --><link href="http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700" rel="stylesheet" type="text/css">
<!-- CSS LIBRARY --><link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/lib/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/lib/font-lotusicon.css">
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/lib/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/lib/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/lib/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/lib/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/lib/settings.css">
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/lib/bootstrap-select.min.css">
<!-- MAIN STYLE --><link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/style.css">
<!-- CUSTOM STYLES --><link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/custom.css">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>
<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]--><!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]--><!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!--><body> <!--<![endif]-->
    
    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<!-- HEADER TOP --><div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        <span><i class="lotus-icon-location"></i> Львівська обл. с. Ластівка вул. Івана Франка 42</span>
                        <span><i class="lotus-icon-phone"></i> Тел.: +38 (067) 501-22-77</span>
                    </div>
                    <div class="header_right float-right">

                       
                        
                        <div class="dropdown language">
                            <span>Українська</span>

                            <ul>
<li><a href="<?php echo SITE_URL . $PAGE_URL; ?>"><img class="language-flag" src="<?php echo SITE_URL; ?>images/flags/ua.png" alt="ua" title="Українська мова"/> Українська</a></li>
<li><a href="<?php echo SITE_RU . $PAGE_URL; ?>"><img class="language-flag" src="<?php echo SITE_URL; ?>images/flags/ru.png" alt="ua" title="Русский язык"/> Русcкий</a></li>
<li><a href="<?php echo SITE_EN . $PAGE_URL; ?>"><img class="language-flag" src="<?php echo SITE_URL; ?>images/flags/gb.png" alt="ua" title="English language"/> English</a></li>
<li><a href="<?php echo SITE_PL . $PAGE_URL; ?>"><img class="language-flag" src="<?php echo SITE_URL; ?>images/flags/pl.png" alt="ua" title="Polski"/> Polski</a></li>
                            </ul>
</div>

                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -->
            
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="index.php"><img src="<?php echo SITE_URL; ?>images/logo-header.png" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu"><ul class="menu">
                    <!-- class="current-menu-item" -->
                            <li><a href="index.php">Головна</a></li>
                            <li><a href="about.php">Про нас <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="contact_us.php">Контакти</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="hotel.php">Готель <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="room_halflux_new.php">Півлюкс в новому корпусі</a></li>
                                    <li><a href="room_lux_new.php">Люкс в новому корпусі</a></li>
                                    <li><a href="room_2plus1.php">Будинок 2+1</a></li>
                                    <li><a href="room_2plus3.php">Будинок 2+3</a></li>
                                    <li><a href="room_halflux.php">Півлюкс</a></li>
                                    <li><a href="room_lux.php">Люкс</a></li>
                                    <li><a href="room_4plus2.php">Будинок «Над банькою» 4+2</a></li>
                                    <li><a href="room_5plus2.php">Будинок 5+2</a></li>
                                    <li><a href="room_standart.php">Стандарт</a></li>
                                    <li><a href="room_standart_better.php">Стандарт покращений</a></li>
                                    <li><a href="room_rules.php">Правила проживання</a></li>
                                    <li><a href="room_prices.php">Ціни</a></li>
                                </ul>
                            </li>
                            <li><a href="restaurant.php">Ресторан</a></li>
                            <li><a href="services.php">Послуги <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="jeep.php">Джиппінг</a></li>
                                    <li><a href="zorb.php">Зорбінг</a></li>
                                    <li><a href="bike.php">Велопрогулянка</a></li>
                                    <li><a href="mounted.php">Кінні прогулянки</a></li>
                                    <li><a href="zipline.php">ZipLine</a></li>
                                    <li><a href="rus_bath.php">Руська баня над озером</a></li>
                                    <li><a href="bee.php">Вуликотерапія</a></li>
                                    <li><a href="excursion.php">Організація екскурсій</a></li>
                                    <li><a href="fishing.php">Форельник</a></li>
                                    <li><a href="boat.php">Катання на човнах</a></li>
                                    <li><a href="vat.php">Чан</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="actions.php">Акції та пропозиції <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="programa_loyalnosti.php">Програма лояльності</a></li>
                                    <li><a href="v_den_narodzhennya.php">В День народження</a></li>
                                    <li><a href="akcii_na_dodatkovi_poslugi.php">В Днем Народження</a></li>
                                    <li><a href="novorіchnі_svyata_2017.php">Новорічні свята</a></li>
                                    <li><a href="rannie_bronyuvannya.php">Раннє бронювання -10%</a></li>
                                </ul>
                            </li>
                            <li><a href="guestbook.php">Гостьова книга</a></li>
                            <li><a href="photogallery.php">Галерея</a></li>
                        </ul></nav><!-- END / HEADER MENU --><!-- MENU BAR --><span class="menu-bars">
                        <span></span>
                    </span>
                    <!-- END / MENU BAR -->

                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->

        </header><!-- END / HEADER -->