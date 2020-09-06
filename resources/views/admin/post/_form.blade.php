
<div class="form-group font-weight-bold">
    <label for="category_id">Category</label>
    <select class="form-control" name="category_id" id="category_id">
        <option value="">Select Category</option>
        @foreach($categories as $id=>$category)
        <option class="font-weight-bold" value="{{$id}}" @if(old('category_id',isset($post)?$post->category_id:null) == $id) selected @endif>{{$category}}</option>
        @endforeach
    </select>
    @error('category_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<br>
<div class="form-group font-weight-bold">
    <label for="author_id">Author</label>
    <select class="form-control" name="author_id" id="author_id">
        <option value="">Select Category</option>
        @foreach($authors as $id=>$author)
        <option  class="font-weight-bold" value="{{$id}}" @if(old('author_id',isset($post)?$post->author_id:null) == $id) selected @endif>{{$author}}</option>
        @endforeach
    </select>
    @error('author_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<br>
<div class="form-group font-weight-bold">
    <label for="address">Title</label>
    <textarea name="title" id="address" cols="30" rows="2" class="form-control" placeholder="Enter Post Title">{{old('title',isset($post)?$post->title:null)}}</textarea>
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
    <input class="form-check-input ml-2" type="checkbox" name="is_featured" id="is_featured" value="1" @if(old('is_featured',isset($post)?$post->is_featured:null) == 1) checked @endif>
    @error('is_featured')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="from-group font-weight-bold">
    <label for="">&nbsp;STATUS &nbsp;&nbsp;&nbsp;::&nbsp;&nbsp;&nbsp;</label>
    <label for="publish" >
        <input type="radio"  @if(old('status',isset($post)?$post->status:null) == 'Published' ) checked @endif  name="status" value="Published" id="publish"> Published
    </label>&nbsp;&nbsp;&nbsp;
    <label for="unpublish">
        <input type="radio"  @if(old('status',isset($post)?$post->status:null) == 'Unpublished' ) checked @endif   name="status" value="Unpublished" id="unpublish"> Unpublish
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
