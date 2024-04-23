@extends('side')
@section('content')
<div class="transfer">
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Old Transaction Password</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Old Transaction Password">
          </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">New Transaction Password</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="New Transaction Password">
          </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Confirm Transaction Password</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Confirm Transaction Password">
          </div>
          <button type="submit" class="btn btn-primary">Reset Pin</button>
    </form>
</div>
@endsection