@extends('template')

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
        <main>
            <div class="container">
                <section class="registration">
                    <h2>Регистрация</h2>
                    <form method="post" class="modal-form">
                        <input type="text" name="name" class="modal-form-text" placeholder="Имя">
                        <input type="email" name="email" class="modal-form-text" placeholder="Эл. почта">
                        <input type="text" name="login" class="modal-form-text" placeholder="Придумайте логин">
                        <input type="password" name="password" class="modal-form-text" placeholder="Придумайте пароль">
                        <div>
                            <p>Уже есть аккаунт?</p>
                            <a href="">Войти</a>
                        </div>

                        <div class="user-button-wrap">
                            <button type="submit" class="btn-submit">Зарегистрироваться</button>
                        </div>
                    </form>
                </section>
            </div>
        </main>
@endsection

