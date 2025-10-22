<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etude</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/contact.css">
    <script defer src="../js/script.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="modal-window-wrap" id="modalWrapper">
        <div class="modal-window" id="modalWindow">
            <div class="request-wrap">
                <form method="post" class="modal-form">
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
    <div class="bg-img-contact">
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
                <section class="preview-contact">
                    <div class="preview-items">
                        <h1 class="title">Связаться С Нами</h1>
                        <p class="title-text">
                            по вопросам сотрудничества, рекламы, предложений поставщиков,
                            подрядчиков и просто если у вас есть какие-либо вопросы к нам.
                        </p>
                    </div>
                </section>
                <section class="contacts">
                    <div class="contact-block-wrap">
                        <div class="contacts-block">
                            <h3 class="contact-title">Эл. почта</h3>
                            <p class="contact-text">office@etude.design</p>
                        </div>
                        <div class="contacts-block">
                            <h3 class="contact-title">Телефон</h3>
                            <p class="contact-text">+ 7 901 578 12 98</p>
                        </div>
                    </div>
                    <div class="contact-block-wrap">
                        <div class="contacts-block">
                            <h3 class="contact-title">Адрес</h3>
                            <p class="contact-text">г. Москва ул.Остоженко д.20</p>
                        </div>
                        <div class="contacts-block">
                            <h3 class="contact-title">Соц.сети</h3>
                            <p class="contact-text">Instagram etude.official</p>
                        </div>
                    </div>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0e0cdc8b84f11b9cf6887f9cbaab06152a2f67fcf5669c04726398e24f304808&amp;width=380&amp;height=280&amp;lang=ru_RU&amp;scroll=true"></script>
                </section>
            </div>
        </main>
    </div>
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
</body>
</html>
