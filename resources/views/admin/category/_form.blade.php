
<div class="form-group">
    <label for="exampleInputUsername1 font-weight-bold">CATEGORY NAME</label>
    <input type="text" name="name" value="{{old('name',isset($category)?$category->name:null)}}" class="form-control" id="exampleInputUsername1" placeholder="Enter Your Category name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="from-group">
    <label for="">&nbsp;STATUS &nbsp;&nbsp;&nbsp;::&nbsp;&nbsp;&nbsp;</label>
    <label for="active">
        <input type="radio" @if(old('status',isset($category)?$category->status:null) == 'Active' ) checked @endif name="status" value="Active" id="active"> Active
    </label>&nbsp;&nbsp;&nbsp;
    <label for="inactive">
        <input type="radio" name="status"  @if(old('status',isset($category)?$category->status:null) == 'Inactive' ) checked @endif value="Inactive" id="inactive"> Inactive
    </label>
    @error('status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

