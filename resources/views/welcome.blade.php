<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Global Parts</title>
        <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/main-mini.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/contactsmini.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="{{ URL::asset('images/logo-wh.png') }}">
    </head>
    <body>
        <div id="main-div">
        <div id="main-image-container">
            <div id="main_image_container_shadow"></div>
            <header id="main_header">
                <div id="logo-container">
                    <img src="/images/logo-wh.png" alt="" width="70" id="logo_img">
                </div>
                <div id="main_header_container">
                    <div id="block1">
                        <div id="block1-name">GLOBAL PARTS</div>
                        <div id="block1-description">запчасти на все легковые авто</div>
                    </div>
                    <div id="block2">
                        <div id="block2-phone">
                            +7 (708) 717 25 49
                        </div>
                        <div id="block2-mail">
                            global_parts_kz@bk.ru
                        </div>
                    </div>
                    <div id="block3">
                        <div id="block3-time">
                            с <span style="color:#f4ae1c">10:00</span> до <span style="color:#f4ae1c">19:00</span> без выходных   
                        </div>
                        <div id="block3-desc">
                            оперативный приём заявок
                        </div>
                        <div id="header-gis">
                            <img src="images/gis32.png" alt="" class="gis-bounce">
                            <a style="" target="_blank" href="https://2gis.kz/astana/geo/70000001080248919">пр. Богенбай Батыра 56п</a>
                        </div>
                    </div>
                </div>
            </header>
            
            <div class="container" id="container-main">
                <div id="inner-item1" class="inner-item">
                    <div id="inner-headers-container">
                        <div id="inner-header1">
                            ЗАПАСНЫЕ <span class="yellow-letter">ЧАСТИ</span > ОТ <span class="yellow-letter">ЛУЧШИХ</span> МИРОВЫХ ПРОИЗВОДИТЕЛЕЙ
                        </div>
                        <div id="inner-header2">
                            ДЛЯ <span class="white-letter">ВАШЕГО</span> УДОБСТВА МЫ НАХОДИМСЯ НА ТЕРРИТОРИИ <span class="white-letter">АВТОСЕРВИСА!</span>
                        </div>
                    </div>
                </div>
                <div id="inner-item2" class="inner-item"></div>
                <div id="inner-item3" class="inner-item"></div>
                <div id="inner-item4" class="inner-item">
                    <div id="card">
                        <div id="card-item1">
                            ПОЛУЧИТЬ ИНФОРМАЦИЮ О НАЛИЧИИ И СТОИМОСТИ В ТЕЧЕНИЕ 15 МИНУТ
                        </div>
                        <div id="card-item2">
                            <button class="btn btn-lg btn-warning" id="card-item2-btn">
                                <a href="https://wa.me/77087172549?text=Здравствуйте,%20пишу%20вам%20с%20сайта." style="text-decoration: none; color: #111;" target="_blank">ПЕРЕЙТИ В WHATSAPP</a>
                            </button>
                        </div>
                        <div id="card-item3">
                            Подберём и предложим лучший вариант из возможных!
                        </div>
                    </div>
                </div>
                <div id="inner-item5" class="inner-item"></div>
                <div id="inner-item6" class="inner-item"></div>
                
                <div id="inner-item7" class="inner-item">
                    <div id="inner-item-smal-header">
                        ГАРАНТИЯ НА <span style="color: #fff;">ВСЮ</span> ПРОДУКЦИЮ 1 ГОД!
                    </div>
                </div>
            </div>
        </div>
        <div id="phone-buttons-container">
            <div id="phone-button">
                <span class="wave-phone"></span>
                <a href="tel:+77087172549" style="z-index:5;">
                    <img src="/images/phone48.png" alt="" class="phone-button hithere">
                </a>
            </div>
            <div id="wa-button">
                <span class="wave-wa"></span>
                <a href="https://wa.me/77087172549?text=Здравствуйте,%20пишу%20вам%20с%20сайта." style="z-index:5;">
                    <img src="/images/wa-64.png" alt="" class="whatsapp-button hithere">
                </a>
            </div>
        </div>
    </div>

    <!-- -->
    <div id="offer-header" class="container">
        <div id="pseudo-border"></div>
        <h1>ЧТО МЫ ПРЕДЛАГАЕМ</h1>
    </div>
    <div id="offer" class="container">
        <div class="offer-card">
            <div class="offer-card-img-container">
                <img src="/images/engine2.jpg" class="offer-card-img">
            </div>
            <div class="offer-card-info">
                <div class="offer-card-header">
                    КОМПЛЕКТУЮЩИЕ ДЛЯ ДВС
                </div>
                <div class="offer-card-desc">
                    <ul class="card-desc-ul">
                        <li>Все для капремонта</li>
                        <li>Комплект ГРМ</li>
                        <li>Навесное оборудование</li>
                        <li>Фильтры</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offer-card">
            <div class="offer-card-img-container">
                <img src="/images/hodovka2.jpg" class="offer-card-img">
            </div>
            <div class="offer-card-info">
                <div class="offer-card-header">
                    ХОДОВАЯ ЧАСТЬ
                </div>
                <div class="offer-card-desc">
                    <ul class="card-desc-ul">
                        <li>Амортизаторы</li>
                        <li>Рычаги</li>
                        <li>Сайлентблоки</li>
                        <li>Шаровые опоры</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offer-card">
            <div class="offer-card-img-container">
                <img src="/images/kuzov.jpg" class="offer-card-img">
            </div>
            <div class="offer-card-info">
                <div class="offer-card-header">
                    КУЗОВНЫЕ ДЕТАЛИ
                </div>
                <div class="offer-card-desc">
                    <ul class="card-desc-ul">
                        <li>Бампера</li>
                        <li>Двери</li>
                        <li>Крылья</li>
                        <li>Капот</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offer-card">
            <div class="offer-card-img-container">
                <img src="/images/breakings.jpg" class="offer-card-img">
            </div>
            <div class="offer-card-info">
                <div class="offer-card-header">
                    ТОРМОЗНАЯ СИСТЕМА
                </div>
                <div class="offer-card-desc">
                    <ul class="card-desc-ul">
                        <li>Тормозные диски</li>
                        <li>Колодки</li>
                        <li>Суппорт</li>
                        <li>Шланги</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offer-card">
            <div class="offer-card-img-container">
                <img src="/images/oils.jpg" class="offer-card-img">
            </div>
            <div class="offer-card-info">
                <div class="offer-card-header">
                    МАСЛА И ТЕХ.ЖИДКОСТИ
                </div>
                <div class="offer-card-desc">
                    <ul class="card-desc-ul">
                        <li>Масло в двигатель</li>
                        <li>Антифриз</li>
                        <li>Масло в АКПП/МКПП/Вариатор</li>
                        <li>Тормозная жидкость</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="container">
            <div id="footer-header">
                <div id="footer-header-contact">
                    КОНТАКТЫ
                </div>
                <div id="footer-header-desc">
                    <div>У Вас остались вопросы?</div>
                    <div>Свяжитесь с нами любым удобным способом!</div>
                </div>
            </div>
            <div id="footer-parts">
                <div class="footer-part">
                    <div class="footer-part-header">
                        Контактный телефон:
                    </div>
                    <div class="footer-part-content">
                        <img src="images/phone32yellow.png" alt="">
                        +7 708 717 25 49
                    </div>
                </div>
                <div class="footer-part">
                    <div class="footer-part-header">
                        Электронная почта:
                    </div>
                    <div class="footer-part-content">
                        <img src="images/mail32.png" alt="">
                        +7 708 717 25 49
                    </div>
                </div>
                <div class="footer-part">
                    <div class="footer-part-header">
                        Наш адрес:
                    </div>
                    <div class="footer-part-content">
                        <img src="images/gis32.png" alt="">
                        <a style="text-decoration: none; color:#fff;" href="https://2gis.kz/astana/geo/70000001080248919">пр. Богенбай Батыра 56п</a>
                    </div>
                </div>
                <div class="footer-part">
                    <div class="footer-part-header">
                        График работы:
                    </div>
                    <div class="footer-part-content">
                        <img src="images/clock32.png" alt="">
                        с 10:00 до 19:00
                    </div>
                </div>
            </div>
            <div id="footer-logo">
                <img src="images/logo-wh.png" width="100">
            </div>
        </div>
    </footer>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
