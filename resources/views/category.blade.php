@extends('user.app')

@section('bg-img','/user/img/home-bg.jpg')

@section('head')



@endsection

@section('title', $data['posts'][0]['cat_title'])
@section('sub-title', '')



@section("main-content")
    <!-- Main Content -->
    <div class="container">
      <div class="row" id="app">
        <div class="col-lg-8 col-md-10 mx-auto">
        
      <h1>Категория: {{ $data['posts'][0]['cat_title'] }}</h1>
    @foreach($data['posts'] as $post)
        <div class="container">
            <h3>{{ $post['title'] }}</h3>
            <p>{{ $post['text'] }}</p>
            <a href="/posts/{{ $post['id'] }}">Читать далее...</a>
        </div>
    @endforeach
        </div>
      </div>
    </div>

    <hr>

    @endsection


    </div>
@endsection
