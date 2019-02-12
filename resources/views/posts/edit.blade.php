@extends('layouts.app')

@section("content")
    <!-- Main Content -->
    <div class="container">

        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" id="post_create"
              action="{{ action('PostsController@update',  array($post->id)) }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="slug">Slug <span>*</span></label>
                    <input type="text" class="form-control" name="slug" id="slug"
                           placeholder="Enter slug" required="required" value="{{$post->slug}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control"  required="required">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{{ ($category->id == $post->category_id) ? "selected" : '' }}}>{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-md-2 control-label">Title <span>*</span></label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"
                           required="required" value="{{$post->title}}">
                </div>
            </div>

            <div class="form-group">
                <label for="text">Example textarea</label>
                <textarea class="form-control" name="text" id="text" rows="10">{{$post->text}}</textarea>
            </div>

            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>

@endsection