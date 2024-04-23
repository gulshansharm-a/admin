@extends('side')
@section('content')
<div id="padding">
    <p>Winning</p>
    <div class="dropdown">
        <button class="dropbtn">Show</button>
        <div class="dropdown-content">
          
          <a >All</a>
          <a >10</a>
          <a >20</a>
          <a >30</a>
        </div>
      </div>
</div>
<table class="table">

    <thead class="table-dark">
      <tr>
        <th scope="col">SL NO</th>
        <th scope="col">Last Winning%</th>
        <th scope="col">New Winning%</th>
        <th scope="col">Variations</th>
        <th scope="col">Created Date</th>
        
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