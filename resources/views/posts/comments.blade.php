<!--comments section-->
@if (Auth::check())
<div class="panel panel-default" style="margin: 0; border-radius: 0;">
<div class="panel-body">
<form action="{{ url('/comment') }}" method="POST" style="display: flex;">
{{ csrf_field() }}
<input type="hidden" name="post_id" value="{{ $post->id }}">
<input type="text" name="comment" placeholder="Enter your Comment" class="form-control" style="border-radius: 0;">
<input type="submit" value="Comment" class="btn btn-primary" style="border-radius: 0;">
</form>
@if (count($errors) > 0)
<div class="alert alert-danger">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<ul>
@foreach ($errors->all() as $error)
{{ $error }}
@endforeach
</ul>
</div>
@endif

@foreach ($post->comments as $comment)
<div class="panel panel-default" style="margin: 10px; border-radius: 0;">
<div class="panel-body">
<div class="col-sm-9">
{{ $comment->comment }} 
</div>
<div class="col-sm-3 text-right">
<a href="{{route('front.profile', ['id' => $comment->user->id]) }}" style="text-decoration: none; color: #666">
{{ $comment->user->name }}
</a>
</div>
</div>
</div>
@endforeach
</div>
</div>
@endif
</div> 