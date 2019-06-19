<form method="post" enctype="multipart/form-data">        
  <div class="upload" id="upload"> <!--upload div-->
    <div class="upload-selction">
    <input type="file" name="media" id="file" style="display: none;"/>
    <label for="file" style="cursor: pointer;">
    <i class="fa fa-photo" aria-hidden="true" style="cursor: pointer;"></i>
    <span>Add Photo Video</span>
    </label>     
    </div>

    <div class="upload-text form-group {{ $errors->has('body') ? 'has-error' : '' }}">

    <textarea name="body" class="form-control" placeholder="Enter your post"></textarea>
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
  </div><!--end upload div-->
</form><!--end form-->