@extends('template')

@section('title')
    <title>Редактирование отзыва</title>
@endsection

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/feedback.css') }}">
@endsection

@section('content')
    <main>
        <div class="container">
            <section class="feedbacks">
                <h2>Редактировать отзыв</h2>
                <form action="{{ route('update', $post->id) }}" method="post" class="review-form ">

                    @csrf
                    @method('PUT')

                    <input type="text" name="theme" id="title" placeholder="Введите тему отзыва" class="modal-form-text"
                           value="{{ $post->theme }}">

                    @error('title')
                    <div class="error-message">Минимум 3 символа</div>
                    @enderror

                    <textarea name="feedback_text" id="feedback_text" placeholder="Введите отзыв" class="modal-form-comment" required="{{ $post->feedback_text }}"></textarea>
                    @error('feedback_text')
                    <div class="error-message">Минимум 5 символов</div>
                    @enderror

                    <div class="user-button-wrap">
                        <button type="submit" class="btn-submit">Отправить</button>
                    </div>
                </form>
            </section>
        </div>
@endsection
