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
      <th scope="col">SL NO</th>
      <th scope="col">CREATED DATE</th>
      <th scope="col">BALANCE POINT</th>
      <th scope="col">GENERATED POINT</th>
      <th scope="col">TOTAL POINT</th>
      <th scope="col">NOTES</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>52084</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>51184

      </td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">
        429418
      </td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
@endsection