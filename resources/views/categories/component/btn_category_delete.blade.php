<form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" id="category_delete"
      action="{{ action('CategoryController@destroy',  array($category_slug)) }}" style="display: inline-block">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
