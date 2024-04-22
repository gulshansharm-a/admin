@extends('side')
@section('content')
<div id="center">
  <div class="dropdown">
    <button class="dropbtn">Entries</button>
    <div class="dropdown-content">
      <a>10</a>
      <a>30</a>
      <a >50</a>
      <a >All</a>
    </div>
  </div>
   
<button  type="button" class="btn btn-success">Generate Points +</button>
</div>
<br>
<table class="table">

  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
@endsection