@extends('user.app')

@section('bg-img','user/img/home-bg.jpg')

@section('head')



@endsection

@section('title', 'All Post From '. $data['posts'][0]['cat_title'])
@section('sub-title', '')

@section('main-content')
    <div class="container">
    @foreach($data['posts'] as $post)
        <div class="container">
            <h3>{{ $post['title'] }}</h3>
            <p>{{ $post['text'] }}</p>
            <a href="/posts/{{ $post['id'] }}">Читать далее...</a>
        </div>
    @endforeach
    </div>
@endsection