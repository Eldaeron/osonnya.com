<?php 
/**
 * @Site: Ossonya.com
 * @Copyright © 2016 Eldaeron
 * @Can be configure by code
 *
 */

$PAGE_TITLE = '«Осоння» Карпати'; // Титул сайта
$PAGE_URL = 'index.php'; // УРЛ-сайта
require_once('header.php') #Підключаєм шапку шаблону 
?>

<!-- BANNER SLIDER -->
        <section class="section-slider">
            <h1 class="element-invisible">Slider</h1>
            <div id="slider-revolution">
                <ul>
                    <li data-transition="fade">
                        <img src="<?php echo SITE_URL; ?>images/slider/5-1.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">
                        
                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="200" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         <img src="<?php echo SITE_URL; ?>images/slider/logo5.png" alt="icons">
                        </div>

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="340" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         ГОТЕЛЬНО-ВІДПОЧИНКОВИЙ КОМПЛЕКС
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="380" data-speed="700" data-easing="easeOutBack" data-start="2000">ОСОННЯ</div>
                        
                        <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="480" data-easing="easeOutBack" data-speed="700" data-start="2200">ПРО НАС</a>
                    </li> 

                    <li data-transition="fade">
                        <img src="<?php echo SITE_URL; ?>images/slider/5-2.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt=""><div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300" data-easing="easeOutBack">
                          
</div>
            
                       
                    </li> 

                </ul>
</div>

        </section><!-- END / BANNER SLIDER --><!-- CHECK AVAILABILITY --><section class="section-check-availability"><div class="container">
                <div class="check-availability">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2>ЗАБРОНЮВАТИ НОМЕР</h2>
                        </div>
                        <div class="col-lg-9">
                            <form id="ajax-form-search-room" action="search_step_2.php" method="post">
                                <div class="availability-form">
                                    <input type="text" name="arrive" class="awe-calendar from" placeholder="Дата Заїзду"><input type="text" name="departure" class="awe-calendar to" placeholder="Дата Виїзду"><select class="awe-select" name="adults"><option>Дорослих</option>
