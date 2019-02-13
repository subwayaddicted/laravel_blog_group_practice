@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Categories</h1>
        </div>
        <div class="row">
            @guest
            @else
                <div class="card col-md-4" style="background: #b6f68e;">
                    <a href="{{action('CategoryController@create')}}"
                       style="width: 100%; height: 100%; text-decoration:none;">
                        <div class="card-body">
                            <div style="text-align: center; font-size: 30px; position: absolute; top: 25%; left:20px">
                                Add category
                            </div>
                        </div>
                    </a>
                </div>
            @endguest
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
