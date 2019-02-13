@extends('user.app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title', 'Edit Category')
@section('sub-title', '')

@section("main-content")
    <!-- Main Content -->
    <div class="container">

        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" id="category_create"
              action="{{ action('CategoryController@update',  array($category->slug)) }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="slug">Slug <span>*</span></label>
                    <input type="text" class="form-control" name="slug" id="slug"
                           placeholder="Enter slug" required="required" value="{{$category->slug}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="title" class="col-md-2 control-label">Title <span>*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"
                               required="required" value="{{$category->title}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>

@endsection