<option>1</option>
<option>2</option>
<option>3</option></select><select class="awe-select" name="children"><option>Дітей</option>
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option></select><div class="vailability-submit">
                                        <button class="awe-btn awe-btn-13">Дізнатьсь доступність?</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END / CHECK AVAILABILITY --><!-- ACCOMD ODATIONS --><section class="section-accomd awe-parallax bg-14"><div class="container">
                <div class="accomd-modations">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accomd-modations-header">
                                <h2 class="heading">НОМЕРИ</h2>
                                <img src="<?php echo SITE_URL; ?>images/icon-accmod.png" alt="icon"><p>У відпочинковому комплексі «ОСОННЯ Карпати» нараховується 28 номерів різних категорій у готелі, та 5 будинків типу шале місткістю від 2 до 7 гостей. Одночасно ми можемо розмістити 71 особу на основних місцях та 36 осіб на додаткових. Всі вони виконані з натурального дерева в еко-стилі.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="accomd-modations-content owl-single">
                                
                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="room_halflux.php"><img src="<?php echo SITE_URL; ?>images/room/pivlux.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="room_halflux.php">Півлюкс</a></h2>
                                                <p class="price">
                                                    <span class="amout">Від 600 грн.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                    
                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="room_lux.php"><img src="<?php echo SITE_URL; ?>images/room/lux.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="room_lux.php">Люкс</a></h2>
                                                <p class="price">
                                                    <span class="amout">Від 1000 грн.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                    
                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="room_2plus1.php"><img src="<?php echo SITE_URL; ?>images/room/bud1.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="room_2plus1.php">Будинок 2+1</a></h2>
                                                <p class="price">
                                                    <span class="amout">Від 950 грн.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                    
                                    
                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="room_2plus3.php"><img src="<?php echo SITE_URL; ?>images/room/bud3.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="room_2plus3.php">Будинок 2+3</a></h2>
                                                <p class="price">
                                                    <span class="amout">Від 1300 грн.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                      <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="room_5plus2.php"><img src="<?php echo SITE_URL; ?>images/room/bud7.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="room_5plus2.php">Будинок 5+2 </a></h2>
                                                <p class="price">
                                                    <span class="amout">Від 2500 грн.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                    



                                </div>

                                <div class="row">
                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="room_4plus2.php"><img src="<?php echo SITE_URL; ?>images/room/bud4.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="room_4plus2.php">Будинок «Над Банькою» 4 + 2</a></h2>
                                                <p class="price">
                                                    <span class="amout">Від 1850 грн.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                  
                                     <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="room_halflux_new.php"><img src="<?php echo SITE_URL; ?>images/room/now2.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="room_halflux_new.php">Півлюкм в новому корпусі</a></h2>
                                                <p class="price">
                                                    <span class="amout">Від 700 грн.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                     <!-- END / ITEM -->
                                     <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="room_lux_new.php"><img src="<?php echo SITE_URL; ?>images/room/now1.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="room_lux_new.php">Люкс в новому корпусі</a></h2>
                                                <p class="price">
                                                    <span class="amout">Від 1100 грн.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                     <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="room_standart.php"><img src="<?php echo SITE_URL; ?>images/room/nadres.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="room_standart.php">Стандарт</a></h2>
                                                <p class="price">
                                                    <span class="amout">Від 500 грн.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                     <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="room_standart_better.php"><img src="<?php echo SITE_URL; ?>images/room/nadres.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="room_standart_better.php">Стандарт покращений</a></h2>
                                                <p class="price">
                                                    <span class="amout">Від 550 грн.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->
                                  

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- END / ACCOMD ODATIONS --><!-- ABOUT --><section class="section-home-about bg-white"><div class="container">
                <div class="home-about">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img">
                                <a href="#"><img src="<?php echo SITE_URL; ?>images/home/about/about.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="heading">ПРО НАС</h2>
                                <span class="box-border"></span>
                                <p>За 6 км від курортної Східниці на березі ріки Стрий є місце єднання з природою, де завжди сонячно. Готельно-відпочинковий комплекс «Осоння» розташований на південному підгір’ї, звідки око милує неймовірний гірський краєвид. Саме тут Ви маєте змогу доторкнутися до живої природи Карпат: напитися джерельної води, спостерігати оленів, які переходять вранці річку, а влітку — назбирати лісових ягід прямо на території комплексу...</p>
                                <a href="about.html" class="awe-btn awe-btn-default">ДЕТАЛЬНІШЕ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END / ABOUT --><!-- OUR BEST --><section class="section-our-best bg-white"><div class="container">

                <div class="our-best">
                    <div class="row">

                        <div class="col-md-6 col-md-push-6">
                            <div class="img">
                                <img src="<?php echo SITE_URL; ?>images/home/ourbest/ourbast.jpg" alt="">
</div>
                        </div>

                        <div class="col-md-6 col-md-pull-6 ">
                            <div class="text">
                                <h2 class="heading">Зручності у готелі</h2>
                                <p>Номери оснащені телевізором з плоским екраном. З деяких номерів відкривається вид на гори або озеро. Усі номери облаштовані власною ванною кімнатою з біде, душовою кабіною, тапочками, феном і безкоштовними туалетно-косметичними засобами. На усій території надається безкоштовний Wi-Fi.</p>
                                 <br>
                                 <h2 class="heading">Активності</h2>
                                <ul>
<li>
<img src="<?php echo SITE_URL; ?>images/home/ourbest/icon-11.png" alt="icon">Джипінг</li>
                                    <li>
<img src="<?php echo SITE_URL; ?>images/home/ourbest/icon-12.png" alt="icon">Зорбінг</li>
                                    <li>
<img src="<?php echo SITE_URL; ?>images/home/ourbest/icon-13.png" alt="icon">Велопрогулянки</li>
                                    <li>
<img src="<?php echo SITE_URL; ?>images/home/ourbest/icon-14.png" alt="icon">Кінні прогулянки</li>
                                    <li>
<img src="<?php echo SITE_URL; ?>images/home/ourbest/icon-15.png" alt="icon">ZipLine</li>
                                    <li>
<img src="<?php echo SITE_URL; ?>images/home/ourbest/icon-16.png" alt="icon">Руська банька та чан</li>
                                <li>
