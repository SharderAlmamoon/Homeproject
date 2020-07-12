
<div class="form-group">
    <label for="exampleInputUsername1 font-weight-bold">Username</label>
    <input type="text" name="name" value="{{old('name',isset($user)?$user->name:null)}}" class="form-control" id="exampleInputUsername1" placeholder="Enter Your Username">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1 font-weight-bold">Email address</label>
    <input type="email" name="email" value="{{old('email',isset($user)?$user->email:null)}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1 font-weight-bold">Phone</label>
    <input type="text" name="phone" value="{{old('phone',isset($user)?$user->phone:null)}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Phone">
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
