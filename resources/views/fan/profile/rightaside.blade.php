<div class="col-sm-3">
<div class="aside-right">

<div class="top-post">
    <div class="title">
    <span class="title-name">Latest Post</span>
    </div>

    <hr class="hr">
   

<div style="height:360px; width:290px; background-color: #fff;">

@foreach ($posts as $post)
@if($post->user->id == Auth()->user()->id)
@if($post->postMedia->type=="image")
<img src="/uploads/posts/images/{{$post->postMedia->path}}" style='width:100%;height:600px;'>
@endif
@endif
 @endforeach


    
    </div>
</div>
</div>
</div>