<img src="<?php echo SITE_URL; ?>images/home/ourbest/icon-17.png" alt="icon">Вулико-терапія</li>
                                <li>
<img src="<?php echo SITE_URL; ?>images/home/ourbest/icon-18.png" alt="icon">Організація екскурсій</li>
                                </ul>
                                <a href="services.html" class="awe-btn awe-btn-default">ДЕТАЛЬНІШЕ</a>
</div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- END / OUR BEST --><!-- HOME GUEST BOOK --><div class="section-home-guestbook awe-parallax bg-13">
            <div class="container">
                <div class="home-guestbook"> 
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="guestbook-content owl-single">
                                
                                <!-- ITEM -->
                                <div class="guestbook-item">
                                    <div class="img">
                                        <img src="<?php echo SITE_URL; ?>images/avatar/55.png" alt="">
</div>
                                
                                    <div class="text">
                                        <p>Це дійсно місце єднання з природою. Були тут в червні 2016 року. Номери казкові, все натуральне, оригінальне і настільки комфортне! Власники продумали усе до дрібниці і забезпечили номера всім необхідним, щоб кожен гість відчував себе як вдома. Безліч розваг (зіплайн, настіьний хокей, зорбінг, катання на конях тощо), неповторна природа навколо і романтика (чого варта одна прогулянка на човні на вечірньому озері з безліччю ліхтарів навколо). А за гамак окреме дякую! Такого кайфу просто сидячи ввечері на веранді давно не відчували. Чоловік навіть заснув в ньому))))) Також, дуже приємно вразив персонал: завжди привітний і готовий допомогти)
Мріємо з чоловіком ще хоч би разочок вирватися з міста до вас на кілька днів відпочити......</p>
                                        <span><strong>Христина</strong></span>
                                    </div> 
                                </div>
                                <!-- ITEM -->

                                <!-- ITEM -->
                                <div class="guestbook-item">
                                    <div class="img">
                                        <img src="<?php echo SITE_URL; ?>images/avatar/55.png" alt="">
</div>
                                
                                    <div class="text">
                                        <p>Действительно,приятный отдых,взяли домик 5+2,с мужем,дочерью и зятем отдохнули от киевской суеты,в домике чисто и уютно,веранда с гамаками нас порадовала,вид на лес и речку прекрасный,воздух чистый,огромное спасибо персоналу,в ресторане вкусная еда и отзывчивые официанты.Свой день рождения провела с близкими и дорогими мне людьми,ужин праздничный заказали в домик,сервисом остались довольны,Хотелось бы приехать еще,а к пожеланиям добавить -организовать СПА процедуры .Немного огорчили строительные работы на территории,а в общем,советуем ехать в такое уютное местечко,спасибо,за незабываемый отдых.отдыхали 8 дней ,с 2 июля.</p>
                                        <span><strong>Алла</strong></span>
                                    </div> 
                                </div>
                                <!-- ITEM -->
                            
                            </div>
                            <a href="guestbook.html" class="awe-btn awe-btn-6">ДЕТАЛЬНІШЕ</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- END / HOME GUEST BOOK -->

        <!-- HOME NEW -->
        <section class="section-event-news bg-white"><div class="container">

                <div class="event-news">
                    <div class="row">
                        
                        <!-- EVENT -->
                        <div class="col-md-6">
                            <div class="event">
                                <h2 class="heading">Акції та пропозиції</h2>
                                <span class="box-border w350"></span>

                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="event-slide owl-single">

                                            <div class="event-item">
                                                <div class="img hover-zoom">
                                                    <a href="actions4.html">
                                                        <img src="<?php echo SITE_URL; ?>images/home/eventdeal/newyear.jpg" alt=""></a>
                                                </div>
                                            </div>

                                            

                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                  

                                </div>
                            </div>
                        </div>
                        <!-- END / EVENT -->
                        
                        <!-- NEWS -->
                        <div class="col-md-6">
                            <div class="news">
                                <h2 class="heading">Програма лояльності</h2>
                                <span class="box-border w350 space-5"></span>

                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-md-12">
                                        <div class="news-item">
                                            <div class="img">
                                                <a href="actions1.html"><img src="<?php echo SITE_URL; ?>images/gallery/carti/1.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <span class="date">«Срібна карта»</span>
                                                <h2><a href="actions1.html"> 7% знижки на проживання в готеліта харчування в ресторані.</a></h2>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-12">
                                        <div class="news-item">
                                            <div class="img">
                                                <a href="actions1.html"><img src="<?php echo SITE_URL; ?>images/gallery/carti/2.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <span class="date">«Золота картка» </span>
                                                <h2><a href="actions1.html"> 10% знижки на проживання в готелі.<br>
                                                  10% знижки на харчування в ресторані.</a></h2>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-12">
                                        <div class="news-item">
                                            <div class="img">
                                                <a href="actions1.html"><img src="<?php echo SITE_URL; ?>images/gallery/carti/3.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <span class="date">«Платинова карта»</span>
                                                <h2><a href="actions1.html">15% знижки на проживання в готелі<br>15% знижки на харчування в ресторані<br>10% знижки на додаткові послуги (зіплайн, зорбінг, руську баню та чан).</a></h2>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                                <a href="actions1.html" class="awe-btn awe-btn-default">Детальніше</a>

                            </div>

                        </div>
                        <!-- END / NEWS -->

                    </div>

                    <div class="hr"></div>

                </div>

            </div>
        </section><!-- END / HOME NEW --><!-- GALLERY --><section class="section-gallery bg-white"><div class="gallery  no-padding">
                <h2 class="heading text-center">Галерея</h2>
                
                <!-- FILTER -->
                <div class="gallery-cat text-center">
                    <ul class="list-inline">
