@extends('template')

@section('title')
    <title>Профиль</title>
@endsection

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="profile-sections">

{{--                <section class="profile">--}}
{{--                    <h2>Профиль</h2>--}}
{{--                        <div class="user-info-container">--}}
{{--                            <div class="user-info">--}}
{{--                                <div class="info-container">--}}
{{--                                    <h3>Имя</h3>--}}
{{--                                    <p class="user-name">{{ auth()->user()->name }}</p>--}}
{{--                                </div>--}}
{{--                                <div class="info-container">--}}
{{--                                    <h3>Логин</h3>--}}
{{--                                    <p class="user-name">{{ auth()->user()->login }}</p>--}}
{{--                                </div>--}}
{{--                                <div class="info-container">--}}
{{--                                    <h3>Почта</h3>--}}
{{--                                    <p class="user-name">{{ auth()->user()->email }}</p>--}}
{{--                                    <button type="button" class="btn-submit">Подтвердить почту</button>--}}
{{--                                </div>--}}
{{--                                <button type="button" class="btn-submit">Выйти</button>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                </section>--}}
                <section class="profile-projects">
                    <h2>Надо удалить эту страницу</h2>
                </section>
            </div>
        </div>
    </main>
@endsection
