@extends('user.app')

@section('bg-img','user/img/home-bg.jpg')

@section('head')



@endsection

@section('title', 'Posts ')
@section('sub-title', '')

@section('main-content')


    <div class="container">
        <div class="row">
            <h1>Посты</h1>
        </div>
        <div class="row">
            @guest
            @else
            <div class="card col-md-4" style="background: #b6f68e;">
                <a href="{{action('PostsController@create')}}" style="width: 100%; height: 100%; text-decoration:none;">
                    <div class="card-body">
                        <div style="text-align: center; font-size: 55px; position: absolute; top: 25%; left:20px">
                            Добавить пост
                        </div>
                    </div>
                </a>
            </div>
            @endguest
            @foreach($posts as $post)
                <div class="card col-md-4">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <div style="display: block; width: 100%; clear: both;">
                            <span class="badge badge-light"
                                  style="display:block; float: left;">{{$post->updated_at}}</span>
                            <span class="badge badge-warning"
                                  style="display:block; float: right;">{{$post->category->title}}</span>
                        </div>
                        <div style="display: block; width: 100%; height: 188px; clear: both; margin: 5px 0;overflow: hidden;">
                            <p class="card-text">{{$post->text}}</p>
                        </div>
                        <a href="{{action('PostsController@show', array($post->id))}}"
                           class="btn btn-primary">Подробней</a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection