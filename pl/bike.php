<?php 
/**
 * @Site: Ossonya.com
 * @Copyright © 2016 Eldaeron
 * @Can be configure by code
 *
 */

$PAGE_TITLE = 'Велопрогулянки - «Осоння» Карпати'; // Титул сайта
$PAGE_URL = 'bike.php'; // УРЛ-сайта
require_once('header.php') #Підключаєм шапку шаблону 
?>

        <!-- SUB BANNER --><section class="section-sub-banner bg-9"><div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Велопрогулянки</h2>
                        
                    </div>
                </div>

            </div>

        </section><!-- END / SUB BANNER -->
<!-- ABOUT --><section class="section-about"><div class="container">

                <div class="about">

                    <!-- ITEM -->
                    <div class="about-item">

                        <div class="img owl-single">
                            <img src="<?php echo SITE_URL; ?>images/gallery/velo/1.jpg" alt="">
                            <img src="<?php echo SITE_URL; ?>images/gallery/velo/2.jpg" alt="">
                            <img src="<?php echo SITE_URL; ?>images/gallery/velo/3.jpg" alt="">
                            <img src="<?php echo SITE_URL; ?>images/gallery/velo/4.jpg" alt="">
                        </div>

                    <div class="text">
                            <div class="desc">
                                <p>Велонагрузки покращують вентиляцію легенів, нормалізують роботу серця і благотворно впливають на нервову систему, психіку, емоційний тонус.<br>

Як вид аеробного тренування їзда на велосипеді має переваги перед бігом, тому що істотно знижує навантаження на кістки, суглоби, м'язи ніг і серце. <br>Їзда на велосипеді допомагає стати витривалим, терплячим, швидким, енергійним, розвиває здатність орієнтуватися в просторі, утримувати рівновагу, проявляти спритність і винахідливість.</p>
                            </div>
                        </div>

                    </div>
                    <!-- END / ITEM -->

                 
                </div>

            </div>
        </section><!-- END / ABOUT -->

<?php require_once('footer.php') #Підключаєм підвал шаблону?>