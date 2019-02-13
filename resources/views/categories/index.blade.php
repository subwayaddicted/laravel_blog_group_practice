@extends('user.app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title', 'Categories')
@section('sub-title', '')

@section("main-content")
    <div class="container">
        <h1>Categories</h1>
        @guest
        @else
        <a href="{{action('CategoryController@create')}}" class="btn btn-primary">Add category</a>
        @endguest
        <div class="row" style="margin-top: 15px;">
            @foreach($categories as $category)
                <div class="card col-md-4">
                    <div class="card-body">
                        <h5 class="card-title">{{$category->title}}</h5>
                        <a href="{{action('CategoryController@show', array($category->slug))}}"
                           class="btn btn-primary">Show posts of this category</a>
                        <div style="padding-top: 10px">
                            @guest
                            @else
                                @includeIf('categories.component.btn_category_edit',["category_slug"=>$category->slug])
                                @includeIf('categories.component.btn_category_delete',["category_slug"=>$category->slug])
                            @endguest
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
