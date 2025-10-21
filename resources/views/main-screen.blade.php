<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etude</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/main-screen.css">
    <script defer src="../js/script.js"></script>
</head>
<body>
<div class="wrapper">

    <div class="modal-window-wrap" id="modalWrapper">
        <div class="modal-window" id="modalWindow">
            <div class="request-wrap">

                <form class="modal-form">
                    <input type="text" class="modal-form-text" placeholder="Ваш город">
                    <input type="text" class="modal-form-text" placeholder="ФИО" >
                    <input type="tel" class="modal-form-text" placeholder="Телефон">
                    <input type="email" class="modal-form-text" placeholder="Эл.почта">

                    <textarea name="comment" id="modalFormComment" placeholder="Сообщение" class="modal-form-comment"></textarea>
                    <input type="file">

                    <div class="modal-button-wrap">
                        <button class="btn-submit">ОПРАВИТЬ ЗАЯВКУ</button>
                    </div>
                </form>
                <img src="../img/modal-img.png" alt="modal-img">
            </div>
        </div>
    </div>

    <div class="bg-img-main-screen">
        <header>
            <div class="container">
                <div class="header-items">
                    <a href="main-screen.blade.php" class="logo">
                        <img src="../img/Logo-Etude-white.svg" alt="Etude-logo">
                    </a>
                    <nav class="header-menu">
                        <a href="main-screen.blade.php" class="header-menu-item">Главная</a>
                        <a href="catalog.blade.php" class="header-menu-item">Каталог</a>
                        <a href="construct.blade.php" class="header-menu-item">Калькулятор</a>
                        <a href="contact.blade.php" class="header-menu-item">Контакты</a>
                        <a href="about-us.blade.php" class="header-menu-item">О нас</a>
                    </nav>
                    <div class="link-wrap">
                        <div class="request">
                            <button type="button" class="contact-form-wrap" id="openModal"></button>
                            <p>Заявка</p>
                        </div>
                        <a class="user" href="user.blade.php">
                            <button type="button" class="user-logo" id="userLog"></button>
                            <p>Профиль</p>
                        </a>
                    </div>
                </div>
            </div>


        </header>
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
                        <img src="../img/2_pic_main.png" alt="2 pictures" class="we-etude-pic">
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
                                <img src="../img/icon-with-you.svg" alt="icon-with-you">
                                <h2 class="number-title">5</h2>
                                <p class="number-text">лет<br>на рынке</p>
                            </div>
                            <div class="numbers-column">
                                <img src="../img/icon-project.svg" alt="icon-project">
                                <h2 class="number-title">80+</h2>
                                <p class="number-text">реализованных<br>проектов</p>
                            </div>
                            <div class="numbers-column">
                                <img src="../img/icon-partners.svg" alt="icon-partners">
                                <h2 class="number-title">9</h2>
                                <p class="number-text">компаний<br>партнеров</p>
                            </div>
                            <div class="numbers-column">
                                <img src="../img/icon-employee.svg" alt="icon-employee">
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
                                <img src="../img/main_menu_hall.jpg" alt="first-img" class="project-img">
                                <div class="projects-img-container-two">
                                    <img src="../img/main-menu-office.jpg" alt="second-img" class="project-img-two">
                                    <img src="../img/main-menu-restroom.jpg" alt="third-img" class="project-img-two">
                                </div>
                                <img src="../img/main_menu_kitchen.jpg" alt="fourth-img" class="project-img">
                            </div>
                            <div class="button-container">
                                <a href="catalog.blade.php" class="button-catalog">В КАТАЛОГ</a>
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
        <footer>
            <div class="footer-color">
                <div class="container">
                    <div class="footer-container">
                        <a href="main-screen.blade.php" class="logo">
                            <img src="../img/Logo-Etude-white.svg" alt="Etude-logo">
                        </a>
                        <nav class="footer-menu">
                            <a href="main-screen.blade.php" class="footer-menu-item">Главная</a>
                            <a href="catalog.blade.php" class="footer-menu-item">Каталог</a>
                            <a href="construct.blade.php" class="footer-menu-item">Калькулятор</a>
                            <a href="contact.blade.php" class="footer-menu-item">Контакты</a>
                            <a href="about-us.blade.php" class="footer-menu-item">О нас</a>
                        </nav>
                        <div class="footer-contacts">
                            <p class="footer-contacts-item">+ 7 901 578 12 98</p>
                            <p class="footer-contacts-item">office@etude.design</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>
</body>
</html>
