@extends('side')
@section('content')
<h3 style="margin-bottom: 20px">Today's Summary ( 22-04-2024 )</h3>
<p style="margin-bottom: 20px">Online Player</p>
<Center>
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
      <th scope="col">USER NUMBER</th>
      <th scope="col">NAME</th>
      <th scope="col">SUBSTITUDE</th>
      <th scope="col">CREDIT</th>
      <th scope="col">STATUS</th>
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
</Center>
@endsection