@extends('layouts.public')

@section('title', 'Бампербол в Харькове')
@section('description', 'Футбол в шарах(Bumper ball) в Харьокве. Стадион позитива и приятных впечатлений. Контакты: (099)405-97-22 (073)482-32-38')
@section('keywords', 'bumperball бампербол футбол Харьоков корпоратив тимбилдинг шарах день рождения надувной шар развлечения спорт активный')

@section('content')
    <!--Main-->
    <main>
        <div class="main-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <a class="order-add-button" href="#" data-toggle="modal" data-target="#add-order">Заказать игру</a>
                    </div>
                    <div class="col-sm-6">
                        <a class="order-add-button" href="#" data-toggle="modal" data-target="#add-callback">Перезвоните мне</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 text-container">
                        <p>
                            <b>Бампербол в Харькове</b> (футбол в шарах) - невероятно веселая, но абсолютно безопасная игра, одинаково подходящая, как детям, так и взрослым. Участники одеты в надувные шары, закрывающие все тело, кроме ног. Сталкиваясь друг с другом, игроки разлетаются в разные стороны, падают и кувыркаются, доставляя при этом немало удовольствия не только себе, но и зрителям. Бампербол может по праву считаться одним из самых веселых видов активного отдыха!
                        </p>
                        <p>
                            <b>Игра проводится опытными инструкторами</b>, которые ни на одну секунду не заставят Вас скучать. В перерывах между играми в бампербол, инструкторами проводится множество развлекательных конкурсов, которые Вам запомнятся ничуть не меньше, чем сама игра.
                        </p>
                        <p>
                            При всей <b>динамичности игры</b>, данный вид спорта гораздо менее опасен, чем классический футбол. Большой надувной шар, закрывающий большую часть тела, обеспечивает полную безопасность игроков. Перед началом игры всем участникам раздаются наколенники, исключающие самые незначительные шансы на получение травмы.
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="slider-bg hidden-xs">
            <div class="container">
                <div class="" style="float: left; height: 600px; width: 1370px;">
                    <div id="main-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                            @include('includes/calc')
                        </div>
                        <div class="item">
                            <img src="/img/lp_vape/slider/bunner-summer.jpg" alt="Лето, солнце и друзья - в Бампербол играть пора" />
                        </div>
                        <div class="item">
                            <img src="/img/lp_vape/slider/bunner-1.jpg" alt="" />
                        </div>
                        <div class="item">
                            <img src="/img/lp_vape/slider/slider-12.png" alt="" />
                        </div>
                        <div class="item">
                            <img src="/img/lp_vape/slider/bunner-2.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="description-product">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-container">
                        <h1 class="title-block">НЕ ЗНАЕШЬ ЧЕМ ЗАНЯТЬСЯ НА ВЫХОДНЫХ? ИГРАЙ В БАМПЕРБОЛ!</h1>

                        <p>
                            Если ты активный человек, любишь спорт или просто побегать. Если ты в душе еще ребенок и любишь подурачиться.
                            Если в тебе горит жажда к новым ощущениям и эмоциям, желание получить хороший заряд адреналина. Тогда бампербол - это то, что тебе нужно!
                        </p>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </section>

        <div class="point-block">
            <div class="container">
                <div class="header-point">
                    <div class="number wow flipInY">1.</div>
                    <div class="title wow fadeIn">ЧТО ТАКОЕ БАМПЕРБОЛ?</div>
                    <div class="descr wow fadeIn">
                        Бампербол - это очень молодая и невероятно энергичная игра. <br />
                        Игроки надевают на себя защитные шары, в которых можно толкаться, падать, катиться.
                        Цель игры забить как можно больше мячей в ворота соперника.
                        Эта игра, которая не требует абсолютно никаких особых навыков. <br />
                        Начните играть и вы уже не сможете остановиться!
                    </div>
                </div>
                <div class="inner scrollimation">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/bumperball_xbal_1.jpg" alt="Xball Bumperball Харьков">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/bumperball_xbal_2.jpg" alt="Xball Bumperball Харьков 2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="point-block">
            <div class="container">
                <div class="header-point">
                    <div class="number wow flipInY">2.</div>
                    <div class="title wow fadeIn">ЧТО ЭТО ЗА ШАРЫ ТАКИЕ?</div>
                    <div class="descr wow fadeIn">
                        Шары сделаны из высокопрочного, пластичного, прозрачного материала. <br />
                        В таких шарах любой человек, вне зависимости от физической подготовки и навыков, а главное - абсолютно безопасно, может сталкиваться с другими игроками,
                            а также совершать кувырки через голову вперед, назад и в любую сторону.
                    </div>
                </div>
                <div class="inner scrollimation">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/3.png" alt="Xball Bumperball Харьков 3">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/4.png" alt="Xball Bumperball Харьков 4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="point-block"> 
            <div class="container">
                <div class="header-point">
                    <div class="number wow flipInY">3.</div>
                    <div class="title wow fadeIn">СТОИМОСТЬ ИГРЫ</div>
                    <div class="descr wow fadeIn">
                        В стоимость входит: аренда поля, инструктор, который расскажет правила игры и технику безопасности, судья, шары для игры, а так же вода.
                        Мы найдем место для проведения мероприятия в удобном для вас районе города.
                        <div class="col-xs-12">
                            Дополнительно можно заказать <b>Фото и Видео съемку</b> - 250 грн за час
                        </div>
                    </div>
                </div>
                <br>
                <div class="inner scrollimation price-block">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <h3>Предложение "Стандарт"</h3>
                                    <p>6-12 человек</p>
                                    <br>
                                    <p><b>6 шаров</b> - 1599грн</p>
                                    <p><b>8 шаров</b> - 1699грн</p>
                                    <p><b>10 шаров</b> - 1799грн</p>
                                    <p><b>12 шаров</b> - 1899грн</p>
                                    <br>
                                    <p><b>каждый следующий час на 30% дешевле</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <h3>Предложение "X-Ball"</h3>
                                    <p>
                                        Предоставляем 6-12 шаров для вашей игры<br />
                                        Приедем к вам за 100 км от Харькова<br />
                                    </p>
                                    <br>
                                    <p><b>6 шаров</b> - 2199грн</p>
                                    <p><b>8 шаров</b> - 2299грн</p>
                                    <p><b>10 шаров</b> - 2399грн</p>
                                    <p><b>12 шаров</b> - 2499грн</p>
                                    <br>
                                    <p><b>каждый следующий час на 50% дешевле</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-6">
                        <a class="order-add-button" data-target="#add-order" data-toggle="modal" href="#">Заказать игру</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="point-block">
            <div class="container">
                <div class="header-point">
                    <div class="number wow flipInY">4.</div>
                    <div class="title wow fadeIn">КАК ИГРАТЬ В БАМПЕРБОЛ?</div>
                    <div class="descr wow fadeIn">
                        Минимальное колличество участников - 4 человека.<br />
                        Игроки делятся на команды в зависимости от количества участников.
                        Игроки каждой команды надевают шары разного цвета, чтобы различать своих и чужих и пытаются забить гол в ворота команды соперника.<br />
                        Вратарь может быть, а может и не быть. Фактически любой игрок (или несколько), оказавшийся ближе всех к своим воротам, пытается их защитить. <br />
                        В процессе игры участники постоянно сталкиваются друг с другом, разлетаясь в разные стороны, кувыркаются, стоят вверх ногами. Участвовать в такой "битве" очень весело и даже со стороны смотреть на это без смеха невозможно.<br />
                        После нескольких таймов можно проводить различные конкурсы с использованием шаров, а также катания в шарах.
                    </div>
                </div>
                {{-- <div class="inner scrollimation">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/3.png" alt="Xball Bumperball Харьков 3">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/4.png" alt="Xball Bumperball Харьков 4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="point-block">
            <div class="container">
                <div class="header-point">
                    <div class="number wow flipInY">5.</div>
                    <div class="title wow fadeIn">ОТМЕНА ЗАКАЗА</div>
                    <div class="descr wow fadeIn">
                        - Отказ более чем 14 дней - возвращается полная предоплата, за исключением комиссии банка <br />
                        - Отказ более 36 часов - возвращается предоплата, за исключением комиссии банка и стоимости арендной платы за поле.<br />
                        - Отказ в течении 36 часов до началы игры - предоплата не возвращается.
                    </div>
                </div>
                <div class="inner scrollimation">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/xball_kharkov.jpg" alt="Бампербол в Харькове. Xball">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/xball_kh_ua.jpg" alt="Bumperball Харьков">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="point-block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">   
                        <div id="fb-root"></div>
                        <div class="fb-page" data-href="https://www.facebook.com/xball.kharkov/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/xball.kharkov/" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/xball.kharkov/">Xball</a>
                            </blockquote>
                        </div>
                        <script type="text/javascript">
                            (function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.11&appId=133628170178927';
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                   </div>     
                </div>     
            </div>     
        </div>     
        {{-- <div class="point-block">
            <div class="container">
                <div class="header-point">
                    <div class="number wow flipInY">6.</div>
                    <div class="title wow fadeIn">ВЫЕЗД ЗА ЧЕРТУ ГОРОДА?</div>
                    <div class="descr wow fadeIn">
                        Вы можете так же заказать выездную игру за городом или в черте города на ваше место. Стоимость в этом случае будет меньше на 250 грн.
                    </div>
                </div>
                <div class="inner scrollimation">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/xball_kharkovc.jpg" alt="Бампербол в Харькове. Xball">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/4.png" alt="Xball Bumperball Харьков">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <section class="grid-accessories">
            <div class="row nopadding">
                <div class="col-sm-3 nopadding creative-square-box square-box-title">
                    <div class="cell-view">
                        <div class="parallax-article">
                            <div class="info">
                                <p>Бампербол для вас</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 nopadding creative-square-box">
                    <div class="background-box" style="background-image: url(/img/lp_vape/accessories/1.png);"></div>
                    <div class="cell-view">
                        <div class="parallax-article">
                            <div class="info">
                                <a href="/gallery" class="button style-8 style-2">ГАЛЕРЕЯ </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 nopadding creative-square-box">
                    <div class="background-box" style="background-image: url(/img/lp_vape/accessories/2.png);"></div>
                    <div class="cell-view">
                        <div class="parallax-article">
                            <div class="info">
                                <a href="/video" class="button style-8 style-2">ВИДЕО </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 nopadding creative-square-box">
                    <div class="background-box" style="background-image: url(/img/lp_vape/accessories/3.png);"></div>
                    <div class="cell-view">
                        <div class="parallax-article">
                            <div class="info">
                                <a href="/map" class="button style-8 style-2">КАРТА </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    --}}
    </main>
    <!--Main End-->

    <div id="bottomLine"></div>
@endsection