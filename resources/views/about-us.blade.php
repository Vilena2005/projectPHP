<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etude</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/about-us.css">
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

    <div class="bg-img-about">
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
                        <h1 class="title">Наша Команда</h1>
                        <p class="title-text">
                            опытных профессионалов с удовольствием поможет вам
                            создать интерьер вашей мечты. Мы глубоко погружаемся
                            в ваши предпочтения, образ жизни и внутренний мир,
                            чтобы разработать для вас уникальный дизайн-проект,
                            который станет воплощением вашей индивидуальности
                        </p>
                    </div>
                </section>
                <section class="founder">
                    <div class="founder-items">
                        <div class="founder-text">
                            <h2 class="founder-title">ОСНОВАТЕЛЬ</h2>
                            <h2 class="founder-name">Михаил Стрежевой</h2>
                            <p class="founder-story">Когда-то давно я мечтал о
                                создании своего собственного бренда, который бы
                                помогал людям преображать их дома и офисы, делая
                                их уютными, комфортными и в то же время стильными.
                                Моя страсть к дизайну интерьера зародилась еще в
                                детстве, когда я часами рассматривал журналы с
                                креативными решениями и представлял, как обустроил
                                бы то или иное пространство.</p>
                            <p class="founder-story">В основе нашей философии -
                                стремление к гармонии, функциональности и красоте.
                                Мы верим, что грамотный дизайн - это не просто
                                набор мебели и декора, а целостная концепция, которая
                                преображает пространство и меняет жизнь к лучшему.
                                Именно поэтому мы относимся к каждому проекту с особой
                                тщательностью, вкладывая в него частичку своей души.</p>
                        </div>
                        <img src="../img/founder.jpg" alt="founder-pic" class="founder-pic">
                    </div>
                </section>
            </div>
            <div class="philosophy-bg">
                <div class="container">
                    <section class="philosophy">
                        <div class="philosophy-container">
                            <h2 class="philosophy-title">ФИЛОСОФИЯ НАШЕЙ КОМПАНИИ</h2>
                            <div class="philosophy-columns">
                                <div class="philosophy-column">
                                    <img src="../img/sofa-icon.svg" alt="icon-sofa" class="philosophy-img">
                                    <p class="philosophy-column-title">Гармония пространства</p>
                                    <p class="philosophy-text">Мы верим, что интерьер должен находиться
                                        в балансе с окружающей средой. Используя натуральные материалы,
                                        плавные линии и продуманные цветовые решения, мы создаем
                                        пространства, способствующие физическому и эмоциональному
                                        благополучию.</p>
                                </div>
                                <div class="philosophy-column">
                                    <img src="../img/light-icon.svg" alt="icon-light" class="philosophy-img">
                                    <p class="philosophy-column-title">Функциональность и эстетика.</p>
                                    <p class="philosophy-text"> Мы верим, что идеальный интерьер должен
                                        быть не только визуально привлекательным, но и максимально
                                        функциональным. Наши дизайнерские решения сочетают в себе
                                        практичность и элегантность, создавая пространства, удобные
                                        для повседневной жизни.</p>
                                </div>
                                <div class="philosophy-column">
                                    <img src="../img/vase-icon.svg" alt="icon-vase" class="philosophy-img">
                                    <p class="philosophy-column-title">Вдохновение и творчество</p>
                                    <p class="philosophy-text">Черпая вдохновение из красоты и естественных
                                        форм окружающего мира, мы разрабатываем интерьеры, которые позволяют
                                        почувствовать единение с природой. Органические материалы, природные
                                        оттенки и элементы наполняют ваш дом теплом и умиротворением.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="container">
                <section class="employee">
                    <div class="employee-container">
                        <h2 class="employee-title">НАШИ СОТРУДНИКИ</h2>
                        <img src="../img/Team.png" alt="team-img" class="employee-img">

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
