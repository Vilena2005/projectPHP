@extends('template')

@section('title')
    <title>О нас</title>
@endsection

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
@endsection

@section('content')
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
                        <img src="{{asset('img/founder.jpg')}}" alt="founder-pic" class="founder-pic">
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
                                    <img src="{{asset('img/sofa-icon.svg')}}" alt="icon-sofa" class="philosophy-img">
                                    <p class="philosophy-column-title">Гармония пространства</p>
                                    <p class="philosophy-text">Мы верим, что интерьер должен находиться
                                        в балансе с окружающей средой. Используя натуральные материалы,
                                        плавные линии и продуманные цветовые решения, мы создаем
                                        пространства, способствующие физическому и эмоциональному
                                        благополучию.</p>
                                </div>
                                <div class="philosophy-column">
                                    <img src="{{asset('img/light-icon.svg')}}" alt="icon-light" class="philosophy-img">
                                    <p class="philosophy-column-title">Функциональность и эстетика.</p>
                                    <p class="philosophy-text"> Мы верим, что идеальный интерьер должен
                                        быть не только визуально привлекательным, но и максимально
                                        функциональным. Наши дизайнерские решения сочетают в себе
                                        практичность и элегантность, создавая пространства, удобные
                                        для повседневной жизни.</p>
                                </div>
                                <div class="philosophy-column">
                                    <img src="{{asset('img/vase-icon.svg')}}" alt="icon-vase" class="philosophy-img">
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
                        <img src="{{asset('img/Team.png')}}" alt="team-img" class="employee-img">

                    </div>
                </section>
            </div>
        </main>
@endsection
