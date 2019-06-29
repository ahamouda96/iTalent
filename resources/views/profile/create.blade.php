@if (Session::has('success'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session::get('success') }}
    </div>
@endif
    <form method="post" enctype="multipart/form-data" action="PostsController@store">
    <div class="upload-selction">
    <input type="file" name="media" id="file" style="display: none;"/>
    <label for="file" style="cursor: pointer;">
    <i class="fa fa-photo" aria-hidden="true" style="cursor: pointer;"></i>
    <span>Add Photo Video</span>
    </label>     
    </div>
        <div class="upload-text form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            <img src="/uploads/images/{{Auth::user()->profile_image}}" alt="profile image">
            <form>
            <textarea name="body" placeholder="What's on your mind?" id="open-create"></textarea>
            </form>
            @if ($errors->has('body'))
            <small class="text-danger">{{ $errors->first('body') }}</small>
            @endif 
        </div>
        <div class="upload-post">
            <select class="form-control" name="category">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        </div>
        <div class="upload-post">
            <form>
                <input type="submit" value="Post">
            </form>
        </div>
    </form>
 