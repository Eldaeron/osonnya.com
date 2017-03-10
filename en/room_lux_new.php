<?php 
/**
 * @Site: Ossonya.com
 * @Copyright © 2016 Eldaeron
 * @Can be configure by code
 *
 */

$PAGE_TITLE = 'Люкс в новому корпусі - Готель - «Осоння» Карпати'; // Титул сайта
$PAGE_URL = 'room_lux_new.php'; // УРЛ-сайта
require_once('header.php') #Підключаєм шапку шаблону 
?>

<!-- SUB BANNER --><section class="section-sub-banner bg-9"><div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Люкс в новому корпусі</h2>
                        <p>Один номер (117)</p>
                    </div>
                </div>

            </div>

        </section><!-- END / SUB BANNER --><!-- ROOM DETAIL --><section class="section-room-detail bg-white"><div class="container">
                
                <!-- DETAIL -->
                <div class="room-detail">
                    <div class="row">
                        <div class="col-lg-9">
                            
                            <!-- LAGER IMGAE -->
                             <div class="room-detail_img">
                                <div class="room_img-item">
                                    <img src="<?php echo SITE_URL; ?>images/gallery/newkorpus/1.jpg" alt="">
                                </div>
                                <div class="room_img-item">
                                    <img src="<?php echo SITE_URL; ?>images/gallery/newkorpus/2.jpg" alt="">
                                </div>
                                
                            </div>
                            <!-- END / LAGER IMGAE -->
                            
                            <!-- THUMBNAIL IMAGE -->
                            <div class="room-detail_thumbs">
                                 <a href="#"><img src="<?php echo SITE_URL; ?>images/gallery/newkorpus/1min.jpg" alt=""></a>
                                <a href="#"><img src="<?php echo SITE_URL; ?>images/gallery/newkorpus/2min.jpg" alt=""></a>
                            </div>
                            <!-- END / THUMBNAIL IMAGE -->

                        </div>

                        <div class="col-lg-3">

                            <!-- FORM BOOK -->
                            <div class="room-detail_book">

                                <div class="room-detail_total">
                                    <img src="<?php echo SITE_URL; ?>images/icon-logo1.png" alt="" class="icon-logo"><h6>Ціна від:</h6>
                                    
                                    <p class="price">
                                        <span class="amout">1100₴</span>  /за добу
                                    </p>
                                </div>
                                <form id="ajax-form-search-room" action="room_step_2.php" method="post">
                                <div class="room-detail_form">
                                    <label>Заїзд</label>
                                        <input name="arrive" type="text" class="awe-calendar from" placeholder="Дата Заїзду">
                                    <label>Виїзд</label>
                                        <input name="departure" type="text" class="awe-calendar to" placeholder="Дата Виїзду">
                                    <label>Дорослих</label>
                                        <select name="adults" class="awe-select">
                                             <option selected>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    <label>Ім’я</label>
                                        <input type="text" name="name" placeholder="Ім’я" />
                                    <label>Номер телефону</label>
                                        <input type="text" id="phone" name="phone" placeholder="Номер телефону" />
                                    <label>e-Mail адрес</label>
                                        <input type="text" name="email" placeholder="e-Mail адрес" />
                                    <button class="awe-btn awe-btn-13">Забронювати</button>
                                </div>
                                </form>
                            </div>
                            <!-- END / FORM BOOK -->

                        </div>
                    </div>
                </div>
                <!-- END / DETAIL -->
                
                <!-- TAB -->
                <div class="room-detail_tab">
                    
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="room-detail_tab-header">
<li  class="active"><a href="#overview" data-toggle="tab">Описання</a></li>
                                <li><a href="#amenities" data-toggle="tab">Зручності</a></li>
                                <li><a href="#rates" data-toggle="tab">Тарифи</a></li>
                                
                            </ul>
</div>
                                        
                        <div class="col-md-9">
                            <div class="room-detail_tab-content tab-content">
                                
                                <!-- OVERVIEW -->
                                <div class="tab-pane fade active in" id="overview">

                                    <div class="room-detail_overview">
                                        <h5 class="text-uppercase
                                        ">Люкс в новому корпусі ( 1 номер 117 )</h5>
                                        <p>Початок періоду - перша дата заїзду, кінець періоду - остання дата виїзду.<br>

Час заїзду - 14:00, час виїзду - 12:00<br>

В усіх номерах та будинках є можливість розміщення на додаткових місцях. Детальну інформацію уточняйте в адміністратора.<br>

Діти до 6 років проживають з батьками безкоштовно без надання додаткового місця.</p>

                                        <div class="row">
                                            <div class="col-xs-6 col-md-4">
                                                <h6>Сервіс включений у вартість:</h6>
                                                <ul>
