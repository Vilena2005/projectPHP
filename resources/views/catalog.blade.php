@extends('template')

@section('title')
    <title>Каталог</title>
@endsection

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
@endsection

@section('content')
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
                        <button type="submit" class="search-btn"><img src="{{asset('img/icons/search-icon.png')}}" alt="search"></button>
                    </form>

                    <div class="design-start-items">
                        <div class="design-container">
                            <a href="project">
                                <img src="{{asset('img/projects/image31.png')}}" alt="img1" class="design-start-img">
                            </a>
                            <img src="{{asset('img/projects/image(6).jpg')}}" alt="img2" class="design-start-img">
                            <img src="{{asset('img/projects/image(1).jpg')}}" alt="img3" class="design-start-img">
                            <img src="{{asset('img/projects/image22.jpg')}}" alt="img4" class="design-start-img">
                        </div>
                    </div>
                </div>
                <div class="trend-bg">
                    <div class="container">
                        <div class="trend-container">
                            <h2 class="trend-title">ТРЕНДЫ ЭТОГО ГОДА</h2>

                            <div class="trend">
                                <button type="button" id="left"><img src="{{asset('img/arrow-left.svg')}}" alt="arrow" class="arrow"></button>

                                <div class="slides">

                                    <div class="slide">
                                        <p class="trend-text">Тихая роскошь — это тенденция дизайна
                                            интерьера, подчеркивающая сдержанную элегантность,
                                            неподвластную времени привлекательность и высококачественные
                                            материалы.</p>
                                        <img src="{{asset('img/projects/trend-of-year-img.jpg')}}" alt="trend" class="trend-img">
                                    </div>

                                    <div class="slide">
                                        <p class="trend-text">Фламандская драма — насыщенные цветом, фактурами,
                                            деталями интерьеры. Яркие формы на чёрном фоне. Эффект антика на
                                            явно современных предметах и обивки-картины.</p>
                                        <img src="{{asset('img/projects/trend2.jpg')}}" alt="trend" class="trend-img">
                                    </div>

                                    <div class="slide">
                                        <p class="trend-text">Восточноевропестан — элементы и визуальные
                                            отсылки к интерьерной и архитектурной эстетике Восточного блока.</p>
                                        <img src="{{asset('img/projects/trend3.jpg')}}" alt="trend" class="trend-img">
                                    </div>

                                    <div class="slide">
                                        <p class="trend-text">Арткор — дом как арт-галерея —
                                            много изобразительного искусства повсюду.</p>
                                        <img src="{{asset('img/projects/trend4.jfif')}}" alt="trend" class="trend-img">
                                    </div>
                                </div>


                                <button type="button" id="right"><img src="{{asset('img/arrow-right.svg')}}" alt="arrow" class="arrow"></button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="design-start-items-after-trend">
                        <div class="design-container-after-trend">
                            <img src="{{asset('img/projects/image(5).jpg')}}" alt="img5" class="designStartImg">
                            <img src="{{asset('img/projects/image(7).jpg')}}" alt="img6" class="designStartImg">
                            <img src="{{asset('img/projects/image(2).jpg')}}" alt="img7" class="designStartImg">
                            <img src="{{asset('img/projects/image(8).jpg')}}" alt="img8" class="designStartImg">
                            <img src="{{asset('img/projects/image(4).jpg')}}" alt="img9" class="designStartImg">
                            <img src="{{asset('img/projects/image30.jpg')}}" alt="img10" class="designStartImg">
                            <img src="{{asset('img/projects/image(3).jpg')}}" alt="img11" class="designStartImg">
                            <img src="{{asset('img/projects/image.jpg')}}" alt="img12" class="designStartImg">
                        </div>
                    </div>

                    <div class="button-container">
                        <button type="button" class="btn-view-more" id="viewMore">ПОКАЗАТЬ ЕЩЕ</button>
                    </div>

                </div>
            </section>
        </main>
        @endsection
