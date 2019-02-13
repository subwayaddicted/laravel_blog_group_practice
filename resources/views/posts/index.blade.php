@extends('user.app')

@section('bg-img','user/img/home-bg.jpg')

@section('head')



@endsection

@section('title', 'Posts ')
@section('sub-title', '')

@section('main-content')


    <div class="container">
        <h1>Posts</h1>
        @guest
        @else
        <a href="{{action('PostsController@create')}}" class="btn btn-primary">Create new post</a>
        @endguest
        <div class="row" style="margin-top: 15px;">
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
                           class="btn btn-primary">Details</a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
