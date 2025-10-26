@extends('template')

@section('title')
    <title>Проект</title>
@endsection

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/project.css') }}">
@endsection

@section('content')
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
                            <img src="{{asset('img/icons/place.svg')}}" alt="place" class="project-info-icon">
                            <p class="project-info-text">Москва</p>
                        </div>
                        <div class="project-info-blocks">
                            <img src="{{asset('img/icons/size.svg')}}" alt="size" class="project-info-icon">
                            <p class="project-info-text">845м<sup>2</sup></p>
                        </div>
                        <div class="project-info-blocks">
                            <img src="{{asset('img/icons/date.svg')}}" alt="year" class="project-info-icon">
                            <p class="project-info-text">2022</p>
                        </div>
                        <div class="project-info-blocks">
                            <button>
                                <img src="{{asset('img/icons/like-no-active.png')}}" alt="like">
                            </button>
                            <p class="project-info-text">Нравиться</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
                <section class="project-info-img-section">

                    <img src="{{asset('img/project/first.jpg')}}" alt="1img" class="designStartImg">

                    <div class="designStartImg">
                        <img src="{{asset('img/project/second.jpg')}}" alt="2img" class="project-info-img-two">
                        <img src="{{asset('img/project/third.jpg')}}" alt="3img" class="project-info-img-two">
                    </div>

                    <img src="{{asset('img/project/last.jpg')}}" alt="4img" class="designStartImg">

                    <div class="designStartImg">
                        <img src="{{asset('img/project/5img.jpg')}}" alt="5img" class="project-info-img-two">
                        <img src="{{asset('img/project/6img.jpg')}}" alt="6img" class="project-info-img-two">
                    </div>

                    <img src="{{asset('img/project/7img.jpg')}}" alt="7img" class="designStartImg">

                </section>
                <div class="button-container">
                    <button class="btn-view-more" id="viewMore">ПОКАЗАТЬ ЕЩЕ</button>
                </div>

            </div>
        </main>
        @endsection
