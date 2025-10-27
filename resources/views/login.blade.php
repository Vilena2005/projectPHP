@extends('template')

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
    <main>
        <div class="container">
            <section class="registration">
                <h2>Авторизация</h2>
                <form action="{{ route('login') }}" method="post" class="modal-form">
                    @csrf

                    <input type="text" name="login" class="modal-form-text" placeholder="Логин">
                    @error('login')
                    <div class="error-message">Неправильный логин</div>
                    @enderror

                    <input type="password" name="password" class="modal-form-text" placeholder="Пароль">
                    @error('password')
                    <div class="error-message">Неправильный пароль</div>
                    @enderror
                    <div>
                        <p>Нет аккаунта?</p>
                        <a href="user">Регистрация</a>
                    </div>

                    <div class="user-button-wrap">
                        <button type="submit" class="btn-submit">Войти</button>
                    </div>

                </form>
            </section>
        </div>
    </main>
@endsection
