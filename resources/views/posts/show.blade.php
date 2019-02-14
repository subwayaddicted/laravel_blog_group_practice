@extends('layouts.app')

@section('content')
	<div class="container">
		@if($post)
			@guest
	   			<h1>{{ $post->title }}</h1>
	  			<p>{{ $post->text }}</p>
	  		@else
				<h1>{{ $post->title }}</h1>
				<p>{{ $post->text }}</p>
				@includeIf('posts.component.btn_post_edit',["post_id"=>$post->id])
				@includeIf('posts.component.btn_post_delete',["post_id"=>$post->id])
			@endguest
	    @else 
	    	<p>Такого поста нет</p>
	    @endif
    </div>
@endsection