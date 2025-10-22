<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etude</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/construct.css">
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
    <div class="bg-img-construct">
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
                        <h1 class="title">В Нашем<br>Калькуляторе</h1>
                        <p class="title-text">
                            вы можете воплотить в жизнь свои мечты об идеальном
                            пространстве. Наш интуитивно понятный инструмент
                            позволит вам легко создавать, планировать и
                            визуализировать свой дом или офис.
                        </p>
                    </div>
                </section>
            </div>
            <div class="container">
                <section class="calculator">
                    <div class="square">
                        <div class="square-item">
                            <p class="square-item-text">Укажите тип помещения</p>
                            <form class="square-interact">
                                <select name="types" id="calcType" class="square-form">
                                    <option value="apartment">Квартира</option>
                                    <option value="house">Дом</option>
                                    <option value="organization">Учреждение</option>
                                </select>
                            </form>
                        </div>
                        <div class="square-item">
                            <p class="square-item-text">Укажите площадь помещения</p>
                            <form class="square-interact">
                                <input type="text" id="" placeholder="40 кв.м" class="square-form">
                            </form>
                        </div>
                        <div class="square-item">
                            <p class="square-item-text">Укажите количество комнат</p>
                            <form class="square-interact">
                                <input type="number" placeholder="2" class="square-form">
                            </form>
                        </div>
                    </div>
                    <div class="plan-img">
                        <img src="../img/plan.png" alt="plan">
                    </div>
                </section>
                <section class="additional-options">
                    <div class="additional-text-container">
                        <p class="additional-text-title">Дополнительные опции</p>
                        <p class="additional-text">Не входят в стандартный пакет</p>
                    </div>
                    <div class="add">
                        <div class="additional-options-container">
                            <div class="additional-options-items">
                                <input type="checkbox" id="addOption1">
                                <label for="addOption1" class="checkbox-name">Дополнительные чертежи</label>
                            </div>
                            <div class="additional-options-items">
                                <input type="checkbox" id="addOption2">
                                <label for="addOption2" class="checkbox-name">Дизайн проект дополнительной зоны</label>
                            </div>
                            <div class="additional-options-items">
                                <input type="checkbox" id="addOption3">
                                <label for="addOption3" class="checkbox-name">3D экскурсия</label>
                            </div>
                            <div class="additional-options-items">
                                <input type="checkbox" id="addOption4">
                                <label for="addOption4" class="checkbox-name">Авторский надзор</label>
                            </div>
                            <div class="additional-options-items">
                                <input type="checkbox" id="addOption5">
                                <label for="addOption5" class="checkbox-name">Изготовление мебели на заказ</label>
                            </div>
                        </div>
                        <div class="standart-container">
                            <div class="standart-package-bg">
                                <p class="standart-package-text">Что входит в стандартный пакет</p>
                            </div>
                            <div class="standart-package-text-container">
                                <p class="standart-text">Выездной замер помещения</p>
                                <p class="standart-text">Два варианта чертежей</p>
                                <p class="standart-text">Планировочное решение</p>
                                <p class="standart-text">Подбор мебели и сантехники</p>
                                <p class="standart-text">Подбор отделочных материалов</p>
                                <p class="standart-text">Технадзор</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="cost">
                    <div class="total-cost">
                        <p class="total-cost-text">Итоговая сумма</p>
                        <h2 class="total-cost-number">97000</h2>
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
