<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    @yield('css_file')
    <script defer src="{{asset('js/script.js')}}"></script>

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
                <img src="{{asset('img/modal-img.png')}}" alt="modal-img">
            </div>
        </div>
    </div>

    <div class="bg-img">
        <header>
            <div class="container">
                <div class="header-items">
                    <a href="{{ route('home')}}" class="logo">
                        <img src=" {{ asset('img/Logo-Etude-white.svg') }} " alt="Etude">
                    </a>
                    <nav class="header-menu">
                        <a href="{{ route('catalog') }}" class="header-menu-item">Каталог</a>
                        <a href="{{route('calculator')}}" class="header-menu-item">Калькулятор</a>
                        <a href="{{ route('contact') }}" class="header-menu-item">Контакты</a>
                        <a href="{{ route('about') }}" class="header-menu-item">О нас</a>
                        <a href="{{ route('feedback') }}" class="header-menu-item">Отзывы</a>
                    </nav>
                    <div class="link-wrap">
                        <div class="request">
                            <button type="button" class="contact-form-wrap" id="openModal"></button>
                            <p>Заявка</p>
                        </div>
                        <a class="user" href="{{ route('user') }}">
                            <button type="button" class="user-logo" id="userLog"></button>
                            <p>Профиль</p>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')
        <footer>
            <div class="footer-color">
                <div class="container">
                    <div class="footer-container">
                        <a href="{{ route('home')}}" class="logo">
                            <img src="{{asset('img/Logo-Etude-white.svg')}}" alt="Etude">
                        </a>
                        <nav class="footer-menu">
                            <a href="{{ route('catalog') }}" class="header-menu-item">Каталог</a>
                            <a href="{{route('calculator')}}" class="header-menu-item">Калькулятор</a>
                            <a href="{{ route('contact') }}" class="header-menu-item">Контакты</a>
                            <a href="{{ route('about') }}" class="header-menu-item">О нас</a>
                            <a href="{{ route('feedback') }}" class="header-menu-item">Отзывы</a>
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
