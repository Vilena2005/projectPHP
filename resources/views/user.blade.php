@extends('template')

@auth
    @section('title')
        <title>Профиль</title>
    @endsection
@else
    @section('title')
        <title>Регистрация</title>
    @endsection
@endauth

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
        <main>
            <div class="container">
                @auth
                    <div class="profile-sections">

                        <section class="profile">
                            <h2>Профиль</h2>
                            <div class="user-info-container">
                                <div class="user-info">
                                    <div class="info-container">
                                        <h3>Имя</h3>
                                        <p class="user-name">{{ auth()->user()->name }}</p>
                                    </div>
                                    <div class="info-container">
                                        <h3>Логин</h3>
                                        <p class="user-name">{{ auth()->user()->login }}</p>
                                    </div>
                                    <div class="info-container">
                                        <h3>Почта</h3>
                                        <p class="user-name">{{ auth()->user()->email }}</p>
                                        <button type="button" class="btn-submit">Подтвердить почту</button>
                                    </div>
                                    <a class="logout-btn" href="{{ route('logout') }}">Выйти из профиля</a>
                                </div>

                            </div>
                        </section>
                        <section class="profile-projects">
                            <h2>Проекты</h2>
                            @can('create-project')
                                <a href="{{ route('make') }}">Создать новый проект</a>
                            @endcan
                        </section>
                    </div>
                @else
                    <section class="registration">
                        <h2>Регистрация</h2>
                        <form action="{{route('register')}}" method="post" class="modal-form">
                            @csrf
                            <input type="text" name="name" class="modal-form-text" placeholder="Имя" >
                            @error('name')
                            <div class="error-message">Имя должно быть минимум 3 символа</div>
                            @enderror
                            <input type="email" name="email" class="modal-form-text" placeholder="Эл. почта">
                            @error('email')
                            <div class="error-message">Почта некорректна</div>
                            @enderror

                            <input type="text" name="login" class="modal-form-text" placeholder="Придумайте логин">
                            @error('login')
                            <div class="error-message">Логин должен быть минимум 3 символа</div>
                            @enderror
                            <input type="password" name="password" class="modal-form-text" placeholder="Придумайте пароль">
                            @error('password')
                            <div class="error-message">Пароль должен быть минимум 8 символов</div>
                            @enderror
                            <div>
                                <p>Уже есть аккаунт?</p>
                                <a href="login">Войти</a>
                            </div>

                            <div class="user-button-wrap">
                                <button type="submit" class="btn-submit">Регистрация</button>
                            </div>
                        </form>

                    </section>
                @endauth

            </div>
        </main>
@endsection

