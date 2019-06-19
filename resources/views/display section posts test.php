

<!-- test posts-->
<!--start posts-->

<div class="posts current-post">
                        
                        
                        <!-- Start Create Poste -->
                <form method="post" enctype="multipart/form-data">
                        
                        <div class="upload" id="upload">
                            <div class="upload-selction">
                              <input type="file" name="media" id="file"
                                style="display: none;"/>
                            <label for="file" style="cursor: pointer;">
                            <i class="fa fa-photo" aria-hidden="true" style="cursor: pointer;"></i>
                            <span>Add Photo Video</span>
                            </label>
                            
                                
                            </div>

                            <div class="upload-text form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                                
                              <textarea name="body" rows="8" cols="80" class="form-control" placeholder="Enter your post"></textarea>
                                @if ($errors->has('body'))
                                    <small class="text-danger">{{ $errors->first('body') }}</small>
                                @endif
                                
                            </div>
                            <div class="upload-selction">
                              <select class="form-control" name="category">
                                  @foreach ($categories as $category)
                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                            <div class="upload-post">
                                    <input type="submit" value="Post">
                            </div>
                        </div>
                      </form>
                        
                        
                        @foreach ($posts as $post)
                        <div class="post">
                            <div class="post-icon" data-postid="{{ $post->id }}">
                            @php
                              $i = Auth::user()->likes()->count();
                              $c = 1;
                              $likeCount = $post->likes()->where('like', '=', true)->count();
                              $commentCount = $post->comments()->where('comment', '!=', null)->count();
                            @endphp
                            @foreach (Auth::user()->likes as $like)
                            @if ($like->post_id == $post->id)
                              @if ($like->like)
                                <i class="fa fa-heart-o like"></i><h5>{{ $likeCount }}</h5>
                                @else
                                <i class="fa fa-heart-o like"></i><h5>{{ $likeCount }}</h5>
                                @endif
                              @break
                              @elseif ($i == $c)
                              <i class="fa fa-heart-o like"></i><h5>{{ $likeCount }}</h5>
                              @endif
                          @php
                              $c++;
                          @endphp
                      @endforeach
                      @if ($i == 0)
                      <i class="fa fa-heart-o like"></i>{{ $likeCount }}
                       @endif
                       <i class="fa fa-comment"></i>{{ $commentCount }}


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
                                    <small>{{ $comment->user->name }}</small>
                                </div>
                            </div>
                          </div>
                      @endforeach
                            </div>
                          </div>
                      @endif
                       <!--comments-->
                                
                            </div>
 
                            <div class="post-head">
                                <div class="post-info">
                                    <img src="/uploads/images/{{$post->user->profile_image}}" alt="profile user image">
                                    <div class="post-info-name">
                                        <span class="name">{{ $post->user->name }}</span>
                                        <span class="time">
                                          {{$post->updated_at->diffForHumans() }} </span>
                                    </div>
                                </div>
                                
                                <ul class="my-dropdown">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="title-icon">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="{{ route('post.show', [$post->id]) }}">Show Post</a></li>
                                            <li><a href="{{ route('post.edit', [$post->id]) }}">Edit Post</a></li>
                                            <li>
                                              <a href="#" onclick="document.getElementById('delete').submit()">Delete Post</a>
                                              {!! Form::open(['method' => 'DELETE', 'id' => 'delete', 'route' => ['post.delete', $post->id]]) !!}
                                        {!! Form::close() !!}
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="post-content">
                                <p>{{ $post->body }}</p>
                                @if($post->postMedia)
                                  @if($post->postMedia->type=="image")
                                  <img src="/uploads/posts/images/{{$post->postMedia->path}}" style='width:100%;height:600px;'>
                                  @endif
                                  @if($post->postMedia->type=="video")
                                  <video style='width:100%;height:600px;' controls>
                                      <source src="/uploads/posts/video/{{$post->postMedia->path}}">
                                  </video>
                                  <!-- <video src="/uploads/posts/video/{{$post->postMedia->path}}" controls style='width:250px;height:250px;'> -->
                                  @endif
                                  <br>
                                @endif
                                <a href="{{ route('category.showAll', [$post->category? $post->category->name : 'uncategoeized']) }}" class="badge">{{ $post->category->name }}</a>
                            </div>
                            <div class="post-footer">
                               
                            </div>
                        </div>
                        
                      

             

            
            @endforeach
        </div>

<!-- end poats-->


<!-- start right side category-->
        </div>

        <div class="col-sm-3">
            @foreach ($categories as $category)
                <a href="{{ route('category.showAll', [$category->name]) }}" class="badge">{{ $category->name }}</a>
            @endforeach
        </div>