<?php 
/**
 * @Site: Ossonya.com
 * @Copyright © 2016 Eldaeron
 * @Can be configure by code
 *
 */

$PAGE_TITLE = 'Організація Екскурсій - «Осоння» Карпати'; // Титул сайта
$PAGE_URL = 'excursion.php'; // УРЛ-сайта
require_once('header.php') #Підключаєм шапку шаблону 
?>

        <!-- SUB BANNER --><section class="section-sub-banner bg-9"><div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>ОРГАНІЗАЦІЯ ЕКСКУРСІЙ</h2>
                        
                    </div>
                </div>

            </div>

        </section><!-- END / SUB BANNER -->
<!-- ABOUT --><section class="section-about"><div class="container">

                <div class="about">

                    <!-- ITEM -->
                    <div class="about-item">

                        <div class="img owl-single">
                            <img src="<?php echo SITE_URL; ?>images/gallery/ekskursija/1.jpg" alt="">
                            <img src="<?php echo SITE_URL; ?>images/gallery/ekskursija/2.jpg" alt="">
                            <img src="<?php echo SITE_URL; ?>images/gallery/ekskursija/3.jpg" alt="">
                            <img src="<?php echo SITE_URL; ?>images/gallery/ekskursija/4.jpg" alt="">
                            <img src="<?php echo SITE_URL; ?>images/gallery/ekskursija/5.jpg" alt="">
                        </div>

                    <div class="text">
                       
                            <div class="desc">
                              <p>Завдяки нашим партнерам, Ви маєте можливість відвідати найбільш цікаві та визначні місця карпатського регіону.</p>
                            </div>
                        </div>

                    </div>
                    <!-- END / ITEM -->

                 
                </div>

            </div>
        </section><!-- END / ABOUT -->

<?php require_once('footer.php') #Підключаєм підвал шаблону?>