@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Категория: {{ $data['posts'][0]['cat_title'] }}</h1>
    @foreach($data['posts'] as $post)
        <div class="container">
            <h3>{{ $post['title'] }}</h3>
            <p>{{ $post['text'] }}</p>
            <a href="/posts/{{ $post['id'] }}">Читать далее...</a>
        </div>
    @endforeach
    </div>
@endsection