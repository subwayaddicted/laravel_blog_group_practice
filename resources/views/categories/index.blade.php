@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Категории</h1>
        </div>
        <div class="row">
            @guest
            @else
            <div class="card col-md-4" style="background: #b6f68e;">
                <a href="{{action('CategoryController@create')}}" style="width: 100%; height: 100%; text-decoration:none;">
                    <div class="card-body">
                        <div style="text-align: center; font-size: 30px; position: absolute; top: 25%; left:20px">
                            Добавить категорию
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
                           class="btn btn-primary">Показать посты этой категории</a>
                        @guest  
                        @else
                            @includeIf('category.component.btn_category_edit',["category_slug"=>$category->slug])
                            @includeIf('category.component.btn_category_delete',["category_slug"=>$category->slug])
                        @endguest
                    </div>
                </div>
            @endforeach
        </div> 
    </div>
@endsection
