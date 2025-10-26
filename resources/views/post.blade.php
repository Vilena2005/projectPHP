@extends('template')

@section('title')
    <title>Отзывы</title>
@endsection

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endsection

@section('content')
    <main>
        <div class="container">
            @auth
                <section class="registration">
                    <h2>Оставить отзыв</h2>
                    <form method="post" class="review-form" action="{{ route() }}">
                        @csrf
                        <input type="text" name="title" id="title" placeholder="Введите тему отзыва" class="modal-form-text">
                        <textarea name="message" id="message" placeholder="Введите отзыв" class="modal-form-comment"></textarea>
                        <div class="user-button-wrap">
                            <button type="submit" class="btn-submit">Отправить</button>
                        </div>
                    </form>
                </section>
                <div class="feedbacks">
                    <h2>Отзывы</h2>
                    @forelse($feedback as $post)
                        <h3>{{ $post->title }}</h3>
                        <h2>{{ $post->user->name }}</h2>

                        <a href="#" class="">Edit</a>
                        <a href="#" class="">Delete</a>
                    @empty
                        <p>Пока нет отзывов</p>
                    @endforelse
                </div>
            @else
                <div class="feedbacks">
                    <h2>Отзывы</h2>
                    @forelse($feedback as $post)
                        <h3>{{ $post->title }}</h3>
                        <h2>{{ auth()->user()->name }}</h2>

                        <a href="#" class="">Edit</a>
                        <a href="#" class="">Delete</a>
                    @empty
                        <p>Пока нет отзывов</p>
                    @endforelse
                </div>
            @endauth




        </div>
@endsection
