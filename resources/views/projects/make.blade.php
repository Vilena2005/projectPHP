@extends('template')

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="profile-sections">
                <section class="profile">
                    <h2>Создать проект</h2>
                    <div class="user-info-container">
                        <form  method="post">
                            <input name="title" type="text" placeholder="Название проекта">
                            <input name="location" type="text" placeholder="Местоположение">
                            <input name="area" type="text" placeholder="Площадь">
                            <textarea name="description" placeholder="Описание"></textarea>
                            <input type="file">
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