<li class="active"><a href="#" data-filter="*">Усі</a></li>
                        <li><a href="#" data-filter=".lito">Літо в ОСОННІ</a></li>
                        <li><a href="#" data-filter=".zima">Зима в ОСОННІ </a></li>
                        <li><a href="#" data-filter=".bathroom">Готель</a></li>
                        <li><a href="#" data-filter=".dining">Номери</a></li>
                    </ul>
</div>
                <!-- END / FILTER -->

                <!-- GALLERY CONTENT -->
                <div class="gallery-content hover-img">
                    <div class="row">
                        <div class="gallery-isotope col-6 pd-0">

                            <!-- ITEM SIZE -->
                                <div class="item-size"></div>
                                <!-- END / ITEM SIZE -->
                            <!-- ITEM -->
                            
                            <div class="item-isotope zima">
                                <div class="gallery_item">
                                    <a href="<?php echo SITE_URL; ?>images/gall/zima/1.jpg" class="gallery-popup mfp-image">
                                        <img src="<?php echo SITE_URL; ?>images/gall/zima/1min.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  zima">
                                <div class="gallery_item">
                                    <a href="<?php echo SITE_URL; ?>images/gall/zima/2.jpg" class="gallery-popup mfp-image" >
                                        <img src="<?php echo SITE_URL; ?>images/gall/zima/2min.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            
                            <!-- ITEM -->
                            <div class="item-isotope  zima">
                                <div class="gallery_item">
                                    <a href="<?php echo SITE_URL; ?>images/gall/zima/3.jpg" class="gallery-popup mfp-image" >
                                        <img src="<?php echo SITE_URL; ?>images/gall/zima/3min.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  zima">
                                <div class="gallery_item">
                                    <a href="<?php echo SITE_URL; ?>images/gall/zima/4.jpg" class="gallery-popup mfp-image" >
                                        <img src="<?php echo SITE_URL; ?>images/gall/zima/4min.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  zima">
                                <div class="gallery_item">
                                    <a href="<?php echo SITE_URL; ?>images/gall/zima/5.jpg" class="gallery-popup mfp-image" >
                                        <img src="<?php echo SITE_URL; ?>images/gall/zima/5min.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  zima">
                                <div class="gallery_item">
                                    <a href="<?php echo SITE_URL; ?>images/gall/zima/6.jpg" class="gallery-popup mfp-image" >
                                        <img src="<?php echo SITE_URL; ?>images/gall/zima/6min.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  zima">
                                <div class="gallery_item">
                                    <a href="<?php echo SITE_URL; ?>images/gall/zima/7.jpg" class="gallery-popup mfp-image" >
                                        <img src="<?php echo SITE_URL; ?>images/gall/zima/7min.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  zima">
                                <div class="gallery_item">
                                    <a href="<?php echo SITE_URL; ?>images/gall/zima/8.jpg" class="gallery-popup mfp-image" >
                                        <img src="<?php echo SITE_URL; ?>images/gall/zima/8min.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  zima">
                                <div class="gallery_item">
                                    <a href="<?php echo SITE_URL; ?>images/gall/zima/9.jpg" class="gallery-popup mfp-image" >
                                        <img src="<?php echo SITE_URL; ?>images/gall/zima/9min.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  zima">
                                <div class="gallery_item">
                                    <a href="<?php echo SITE_URL; ?>images/gall/zima/10.jpg" class="gallery-popup mfp-image" >
                                        <img src="<?php echo SITE_URL; ?>images/gall/zima/10min.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  zima">
                                <div class="gallery_item">
                                    <a href="<?php echo SITE_URL; ?>images/gall/zima/11.jpg" class="gallery-popup mfp-image" >
                                        <img src="<?php echo SITE_URL; ?>images/gall/zima/11min.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                           
                                <!-- ITEM -->
                                <div class="item-isotope  lito">
                                    <div class="gallery_item">
                                        <a href="<?php echo SITE_URL; ?>images/galereya/lito/3.jpg" class="mfp-image" title="">
                                            <img src="<?php echo SITE_URL; ?>images/galereya/lito/3min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope  lito">
                                    <div class="gallery_item">
                                        <a href="<?php echo SITE_URL; ?>images/galereya/lito/4.jpg" class="mfp-image" title="">
                                            <img src="<?php echo SITE_URL; ?>images/galereya/lito/4min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope  lito">
                                    <div class="gallery_item">
                                        <a href="<?php echo SITE_URL; ?>images/galereya/lito/5.jpg" class="mfp-image" title="">
                                            <img src="<?php echo SITE_URL; ?>images/galereya/lito/5min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope  lito">
                                    <div class="gallery_item">
                                        <a href="<?php echo SITE_URL; ?>images/galereya/lito/6.jpg" class="mfp-image" title="">
                                            <img src="<?php echo SITE_URL; ?>images/galereya/lito/6min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope  lito">
                                    <div class="gallery_item">
                                        <a href="<?php echo SITE_URL; ?>images/galereya/lito/7.jpg" class="mfp-image" title="">
                                            <img src="<?php echo SITE_URL; ?>images/galereya/lito/7min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope  lito">
                                    <div class="gallery_item">
                                        <a href="<?php echo SITE_URL; ?>images/galereya/lito/8.jpg" class="mfp-image" title="">
                                            <img src="<?php echo SITE_URL; ?>images/galereya/lito/8min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope  lito">
                                    <div class="gallery_item">
                                        <a href="<?php echo SITE_URL; ?>images/galereya/lito/20.jpg" class="mfp-image" title="">
                                            <img src="<?php echo SITE_URL; ?>images/galereya/lito/20min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope  lito">
                                    <div class="gallery_item">
                                        <a href="<?php echo SITE_URL; ?>images/galereya/lito/15.jpg" class="mfp-image" title="">
                                            <img src="<?php echo SITE_URL; ?>images/galereya/lito/15min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  lito">
                                    <div class="gallery_item">
                                        <a href="<?php echo SITE_URL; ?>images/galereya/lito/17.jpg" class="mfp-image" title="">
                                            <img src="<?php echo SITE_URL; ?>images/galereya/lito/17min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                        </div>
                    </div>

                    <div class="our-gallery text-center">
                        <a href="gallery.html" class="awe-btn awe-btn-default">Детальніша Галерея</a>
                    </div>

                </div>
                <!-- GALLERY CONTENT -->

            </div>
        </section><!-- END / GALLERY -->

 </section><!-- END / CONTACT --><!-- MAP --><section class="section-map"><h1 class="element-invisible">Map</h1>
            <div class="contact-map">
                <div id="map" data-locations="49.208524, 23.253811" data-center="49.208524, 23.253811"></div>
            </div>
        </section><!-- END / MAP -->

<?php require_once('footer.php') #Підключаєм підвал шаблону?>