<form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" id="post_create"
      action="{{ action('PostsController@destroy',  array($post_id)) }}" style="display: inline-block">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger">Удалить</button>
</form>