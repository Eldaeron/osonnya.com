<?php 
/**
 * @Site: Ossonya.com
 * @Copyright © 2016 Eldaeron
 * @Can be configure by code
 *
 */

$PAGE_TITLE = 'Ресторан - «Осоння» Карпати'; // Титул сайта
$PAGE_URL = 'restaurant.php'; // УРЛ-сайта
require_once('header.php') #Підключаєм шапку шаблону 
?>

<!-- SUB BANNER --><section class="section-sub-banner bg-9"><div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>РЕСТОРАН «ОСОННЯ»</h2>
                    </div>
                </div>
            </div>

        </section><!-- END / SUB BANNER --><!-- ABOUT --><section class="section-about"><div class="container">

                <div class="about">

                    <!-- ITEM -->
                    <div class="about-item">

                        <div class="img owl-single">
                             <img src="<?php echo SITE_URL; ?>images/gallery/restoran/1.jpg" alt=""> 
                             <img src="<?php echo SITE_URL; ?>images/gallery/restoran/2.jpg" alt=""> 
                             <img src="<?php echo SITE_URL; ?>images/gallery/restoran/3.jpg" alt="">
                             <img src="<?php echo SITE_URL; ?>images/gallery/restoran/4.jpg" alt="">
                             <img src="<?php echo SITE_URL; ?>images/gallery/restoran/5.jpg" alt="">
                             <img src="<?php echo SITE_URL; ?>images/gallery/restoran/6.jpg" alt="">
                             <img src="<?php echo SITE_URL; ?>images/gallery/restoran/7.jpg" alt="">
                             <img src="<?php echo SITE_URL; ?>images/gallery/restoran/8.jpg" alt="">
                             <img src="<?php echo SITE_URL; ?>images/gallery/restoran/9.jpg" alt="">
</div>

                        <div class="text">
                            <h2 class="heading">Ресторан</h2>
                            <div class="desc">
                                <p>Дорогі наші гості!<br>

Запрошуємо Вас провести незабутній відпочинок в ресторані «Осоння» серед мальовничих карпатських гір та відвідати автентичні страви української місцевої кухні в авторській обробці від шеф-кухаря.<br>

Колоритне оформлення залу виконане з природних місцевих матеріалів з врахуванням сучасних тенденцій справить захоплююче враження. Великі панорамні вікна, світлий та просторий зал з каміном підійде для проведення заходу будь-якого формату. Тут Ви можете влаштувати романтичний вечір, відсвяткувати важливу подію чи зустрітись з друзями у веселій компанії, а персонал закладу про все подбає та надасть поради з організації.<br>

Насолодитись свіжим п’янким повітрям та продегустувати широкий асортимент наливок власного виробництва Ви зможете на терасі ресторану чи в альтанках біля озера.<br>

</p>
                            </div>
                        </div>

                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="about-item about-right">

                    <div class="img">
                            <img src="<?php echo SITE_URL; ?>images/gallery/restoran/10.jpg" alt="">
                        </div>

                        <div class="text">
                            
                            <div class="desc">
                                <p>Пропонуємо скористатись нагодою та скуштувати власноруч пійману форель, яку приготують на мангалі наші кухарі.<br>

Для ділових зустрічей рекомендуємо конференц-зал на другому поверсі ресторану, де є все для цього необхідне, а каво-перерви, обіди та гала-вечері перетворять наші спеціалісти у вишукане застілля.<br>

Ресторан «Осоння» - місце, яке подарує незабутні враження та спогади про Ваш відпочинок!</p>
                            </div>
                        </div>

                    </div>
                    <!-- END / ITEM -->
                    
                </div>

            </div>
        </section><!-- END / ABOUT -->

<?php require_once('footer.php') #Підключаєм підвал шаблону?>