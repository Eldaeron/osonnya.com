<?php 
/**
 * @Site: Ossonya.com
 * @Copyright © 2016 Eldaeron
 * @Can be configure by code
 *
 */

$PAGE_TITLE = 'Контакти - «Осоння» Карпоати'; // Титул сайта
$PAGE_URL = 'contact_us.php'; // УРЛ-сайта
require_once('header.php') #Підключаєм шапку шаблону 
?>

<!-- SUB BANNER --><section class="section-sub-banner bg-9"><div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>КОНТАКТИ</h2>
                       
                    </div>
                </div>

            </div>

        </section><!-- END / SUB BANNER --><!-- CONTACT --><section class="section-contact"><div class="container">
                <div class="contact">
                    <div class="row">

                        <div class="col-md-6 col-lg-5">

                            <div class="text">
                                <h2>Наші Контакти</h2>
                                
                                <ul>
<li>
<i class="icon lotus-icon-location"></i> Львівська обл. с. Ластівка вул. Івана Франка 42a</li>
                                    <li>
<i class="icon lotus-icon-phone"></i> Тел: +38 (067) 501-22-77</li>
<li>
<i class="icon lotus-icon-phone"></i> Тел: +38 (050) 506-88-87</li>
                                    <li>
<i class="icon fa fa-envelope-o"></i> info@osonnya.com</li>
                                </ul>
</div>

                            <div class="contact-location">
                                
                                <div class="collapse" id="location">
                                    <div class="location-group">
                                        
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6 col-lg-6 col-lg-offset-1">
                            <div class="contact-form">
                                <form id="send-contact-form" action="send_mail_contact.php" method="post" novalidate="novalidate"> 
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <label>Введіть своє ім’я</label>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <input type="text" class="field-text" name="name" placeholder="Ім'я">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <label>Адрес електронної пошти</label>
                                        </div>
                                    
                                        <div class="col-sm-7 col-xs-12">
                                            <input type="text" class="field-text" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <label>Тема повідомлення</label>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <input type="text" class="field-text" name="subject" placeholder="Тема повідомлення">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <label>Номер телефону для зв’язку</label>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <input type="text" class="field-text" id="phone" name="phone" placeholder="Телефон">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <label>Ваше повідомлення</label>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <textarea cols="30" rows="10" name="message" class="field-textarea" placeholder="Повідомлення"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button style="float:right" type="submit" class="awe-btn awe-btn-13">Надіслати</button>
                                        </div>
                                    </div>
                                    <div id="contact-content"></div>
                                </form>
                            </div>
                        </div>

                    </div>  
                </div>
            </div>
        </section><!-- END / CONTACT -->

        <!-- MAP --><section class="section-map"><h1 class="element-invisible">Map</h1>
            <div class="contact-map">
                <div id="map" data-locations="49.208524, 23.253811" data-center="49.208524, 23.253811" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: 360px; top: 100px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 616px; top: 100px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 616px; top: -156px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 360px; top: -156px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 360px; top: 356px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 616px; top: 356px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 104px; top: 100px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 872px; top: 100px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 104px; top: 356px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 872px; top: -156px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 872px; top: 356px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 104px; top: -156px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1128px; top: 100px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -152px; top: 100px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -152px; top: 356px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1128px; top: -156px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -152px; top: -156px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1128px; top: 356px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 360px; top: 100px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 616px; top: 100px;"><canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 616px; top: -156px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 360px; top: -156px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 360px; top: 356px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 616px; top: 356px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 104px; top: 100px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 872px; top: 100px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 104px; top: 356px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 872px; top: -156px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 872px; top: 356px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 104px; top: -156px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1128px; top: 100px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -152px; top: 100px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -152px; top: 356px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1128px; top: -156px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -152px; top: -156px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1128px; top: 356px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: 360px; top: 100px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37000!3i22448!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=129627" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 616px; top: 100px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37001!3i22448!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=89906" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 616px; top: -156px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37001!3i22447!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=53885" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 360px; top: -156px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37000!3i22447!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=93606" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 360px; top: 356px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37000!3i22449!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=34577" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 616px; top: 356px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37001!3i22449!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=125927" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 104px; top: 100px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36999!3i22448!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=36292" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 872px; top: 100px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37002!3i22448!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=50185" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 104px; top: 356px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36999!3i22449!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=72313" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 872px; top: -156px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37002!3i22447!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=14164" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 872px; top: 356px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37002!3i22449!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=86206" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 104px; top: -156px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36999!3i22447!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=271" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1128px; top: 100px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37003!3i22448!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=10464" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -152px; top: 100px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36998!3i22448!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=76013" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -152px; top: 356px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36998!3i22449!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=112034" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1128px; top: -156px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37003!3i22447!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=105514" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -152px; top: -156px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36998!3i22447!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=39992" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1128px; top: 356px; transition: opacity 200ms ease-out;"><img src="<?php echo SITE_URL; ?>https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i37003!3i22449!4i256!2m3!1e0!2sm!3i371048543!3m9!2suk-UA!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=46485" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%; opacity: 0;" class="gm-style-pbc"><p class="gm-style-pbt">Переміщуйте карту двома пальцями</p></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=49.208524,23.253811&amp;z=16&amp;t=m&amp;hl=uk-UA&amp;gl=US&amp;mapclient=apiv3" title="Натисніть, щоб переглянути цю область у Картах Google" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 525px; top: 145px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Картографічні дані</div><div style="font-size: 13px;">Дані карт ©2016 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000;"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="width: 37px; height: 37px; user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; right: 0px; top: 0px; z-index: 10001; cursor: pointer;"></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 115px; bottom: 0px; width: 128px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Картографічні дані</a><span>Дані карт ©2016 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Дані карт ©2016 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/uk-UA_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Умови використання</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; width: 28px; height: 55px; background-color: rgb(255, 255, 255);"><div title="Збільшити" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; top: 0px; background-color: rgb(230, 230, 230);"></div><div title="Зменшити" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Чоловічок для перегляду вулиць" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Чоловічок угорі карти" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Чоловічок для перегляду вулиць" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 26px; left: 0px;"><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Обернути карту на 90 градусів" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Показати карту вулиць" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 11px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 30px; font-weight: 500;">Карта</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 37px; text-align: left; display: none;"><div draggable="false" title="Показати карту вулиць із ландшафтом" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Ландшафт</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Показати зображення із супутника" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 11px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left: 0px; min-width: 50px;">Супутник</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 37px; text-align: left; display: none;"><div draggable="false" title="Показати зображення з назвами вулиць" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="<?php echo SITE_URL; ?>https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Мітки</label></div></div></div></div></div></div></div>
            </div>
        </section><!-- END / MAP -->

<?php require_once('footer.php') #Підключаєм підвал шаблону?>