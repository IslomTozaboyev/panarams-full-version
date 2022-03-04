<?php
$page = "index";
$title = "PANARAMS Tashkent Hotel";
$relocateru = "/";
$relocateuz = "/uz";
$relocateen = "/en";

include "elements/header.php"; ?>

<main>

    <section class="introduction">
        <div class="bg-img">
            <img src="/assets/img/home__back__2.jpg" alt="panarams">
        </div>
        <div class="intro-block">
            <h1 class="home__title" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="800">С любовью и страстью к гостеприимству.</h1>
            <!-- <h4 data-aos="zoom-in" data-aos-delay="1200" data-aos-duration="700">Чувствуй себя как дома</h4> -->
            <form action="" class="booking-form d-none" id="main-form">
                <div class="input" data-aos="fade-up" data-aos-delay="1400" data-aos-duration="800">
                    <input type="text" required placeholder="Дата начала" class="datepicker" autocomplete="off">
                </div>
                <div class="input" data-aos="fade-up" data-aos-delay="1600" data-aos-duration="800">
                    <input type="text" required placeholder="Дата окончания" class="datepicker" autocomplete="off">
                </div>
                <div class="input guest" data-aos="fade-up" data-aos-delay="1800" data-aos-duration="800">
                    <input type="text" id="guest-number" required placeholder="Количество людей">
                    <div class="counter">
                        <h5>Гости</h5>
                        <span></span>
                        <div class="guests">
                            <div class="guest-list">
                                <p>Взрослые</p>
                                <div class="count">
                                    <div class="value-button decrease">-</div>
                                    <input type="number" id="number" value="0" />
                                    <div class="value-button increase">+</div>
                                </div>
                            </div>
                            <div class="guest-list">
                                <p>Дети</p>
                                <div class="count">
                                    <div class="value-button decrease2">-</div>
                                    <input type="number" id="number2" value="0" />
                                    <div class="value-button increase2">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input btn" data-aos="fade-up" data-aos-delay="2000" data-aos-duration="800">
                    <button class="form-btn" type="submit" placeholder="Забронировать">Забронировать</button>
                </div>
            </form>
        </div>
    </section>

    <!-- О нас SECTION -->  
    <section class="about">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                    <div class="bg-img"></div>
               </div>
               <div class="swiper-slide">
                    <div class="bg-img two"></div>
               </div>
               <div class="swiper-slide">
                    <div class="bg-img three"></div>
               </div>
               <div class="swiper-slide">
                    <div class="bg-img four"></div>
               </div>
               <div class="swiper-slide">
                    <div class="bg-img five"></div>
               </div>
            </div>
            <div data-aos="fade-left" data-aos-delay="1400" data-aos-duration="500" class="swiper-button-next"></div>
            <div data-aos="fade-right" data-aos-delay="1400" data-aos-duration="500" class="swiper-button-prev"></div>
        </div>

        <div class="about-block">
            <a href="https://www.youtube.com/watch?v=US7bGTUkBfg" class="img-group" data-fancybox>
                <img src="/assets/img/about-1.png" data-aos="zoom-in" data-aos-delay="800" data-aos-duration="800" alt="panarams" class="big">
            </a>

            <div class="info">

            <div class="swiper mySwiper">
               <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h2 class="info__title" data-aos="fade-right" data-aos-delay="1200" data-aos-duration="500">О нас</h2>
                        <h3 data-aos="fade-down" data-aos-delay="1400" data-aos-duration="500">1.Наслаждайся неожиданным будущим</h3>
                        <p data-aos="fade-right" data-aos-delay="1600" data-aos-duration="500">
                            PANARAMS Hotel Tashkent, расположенный в самом динамичном городе Центральной Азии приятно удивит вас своим современным дизайном, рестораном на высоте птичьего полета и множеством дополнительных развлечений. Это уникальный комплекс предоставляющий все условия для комфортного отдыха, успешных бизнес встреч и переговоров, семейного досуга, а также оздоровительных процедур. И всё это на самом высоком уровне!
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h3>Услуги</h3>
                        <p data-aos="fade-right" data-aos-delay="1600" data-aos-duration="500">
                        Упрощённый доступ, Ресторан, Бар, Бассейн, Бесплатный Wi-fi, Фитнес центр, Обслуживание в номерах, Мини бар, Завтрак, шведский стол, Услуги прачечной, Многоязычный персонал, Конференц-зал
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <h3>Правила размещения</h3>
                        <p data-aos="fade-right" data-aos-delay="1600" data-aos-duration="500">Стандартный заезд 14:00 Стандартный выезд 12:00 Условия отмена бронирования рассматриваются индивидуально в зависимости от выбранного тарифа Условия раннего заезд и позднего выезда рассматриваются в индивидуальном порядке, обратитесь в отель Охраняемая парковка, для проживающих бесплатная Курение, отель предоставляет номера для курящих К оплате принимаются карты: VISA, Master card</p>
                    </div>
                    <div class="swiper-slide ml-2">
                        <h3>Чем можно заняться</h3>
                        <button class="swiper__btn">
                            <a href="/location.php">ПОДРОБНЕЕ</a>
                        </button>
                    </div>
                </div>
               <!-- <div data-aos="fade-down" data-aos-delay="1400" data-aos-duration="500" class="swiper-pagination"></div> -->
              
            </div>
        </div>
    </section>

    <!-- Наши комнаты  SECTION -->
    <section class="room-types">
        <h2>Номера</h2>
        <p>Наслаждайтесь роскошным декором номеров и бесплатным Wi-Fi в современном отеле Ташкента.</p>
        <div class="rooms-carousel owl-carousel">
            <a href="/comnata-standart-teras.php" class="item">
                <div class="img">
                    <img src="/assets/img/room-type-1.png" alt="room">
                </div>
                <div class="info">
                    <h3>Стандартная комната с террасой</h3>
                    <h4>25 м² | 2 взрослых</h4>
                    <div class="icons">
                        <img src="/assets/icons/icon-1.svg" alt="terassoy">
                        <img src="/assets/icons/icon-2.svg" alt="terassoy">
                        <img src="/assets/icons/icon-3.svg" alt="terassoy">
                        <img src="/assets/icons/icon-4.svg" alt="terassoy">
                        <img src="/assets/icons/icon-5.svg" alt="terassoy">
                        <img src="/assets/icons/icon-6.svg" alt="terassoy">
                    </div>
                </div>
            </a>
            <a href="/comnata-standart.php" class="item">
                <div class="img">
                    <img src="/assets/img/room-type-2.png" alt="room">
                </div>
                <div class="info">
                    <h3>Стандартная комната</h3>
                    <h4>25 м² | 2 взрослых</h4>
                    <div class="icons">
                        <img src="/assets/icons/icon-1.svg" alt="comnata">
                        <img src="/assets/icons/icon-2.svg" alt="comnata">
                        <img src="/assets/icons/icon-3.svg" alt="comnata">
                        <img src="/assets/icons/icon-4.svg" alt="comnata">
                        <img src="/assets/icons/icon-5.svg" alt="comnata">
                        <img src="/assets/icons/icon-6.svg" alt="comnata">
                        <img src="/assets/icons/icon-7.svg" alt="comnata">
                    </div>
                </div>
            </a>
            <a href="/Improved.php" class="item">
                <div class="img">
                    <img src="/assets/img/room-type-3.png" alt="room">
                </div>
                <div class="info">
                    <h3>Улучшенный</h3>
                    <h4>25 м² | 2 взрослых</h4>
                    <div class="icons">
                        <img src="/assets/icons/icon-1.svg" alt="improved">
                        <img src="/assets/icons/icon-2.svg" alt="improved">
                        <img src="/assets/icons/icon-3.svg" alt="improved">
                        <img src="/assets/icons/icon-4.svg" alt="improved">
                        <img src="/assets/icons/icon-5.svg" alt="improved">
                        <img src="/assets/icons/icon-6.svg" alt="improved">
                        <img src="/assets/icons/icon-7.svg" alt="improved">
                        <img src="/assets/icons/icon-9.svg" alt="improved">
                    </div>
                </div>
            </a>
            <a href="/study.php" class="item">
                <div class="img">
                    <img src="/assets/img/room-type-3.png" alt="room">
                </div>
                <div class="info">
                    <h3>Студия</h3>
                    <h4>48 м² | 4 взрослых</h4>
                    <div class="icons">
                        <img src="/assets/icons/icon-1.svg" alt="study">
                        <img src="/assets/icons/icon-2.svg" alt="study">
                        <img src="/assets/icons/icon-3.svg" alt="study">
                        <img src="/assets/icons/icon-4.svg" alt="study">
                        <img src="/assets/icons/icon-5.svg" alt="study">
                        <img src="/assets/icons/icon-6.svg" alt="study">
                        <img src="/assets/icons/icon-7.svg" alt="study">
                        <img src="/assets/icons/icon-9.svg" alt="study">
                    </div>
                </div>
            </a>
            <a href="/study-veranda.php" class="item">
                <div class="img">
                    <img src="/assets/img/room-type-3.png" alt="room">
                </div>
                <div class="info">
                    <h3>Студия с верандой</h3>
                    <h4>48 м² | 4 взрослых</h4>
                    <div class="icons">
                        <img src="/assets/icons/icon-1.svg" alt="study">
                        <img src="/assets/icons/icon-2.svg" alt="study">
                        <img src="/assets/icons/icon-3.svg" alt="study">
                        <img src="/assets/icons/icon-4.svg" alt="study">
                        <img src="/assets/icons/icon-5.svg" alt="study">
                        <img src="/assets/icons/icon-6.svg" alt="study">
                        <img src="/assets/icons/icon-7.svg" alt="study">
                        <img src="/assets/icons/icon-9.svg" alt="study">
                    </div>
                </div>
            </a>
            <a href="/luks.php" class="item">
                <div class="img">
                    <img src="/assets/img/room-type-3.png" alt="room">
                </div>
                <div class="info">
                    <h3>Люкс</h3>
                    <h4>48 м² | 4 взрослых</h4>
                    <div class="icons">
                        <img src="/assets/icons/icon-1.svg" alt="luks">
                        <img src="/assets/icons/icon-2.svg" alt="luks">
                        <img src="/assets/icons/icon-3.svg" alt="luks">
                        <img src="/assets/icons/icon-4.svg" alt="luks">
                        <img src="/assets/icons/icon-5.svg" alt="luks">
                        <img src="/assets/icons/icon-6.svg" alt="luks">
                        <img src="/assets/icons/icon-7.svg" alt="luks">
                        <img src="/assets/icons/icon-9.svg" alt="luks">
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- meetings Section -->
    <section class="meetings">
        <div class="bg-img">
            <!-- <img src="/assets/img/meeting-full.png" alt="panarams"> -->
        </div>
        <div class="meetings-block">
            <div class="advantages">
                <div class="advantage" data-aos="fade-up" data-aos-delay="1200" data-aos-duration="800">
                    <img src="/assets/icons/advantage-1.svg" alt="panarams">
                    <h5>Гарантия лучшей онлайн цены </h5>
                    <p>Вы нашли дешевле? Мы предложим такую же цену и предоставим дополнительную 25% скидку на наши великолепные завтраки.</p>
                </div>
                <div class="advantage center" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="800">
                    <img src="/assets/icons/advantage-2.svg" alt="panarams">
                    <h5>Участники программы получают больше</h5>
                    <p>Воспользуйтесь эксклюзивными преимуществами для участников: бесплатное повышение категории номера и многое другое.</p>
                </div>
                <div class="advantage" data-aos="fade-up" data-aos-delay="1200" data-aos-duration="800">
                    <img src="/assets/icons/advantage-3.svg" alt="panarams">
                    <h5>С приложением удобнее!</h5>
                    <p>Скачайте приложение Panarams Hotel и воспользуйтесь скидками и акциями партнёров программы по всему Узбекистану и не только..</p>
                </div>
            </div>
            <div class="meeting-info">
                <!-- <h2 data-aos="fade-up" data-aos-delay="1400" data-aos-duration="800">Business Events</h2> -->
                <h3 data-aos="fade-up" data-aos-delay="1600" data-aos-duration="800">Спланируйте любые деловые мероприятия </h3>
                <p data-aos="fade-up" data-aos-delay="1800" data-aos-duration="800">
                    Гостиничный комплекс предоставляет все условия для деловых встреч: конференц-зал, возможность организации мероприятий различного масштаба, ресторан с большой вместимостью для крупных делегаций, бизнес-зоны различной площади для проведения переговоров.
                </p>
                <div class="btn-default order" data-aos="fade-up" data-aos-delay="2000" data-aos-duration="800">Забронировать</div>
            </div>
        </div>
    </section>

    <!-- gallery section -->
    <section class="gallery">
        <h2 data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">Дополнительные услуги</h2>
        <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="800"> Отель заботится о комфорте всех своих посетителей, предоставляя безупречный сервис и обеспечивая все условия для маломобильных людей, а также круглосуточно следит за вашим комфортом и безопасностью на базе современных технологий. </p>
        <div class="gallery-rooms owl-carousel">
            <a href="/fitnes.php" class="item">
                <img src="/assets/img/gallery-1.png" alt="panarams">
                <div class="btn">Фитнес и СПА</div> 
            </a>
            <a href="/gallery.php" class="item">
                <img src="/assets/img/gallery-4.png" alt="panarams">
                <div class="btn">Мероприятия</div>
            </a>
            <a href="/bar-restaruan.php" class="item">
                <img src="/assets/img/gallery-3.png" alt="panarams">
                <div class="btn">Питание</div>
            </a>
            <a href="/basseyn.php" class="item">
                <img src="/assets/img/gallery-2.png" alt="panarams">
                <div class="btn">Бассейн</div>
            </a>
        </div>
    </section>

    <!-- map -->
    <section class="map" id="map" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="1000" id="contacts">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5993.846154161603!2d69.313124!3d41.310537!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x24db10c4087e6850!2zNDHCsDE4JzM3LjkiTiA2OcKwMTgnNDcuMyJF!5e0!3m2!1sru!2s!4v1640528801443!5m2!1sru!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

</main>


<?php include "elements/footer.php"; ?>
<?php include "elements/modal.php"; ?>