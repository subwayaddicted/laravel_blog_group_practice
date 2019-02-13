@if (session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif