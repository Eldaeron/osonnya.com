<?php 
/**
 * @Site: Ossonya.com
 * @Copyright © 2016 Eldaeron
 * @Can be configure by code
 *
 */

$PAGE_TITLE = 'Гостьова книга - «Осоння» Карпати'; // Титул сайта
$PAGE_URL = 'guestbook.php'; // УРЛ-сайта
require_once('header.php') #Підключаєм шапку шаблону 
?>

<!-- SUB BANNER --><section class="section-sub-banner bg-9"><div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>ГОСТЬОВА КНИГА</h2>
                        
                    </div>
                </div>
            </div>
        </section><!-- END / SUB BANNER --><!-- GUEST BOOK --><section class="section-guest-book"><div class="container">
                <div class="guest-book">
                    <!-- GUEST BOOK MASONRY -->
                    <div class="guest-book_content">

                        <div class="row">
                            <div class="guest-book_mansory">

                                <!-- ITEM -->
                                <div class="item-masonry col-xs-6 col-md-4">
                                    <div class="guest-book_item guest-book_item-2">
                                        <span class="icon lotus-icon-quote-left"></span>
                                        <div class="avatar">
                                            <img src="images/avatar/cl.jpg" alt="">
</div>
                                        <h2>Найкращий відпочинок в Карпатах</h2>
                                        <p>Не пам*ятаю, чи залишали ми уже відгук, тому перестра***ся і обов*язково напишу ще раз! Це дійсно місце єднання з природою. Були тут в червні 2016 року. Номери казкові, все натуральне, оригінальне і настільки комфортне! Власники продумали усе до дрібниці і забезпечили номера всім необхідним, щоб кожен гість відчував себе як вдома. Безліч розваг (зіплайн, настіьний хокей, зорбінг, катання на конях тощо), неповторна природа навколо і романтика (чого варта одна прогулянка на човні на вечірньому озері з безліччю ліхтарів навколо). А за гамак окреме дякую! Такого кайфу просто сидячи ввечері на веранді давно не відчували. Чоловік навіть заснув в ньому))))) Також, дуже приємно вразив персонал: завжди привітний і готовий допомогти)
Мріємо з чоловіком ще хоч би разочок вирватися з міста до вас на кілька днів відпочити......</p>
                                        <span><b>Христина</b></span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-masonry col-xs-6 col-md-4">
                                    <div class="guest-book_item guest-book_item-2">
                                        <span class="icon lotus-icon-quote-left"></span>
                                        <div class="avatar">
                                            <img src="images/avatar/cl.jpg" alt="">
</div>
                                        <h2>Приятный отдых в Осонне</h2>
                                        <p>Действительно,приятный отдых,взяли домик 5+2,с мужем,дочерью и зятем отдохнули от киевской суеты,в домике чисто и уютно,веранда с гамаками нас порадовала,вид на лес и речку прекрасный,воздух чистый,огромное спасибо персоналу,в ресторане вкусная еда и отзывчивые официанты.Свой день рождения провела с близкими и дорогими мне людьми,ужин праздничный заказали в домик,сервисом остались довольны,Хотелось бы приехать еще,а к пожеланиям добавить -организовать СПА процедуры .Немного огорчили строительные работы на территории,а в общем,советуем ехать в такое уютное местечко,спасибо,за незабываемый отдых.отдыхали 8 дней ,с 2 июля</p>
                                        <span><b>Алла</b></span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM: GUESTBOOK FORM -->
<div style="margin-top: 30px;" class="item-masonry col-xs-6 col-md-4">

<p>Тут ви завжди зможете залишити ваш відгук та пропозицію, і ми обов’язково розглянемо їх.</p>
                            
<form id="send-contact-form" action="send_mail_contact.php" method="post" novalidate="novalidate"> 
<div class="guest-book-form">
    <h2>Написати відгук </h2>
    

    <div class="form-field">
        <input type="text" class="field-text" name="name" placeholder="Ваше Ім'я">
    </div>
    <div class="form-field">
        <input type="text" class="field-text" name="email" placeholder="Email Адресс">
    </div>
    <div class="form-field">
        <input type="text" class="field-text" name="subject" placeholder="Тема відгуку">
    </div>
    <div class="form-field">
        <textarea class="field-textarea" name="message" placeholder="Ваш відгук"></textarea>
    </div>
    <div class="form-field">
        <button class="awe-btn awe-btn-13">Надіслати відгук</button>
    </div>
    <p style="text-align: right">«Осоння» Карпати</p>
</div>
</form>

                                </div>
                                <!-- END / ITEM: GUESTBOOK FORM -->

                                <!-- ITEM -->
                                <div class="item-masonry col-xs-6 col-md-4">
                                    <div class="guest-book_item guest-book_item-2">
                                        <span class="icon lotus-icon-quote-left"></span>
                                        <div class="avatar">
                                            <img src="images/avatar/cl.jpg" alt="">
