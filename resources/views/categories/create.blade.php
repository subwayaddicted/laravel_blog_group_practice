@extends('layouts.app')

@section("content")
    <!-- Main Content -->
    <div class="container">

        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" id="category_create"
              action="{{ action('CategoryController@store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="slug">Slug <span>*</span></label>
                    <input type="text" class="form-control" name="slug" id="slug"
                           placeholder="Enter slug" required="required">
                </div>

                <div class="form-group col-md-6">
                    <label for="Title">Title<span>*</span></label>
                    <input type="text" class="form-control" name="title" id="title"
                           placeholder="Enter title" required="required">
                </div>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection