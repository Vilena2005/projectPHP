<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etude</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/project.css">
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

    <div class="bg-img-project">
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
                <section class="preview-project">
                    <div class="preview-items">
                        <h1 class="title">Суть Фадо</h1>
                        <p class="title-text">
                            Это большой и великолепный
                            дом в португальском стиле — дом, в котором
                            продумана каждая деталь.  Атмосфера в интерьере очень
                            спокойная. Но везде нужен баланс, поэтому мы дополнили
                            спокойный характер интерьера чем-то более самобытным,
                            нетрадиционным и резким.
                        </p>
                    </div>
                </section>
            </div>
            <div class="container">
                <section class="project-info">
                    <div class="project-info-container">
                        <div class="project-info-blocks">
                            <img src="../img/icons/place.svg" alt="place" class="project-info-icon">
                            <p class="project-info-text">Москва</p>
                        </div>
                        <div class="project-info-blocks">
                            <img src="../img/icons/size.svg" alt="size" class="project-info-icon">
                            <p class="project-info-text">845м<sup>2</sup></p>
                        </div>
                        <div class="project-info-blocks">
                            <img src="../img/icons/date.svg" alt="year" class="project-info-icon">
                            <p class="project-info-text">2022</p>
                        </div>
                        <div class="project-info-blocks">
                            <button>
                                <img src="../img/icons/like-no-active.png" alt="like">
                            </button>
                            <p class="project-info-text">Нравиться</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
                <section class="project-info-img-section">

                    <img src="../img/project/first.jpg" alt="1img" class="designStartImg">

                    <div class="designStartImg">
                        <img src="../img/project/second.jpg" alt="2img" class="project-info-img-two">
                        <img src="../img/project/third.jpg" alt="3img" class="project-info-img-two">
                    </div>

                    <img src="../img/project/last.jpg" alt="4img" class="designStartImg">

                    <div class="designStartImg">
                        <img src="../img/project/5img.jpg" alt="5img" class="project-info-img-two">
                        <img src="../img/project/6img.jpg" alt="6img" class="project-info-img-two">
                    </div>

                    <img src="../img/project/7img.jpg" alt="7img" class="designStartImg">

                </section>
                <div class="button-container">
                    <button class="btn-view-more" id="viewMore">ПОКАЗАТЬ ЕЩЕ</button>
                </div>

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
