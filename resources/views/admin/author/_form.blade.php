
<div class="form-group">
    <label for="exampleInputAuthorname1 font-weight-bold">Name</label>
    <input type="text" name="name" value="{{old('name',isset($author)?$author->name:null)}}" class="form-control" id="exampleInputAuthorname1" placeholder="Enter Your Name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1 font-weight-bold">Email </label>
    <input type="email" name="email" value="{{old('email',isset($author)?$author->email:null)}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="exampleInputEmail1 font-weight-bold">Phone</label>
    <input type="text" name="phone" value="{{old('phone',isset($author)?$author->phone:null)}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Phone">
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" id="address" cols="30" rows="5" class="form-control" placeholder="Enter your Address">{{old('address',isset($author)?$author->address:null)}}</textarea>
</div>
<div class="from-group">
    <label for="Image"> Image : </label>
    <input class="" type="file" name="image" id="Image"  >
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<br>
<div class="from-group">
    <label for="">&nbsp;STATUS &nbsp;&nbsp;&nbsp;::&nbsp;&nbsp;&nbsp;</label>
    <label for="active" >
        <input type="radio"  @if(old('status',isset($author)?$author->status:null) == 'Active' ) checked @endif  name="status" value="Active" id="active"> Active
    </label>&nbsp;&nbsp;&nbsp;
    <label for="inactive">
        <input type="radio" name="status"  @if(old('status',isset($author)?$author->status:null) == 'Inactive' ) checked @endif  value="Inactive" id="inactive"> Inactive
    </label>
    @error('status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<br>