</div>
                                        <h2>Отзыв</h2>
                                        <p>В суете и спешке бытия необходим спокойный и уединенный уголок в котором можно отстраниться от своего и вся - это Осоння. К такому выводу мы пришли отдыхая в этом чудестном и умиротворенном месте. Необыкновенная природа, замечательное обслуживание и простые положительные эмоции - вот наша х***ктеристика этого замечательного комплекса. Отдельно хотелось бы отметить официантов комплекса: Андрея, Василия и Александра- замечательные, отзывчивые и внимательные ребята. Спасибо большое за чудесный отдых. </p>
                                        <span><b>Татьяна</b></span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-masonry col-xs-6 col-md-4">
                                    <div class="guest-book_item guest-book_item-2">
                                        <span class="icon lotus-icon-quote-left"></span>
                                        <div class="avatar">
                                            <img src="images/avatar/cl.jpg" alt="">
</div>
                                        <h2>Отзыв</h2>
                                        <p>Привет всем любителям путешествий! Хочется поделиться своими впечатлениями о гостиничном комплексе "Осоння". Отдыхали с семьей в сентябре 2015 года. Замечательное место! Для себя отметили множество плюсов, которые заставят нас опять сюда вернуться. Прекрасная природа и чистый воздух! Номера в отличном состоянии - очень чисто и тепло (деревянная мебель создает особый уют). Мини кухня (холодильник, электрочайник, микроволновая печь, минимальный набор посуды и столовых приборов, дополнительно администратор может предоставить мультиварку) даёт возможность самостоятельного приготовления пищи. В санузле теплый пол, постоянно горячая вода и горячий полотенцесушитель. Летняя терраса со столиком и гамаком - это особое место, где по утрам можно насладиться чашечкой ароматного кофе и чудесным пейзажем! В светлом, просторном ресторане вкусная еда, красивая подача блюд и хорошее обслуживание! Развлечением для нас с мужем была речная рыбалка, а для ребенка батут и игры с мячом. Мы очень хорошо отдохнули, не хотелось уезжать. Будем рекомендовать всем своим знакомым!</p>
                                        <span><b>Інга</b></span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-masonry col-xs-6 col-md-4">
                                    <div class="guest-book_item guest-book_item-2">
                                        <span class="icon lotus-icon-quote-left"></span>
                                        <div class="avatar">
                                            <img src="images/avatar/cl.jpg" alt="">
</div>
                                        <h2>Как дома!</h2>
                                        <p>Отдыхали вдвоем. 5 ночей. Красота! Тихо. Вокруг горы. Спокойствие. Уютные домики. Отдельная благодарность за гостеприимность Сергею и Олегу. Благодаря им чувствовали себя как в гостях! Поэтому решили остаться на ночь в гостинице- партнере во Львове "Галактика". Также понравилось) 
Теперь знаем где будем отдыхать каждый год)</p>
                                        <span><b>Наталия</b></span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-masonry col-xs-6 col-md-4">
                                    <div class="guest-book_item guest-book_item-2">
                                        <span class="icon lotus-icon-quote-left"></span>
                                        <div class="avatar">
                                            <img src="images/avatar/cl.jpg" alt="">
</div>
                                        <h2>Відгук</h2>
                                        <p>Щиро дякую працівникам закладу за професійний рівень обслуговування. Ми з чоловіком в захваті він проведених вихідних.</p>
                                        <span><b>Вікторія</b></span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-masonry col-xs-6 col-md-4">
                                    <div class="guest-book_item guest-book_item-2">
                                        <span class="icon lotus-icon-quote-left"></span>
                                        <div class="avatar">
                                            <img src="images/avatar/cl.jpg" alt="">
</div>
                                        <h2>Відгук</h2>
                                        <p>Відпочивала з друзями в Осоння Карпати провели гарно час нзабутння атмосфера і природа.Постараємся приїхати ще.</p>
                                        <span><b>Настя</b></span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                               

                            </div>
                        </div>



          




</div>
                    <!-- END / GUEST BOOK MASONRY -->
                    
                    <!-- GALLERY --><section class="section_page-gallery"><div class="container">
                <div class="gallery">

                    <!-- FILTER -->
                    <div class="gallery-cat text-center">
                        <ul class="list-inline">
<li class="active"><a href="#" data-filter="*">Відгуки залишені на Осонні</a></li>
                            
                        </ul>
</div>
                    <!-- END / FILTER -->

                    <!-- GALLERY CONTENT -->
                    <div class="gallery-content">
                        <div class="row">
                            <div class="gallery-isotope col-4">

                                <!-- ITEM SIZE -->
                                <div class="item-size "></div>
                                <!-- END / ITEM SIZE -->

                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/1.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/1min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/2.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/2min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/3.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/3min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/4.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/4min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/5.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/5min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/6.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/6min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/7.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/7min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/8.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/8min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/9.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/9min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/10.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/10min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/11.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/11min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/12.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/12min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/13.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/13min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/14.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/14min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/15.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/15min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/16.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/16min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/17.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/17min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/18.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/18min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/19.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/19min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/20.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/20min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/21.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/21min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a href="images/gallery/vidguk/22.jpg" class="mfp-image" title="">
                                            <img src="images/gallery/vidguk/22min.jpg" alt=""></a>
                                        <h6 class="text"></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                               

                            </div>
                        </div>

                    </div>
                    <!-- GALLERY CONTENT -->

                </div>
            </div>       
        </section><!-- END / GALLERY -->
                </div>
            </div>
        </section><!-- END / GUEST BOOK -->

<?php require_once('footer.php') #Підключаєм підвал шаблону?>