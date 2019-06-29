@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-sm-12">
<div class="panel-heading">top 5 posts</div>
<div class="panel-body">
@foreach($posts as $post)
<div class="title">
{{$post->body}}
</div>
@endforeach
</div>
</div>
</div>
@endsection