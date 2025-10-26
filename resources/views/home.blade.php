@extends('template')

@section('title')
    <title>Главная страница</title>
@endsection

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/main-screen.css') }}">
@endsection

@section('content')
        <main>
            <div class="container">
                <section class="preview">
                    <div class="preview-items">
                        <h1 class="title">Ваш Дом Это<br>Гораздо Больше</h1>
                        <p class="title-text">
                            чем просто крыша над головой. Это место, где вы отдыхаете душой,
                            набираетесь сил и вдохновения. Именно поэтому так важно, чтобы
                            ваш интерьер был продуманным, функциональным и, прежде всего,
                            отражал ваш уникальный стиль и ценности.
                        </p>
                    </div>
                </section>
                <section class="we-etude">
                    <div class="we-etude-items">
                        <img src=" {{ asset('img/2_pic_main.png') }} " alt="2 pictures" class="we-etude-pic">
                        <div class="we-etude-text">
                            <h2 class="we-etude-title">МЫ ETUDE</h2>
                            <p class="we-etude-story">Студия дизайна интерьера и архитектуры, которая разрабатывает
                                и реализует частные и коммерческие проекты.</p>
                            <p class="we-etude-story">От концептуального дизайна до полной реализации, мы сопровождаем вас на каждом этапе процесса.
                                Наша команда экспертов работает слаженно, предлагая решения, учитывающие ваши пожелания,
                                бюджет и практические требования.</p>
                            <p class="we-etude-story">
                                Будь то современная минималистичная гостиная, уютная спальня в классическом стиле или инновационный
                                офисный интерьер – мы создадим для вас пространство, которое не только будет радовать глаз, но и обеспечит
                                максимальный комфорт и функциональность.</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
                <section class="numbers">
                    <div class="numbers-container">
                        <h2 class="numbers-title">ПОЧЕМУ НУЖНО ВЫБРАТЬ ИМЕННО НАС</h2>
                        <div class="numbers-items">
                            <div class="numbers-column">
                                <img src=" {{ asset('img/icon-with-you.svg') }} " alt="icon-with-you">
                                <h2 class="number-title">5</h2>
                                <p class="number-text">лет<br>на рынке</p>
                            </div>
                            <div class="numbers-column">
                                <img src="{{asset('img/icon-project.svg')}}" alt="icon-project">
                                <h2 class="number-title">80+</h2>
                                <p class="number-text">реализованных<br>проектов</p>
                            </div>
                            <div class="numbers-column">
                                <img src="{{asset('img/icon-partners.svg')}}" alt="icon-partners">
                                <h2 class="number-title">9</h2>
                                <p class="number-text">компаний<br>партнеров</p>
                            </div>
                            <div class="numbers-column">
                                <img src="{{asset('img/icon-employee.svg')}}" alt="icon-employee">
                                <h2 class="number-title">17</h2>
                                <p class="number-text">опытных<br>сотрудников</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="projects-bg">
                <div class="container">
                    <section class="our-projects">
                        <div class="projects-items">
                            <div class="projects-text-container">
                                <h2 class="projects-title">НАШИ ПРОЕКТЫ</h2>
                                <p class="projects-text">Мы реализовали более 80 коммерческих и
                                    частных проектов по всему миру, предоставляя нашим клиентам
                                    индивидуальные решения в стильном, функциональном и хорошо
                                    продуманном дизайне.</p>
                            </div>
                            <div class="projects-img-container">
                                <img src="{{asset('img/main_menu_hall.jpg')}}" alt="first-img" class="project-img">
                                <div class="projects-img-container-two">
                                    <img src="{{asset('img/main-menu-office.jpg')}}" alt="second-img" class="project-img-two">
                                    <img src="{{asset('img/main-menu-restroom.jpg')}}" alt="third-img" class="project-img-two">
                                </div>
                                <img src="{{asset('img/main_menu_kitchen.jpg')}}" alt="fourth-img" class="project-img">
                            </div>
                            <div class="button-container">
                                <a href="catalog" class="button-catalog">В КАТАЛОГ</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="container">
                <section class="how-we-work">
                    <h2 class="how-we-work-title">КАК МЫ РАБОТАЕМ?</h2>
                    <div class="work-container-all">
                        <div class="work-container">
                            <div class="work-container-title-text">
                                <p class="work-title">Дизайн</p>
                                <p class="work-text-two">Создайте свой дизайн в конструкторе
                                    или свяжитесь с нами и мы подберем для вас профессиональное
                                    решение</p>
                            </div>
                            <div class="work-container-title-text">
                                <p class="work-title">Замер</p>
                                <p class="work-text-two">Мы произведем замер площади на которой
                                    планируется ремонт</p>
                            </div>
                            <div class="work-container-title-text">
                                <p class="work-title">Разработка</p>
                                <p class="work-text-two">Мы создадим фотореалистичные картинки
                                    вашего будущего дизайна интерьера с нескольких ракурсов на
                                    основании выбранной концепции</p>
                            </div>
                            <div class="work-container-title-text">
                                <p class="work-title">Документация</p>
                                <p class="work-text-two">Подготовка необходимых документов и
                                    подписание договора</p>
                            </div>
                            <div class="work-container-title-text">
                                <p class="work-title">Реализация проекта</p>
                                <p class="work-text-two">Строительная бригада осуществляет
                                    ремонт согласно предоставленным чертежам. Наши сотрудникик
                                    внимательно следят за выполнением</p>
                            </div>
                            <div class="work-container-title-text">
                                <p class="work-title">Результат</p>
                                <p class="work-text-two">Ваш дизайн мечты в реальности!</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        @endsection
