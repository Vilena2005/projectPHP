<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etude</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/catalog.css">
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
    <div class="bg-img-catalog">
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
                        <h1 class="title">Годы<br>Творчества</h1>
                        <p class="title-text">
                            чем просто крыша над головой. Это место, где вы отдыхаете душой,
                            набираетесь сил и вдохновения. Именно поэтому так важно, чтобы
                            ваш интерьер был продуманным, функциональным и, прежде всего,
                            отражал ваш уникальный стиль и ценности.
                        </p>
                    </div>
                </section>
            </div>
            <section class="catalog-items">
                <div class="container">

                    <form class="search-wrap">
                        <input type="search" class="search" placeholder="Поиск">
                        <button type="submit" class="search-btn"><img src="../img/icons/search-icon.png" alt="search"></button>
                    </form>

                    <div class="design-start-items">
                        <div class="design-container">
                            <a href="project.blade.php">
                                <img src="../img/projects/image31.png" alt="img1" class="design-start-img">
                            </a>
                            <img src="../img/projects/image(6).jpg" alt="img2" class="design-start-img">
                            <img src="../img/projects/image(1).jpg" alt="img3" class="design-start-img">
                            <img src="../img/projects/image22.jpg" alt="img4" class="design-start-img">
                        </div>
                    </div>
                </div>
                <div class="trend-bg">
                    <div class="container">
                        <div class="trend-container">
                            <h2 class="trend-title">ТРЕНДЫ ЭТОГО ГОДА</h2>

                            <div class="trend">
                                <button type="button" id="left"><img src="../img/arrow-left.svg" alt="arrow" class="arrow"></button>

                                <div class="slides">

                                    <div class="slide">
                                        <p class="trend-text">Тихая роскошь — это тенденция дизайна
                                            интерьера, подчеркивающая сдержанную элегантность,
                                            неподвластную времени привлекательность и высококачественные
                                            материалы.</p>
                                        <img src="../img/projects/trend-of-year-img.jpg" alt="trend" class="trend-img">
                                    </div>

                                    <div class="slide">
                                        <p class="trend-text">Фламандская драма — насыщенные цветом, фактурами,
                                            деталями интерьеры. Яркие формы на чёрном фоне. Эффект антика на
                                            явно современных предметах и обивки-картины.</p>
                                        <img src="../img/projects/trend2.jpg" alt="trend" class="trend-img">
                                    </div>

                                    <div class="slide">
                                        <p class="trend-text">Восточноевропестан — элементы и визуальные
                                            отсылки к интерьерной и архитектурной эстетике Восточного блока.</p>
                                        <img src="../img/projects/trend3.jpg" alt="trend" class="trend-img">
                                    </div>

                                    <div class="slide">
                                        <p class="trend-text">Арткор — дом как арт-галерея —
                                            много изобразительного искусства повсюду.</p>
                                        <img src="../img/projects/trend4.jfif" alt="trend" class="trend-img">
                                    </div>
                                </div>


                                <button type="button" id="right"><img src="../img/arrow-right.svg" alt="arrow" class="arrow"></button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="design-start-items-after-trend">
                        <div class="design-container-after-trend">
                            <img src="../img/projects/image(5).jpg" alt="img5" class="designStartImg">
                            <img src="../img/projects/image(7).jpg" alt="img6" class="designStartImg">
                            <img src="../img/projects/image(2).jpg" alt="img7" class="designStartImg">
                            <img src="../img/projects/image(8).jpg" alt="img8" class="designStartImg">
                            <img src="../img/projects/image(4).jpg" alt="img9" class="designStartImg">
                            <img src="../img/projects/image30.jpg" alt="img10" class="designStartImg">
                            <img src="../img/projects/image(3).jpg" alt="img11" class="designStartImg">
                            <img src="../img/projects/image.jpg" alt="img12" class="designStartImg">
                        </div>
                    </div>

                    <div class="button-container">
                        <button type="button" class="btn-view-more" id="viewMore">ПОКАЗАТЬ ЕЩЕ</button>
                    </div>

                </div>
            </section>
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
