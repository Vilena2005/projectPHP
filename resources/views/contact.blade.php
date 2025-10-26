@extends('template')

@section('title')
    <title>Контакты</title>
@endsection

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
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
@endsection