<li>Сніданок</li>
                                                    <li>Wi-Fi</li>
                                                    <li>Дитячий майданчик, батут</li>
                                                    <li>Відвідування пляжу та користування шезлонгами (в літній період)</li>
                                                     <li>Риболовля (улов оплачується додатково)</li>
                                                      <li>Паркінг під охороною</li>
                                                       <li>Користування альтанками та мангалом</li>
                                                       <li>ПДВ і туристичний збір</li>
                                                </ul>
</div>
                                            <div class="col-xs-6 col-md-4">
                                                <h6>Додатковий сервіс</h6>
                                                <ul>
                                                    <li>Виклик таксі</li>
                                                    <li>Прибирання та заміна рушників - (дин раз на три доби, або за вимогою)</li>
                                                </ul>
</div>
                                        </div>
                                        
                                    </div>

                                </div>
                                <!-- END / OVERVIEW -->

                                <!-- AMENITIES -->
                                <div class="tab-pane fade" id="amenities">
                                    
                                    <div class="room-detail_amenities">
                                        <p>Комфортні й по-домашньому затишні будиночки оснащені всім необхідним для приємного відпочинку.</p>
                                        
                                        <div class="row">
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>Міні-кухня</h6>
                                                <ul>
                                                    <li>Чайник</li>
                                                    <li>Мікрохвильова піч</li>
                                                    <li>Холодильник</li>
                                                    <li>Посуд</li>
                                                </ul>
</div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>Санвузол</h6>
                                                <ul>
                                                    <li>Душова кабіна</li>
                                                    <li>Біде</li>
                                                    <li>Умивальник</li>
                                                    <li>Фен</li>
                                                    <li>Рушникова сушарка</li>
                                                </ul>
</div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>Спальня</h6>
                                                <ul>
                                                    <li>Двомісне ліжко</li>
                                                    <li>Двоспальний диван</li>
                                                    <li>Дві кімнати</li>
                                                    <li>Шафа</li>
                                                    <li>Стіл</li>
                                                    <li>LED 32' телевізор</li>
                                                    <li>WiFi</li>
                                                </ul>
</div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>Балкон з гамаком</h6>
                                                
</div>
                                            
                                        </div>

                                    </div>

                                </div>
                                <!-- END / AMENITIES -->

                           
                                <!-- RATES -->
                                <div class="tab-pane fade" id="rates">

                                    <div class="room-detail_rates">
                                        <table>
<thead><tr>
<th>Сезон</th>
                                                    <th>2-місне розміщення</th>
                                                    <th>Додаткове місце - Дорослі</th>
                                                    <th>Додаткове місце - Діти від 6 до 12 років</th>
                                                    
                                                </tr></thead>
<tr>
<td>
                                                    <h6>Звичайний сезон</h6>
                                                    <ul>
                                                        <li>16.01-29.04.17</li>
                                                        <li>13.05-31.05.17</li>
                                                        <li>29.08-29.12.17</li>
                                                    </ul>
</td>
                                              
                                                <td>
                                                    <p class="price"><span class="amout">1100 грн.</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amout">150 грн.</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amout">100 грн.</span></p>
                                                </td>
                                                
                                            </tr>
<tr>
<td>
                                                    <h6>Високий сезон</h6>
                                                    <ul>
<li>01.06-28.08.17</li>
                                                        
                                                    </ul>
</td>

                                                <td>
                                                    <p class="price"><span class="amout">1200 грн.</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amout">200 грн.</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amout">150 грн.</span></p>
                                                </td>
                                               
                                            </tr>
<tr>
<td>
                                                    <h6>Святковий сезон*</h6>
                                                    <ul>
<li>30.12.16-15.01.17</li>
                                                        <li>30.04-12.05.17</li>
                                                    </ul>
</td>

                                                <td>
                                                    <p class="price"><span class="amout">1700 грн.</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amout">300 грн.</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amout">250 грн.</span></p>
                                                </td>
                                                
                                            </tr>
</table>
</div>
<br>
<p>*у Святковий сезон передбачено 100% передоплату за увесь період бронювання проживання, яка не повертається при ануляції бронювання. Оплата повинна бути здійснена на протязі 1-го робочого дня після виставлення рахунку. Мінімальний термін проживання – 5 діб.<br><br></p>
                                </div>
                                <!-- END / RATES -->

                              
                            </div>
                        </div>

                    </div>

                </div>
                <!-- END / TAB -->

               

            </div>
        </section><!-- END / SHOP DETAIL -->

<?php require_once('footer.php') #Підключаєм підвал шаблону?>