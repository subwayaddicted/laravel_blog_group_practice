@extends('user.app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title', 'Laravel Blog')
@section('sub-title', 'Keep codding')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style type="text/css">

  
  .fa-thumbs-up:hover{
    color: red;
  }
</style>
@endsection
@section("main-content")
    <!-- Main Content -->
    <div class="container">
      <div class="row" id="app">
        <div class="col-lg-8 col-md-10 mx-auto">
        
             @foreach($posts as $post) 
      <div class="post-preview">
            <a href="{{action('PostsController@show', array($post->id))}}">
              <h2 class="post-title">
               {{$post->title}}
              </h2>
              <h3 class="post-subtitle">
               {{$post->text}}
              </h3>
            </a>
            <p class="post-meta">
              <a href="">Start Bootstrap</a>
              {{$post->created_at}}</p>
          </div>
          @endforeach
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            
          </div>
        </div>
      </div>
    </div>

    <hr>

    @endsection


    @section('footer')


<script src="{{asset('js/app.js')}}"></script>
    @endsection