@extends('user.app')

@section('bg-img','user/img/home-bg.jpg')

@section('head')



@endsection

@section('title', 'Create Post ')
@section('sub-title', '')

@section('main-content')
    <!-- Main Content -->
    <div class="container">

        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" id="post_create"
              action="{{ action('PostsController@store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="user_id" value="{{ $user->id }}">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="slug">Slug <span>*</span></label>
                    <input type="text" class="form-control" name="slug" id="slug"
                           placeholder="Enter slug" required="required">
                </div>

                <div class="form-group col-md-6">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control"  required="required">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-md-2 control-label">Title <span>*</span></label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"
                           required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="text">Example textarea</label>
                <textarea class="form-control" name="text" id="text" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>

@endsection