@extends('template')

@section('title')
    <title>Отзывы</title>
@endsection

@section('css_file')
    <link rel="stylesheet" href="{{ asset('css/feedback.css') }}">
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="feedbacks">
                <h2>Отзывы</h2>

                <div class="feedback-section">
                    @auth
                    <a href="{{ route('create') }}">Написать отзыв</a>
                    @else
                    <p>Войдите в профиль, чтобы написать отзыв</p>
                    @endauth

                    @forelse($posts as $post)
                    <div class="feedback-item">
                        <div class="post-title">
                            <p>{{ $post->user->name }}</p>
                            <h3>{{ $post->theme }}</h3>
                        </div>

                        <p>{{ $post->feedback_text }}</p>

                        @auth
                        <div class="post-change">
                            @if($post->user_id === auth()->id())
                            <a href="{{ route('edit', $post->id) }}" class="">Изменить</a>

                            <form action="{{ route('destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="delete-btn">Удалить</button>
                            </form>
                            @endif
                        </div>
                        @endauth
                    </div>
                    @empty
                        <p>Пока нет отзывов</p>
                    @endforelse
                </div>
            </div>
        </div>
@endsection


