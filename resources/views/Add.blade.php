@extends('side')
@section('content')
<div id="aligncenter">

<form>
    <div class="form-group">
      <label for="exampleInputEmail1">User Name</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Name</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Firm Name</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Firm Name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      <small id="emailHelp" class="form-text text-muted" style="color: red">The password must be at least 6 characters.</small>

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Transaction PIN</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Transaction PIN">
      <small id="emailHelp" class="form-text text-muted" style="color: red">Transaction password and password are not same!!</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Sharing %</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sharing %">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
      
</div>
  @endsection