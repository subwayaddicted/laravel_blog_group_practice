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
        
      <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Man must explore, and this is exploration at its greatest
              </h2>
              <h3 class="post-subtitle">
                Problems look mighty small from 150 miles up
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2018</p>
          </div>
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