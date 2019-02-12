@extends('layouts.app')

@section('content')
	<div class="container">
		@if($post)
	    <h1>{{ $post->title }}</h1>
	    <p>{{ $post->text }}</p>
	    @else 
	    	<p>Such a post does not exist</p>
	    @endif
    </div>
@endsection