
<div class="form-group font-weight-bold">
    <label for="category_id">Category</label>
    <select class="form-control" name="category_id" id="category_id">
        <option value="">Select Category</option>
        @foreach($categories as $id=>$category)
        <option value="{{$id}}">{{$category}}</option>
        @endforeach
    </select>
</div>
<br>
<div class="form-group font-weight-bold">
    <label for="author_id">Author</label>
    <select class="form-control" name="author_id" id="author_id">
        <option value="">Select Category</option>
        @foreach($authors as $id=>$author)
        <option value="{{$id}}">{{$author}}</option>
        @endforeach
    </select>
</div>
<br>
<div class="form-group font-weight-bold">
    <label for="address">Title</label>
    <textarea name="title" id="address" cols="30" rows="2" class="form-control" placeholder="Enter Post Title">{{old('post',isset($post)?$post->title:null)}}</textarea>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<br>

<div class="form-group font-weight-bold">
    <label for="address">Details</label>
    <textarea name="details" id="address" cols="30" rows="13" class="form-control" placeholder="Enter Post Details">{{old('details',isset($post)?$post->details:null)}}</textarea>
</div>
<br>

<div class="form-group font-weight-bold">
    <label for="is_featured" class="font-weight-bold">Is_Featured? </label>
    <input class="form-check-input ml-2" type="checkbox" name="is_featured" id="is_featured" @if(old('is_featured',isset($post)?$post->is_featured:null) == true) checked @endif>
    @error('is_featured')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="from-group font-weight-bold">
    <label for="">&nbsp;STATUS &nbsp;&nbsp;&nbsp;::&nbsp;&nbsp;&nbsp;</label>
    <label for="publish" >
        <input type="radio"  @if(old('status',isset($post)?$post->status:null) == 'Publish' ) checked @endif  name="status" value="Publish" id="publish"> Published
    </label>&nbsp;&nbsp;&nbsp;
    <label for="unpublish">
        <input type="radio" name="status"  @if(old('status',isset($post)?$post->status:null) == 'Unpublish' ) checked @endif  value="Unpublish" id="unpublish"> Unpublish
    </label>
    @error('status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<br>
<div class="from-group font-weight-bold">
    <label for="Image"> Image : </label>
    <input class="" type="file" name="image" id="Image">
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<br>
