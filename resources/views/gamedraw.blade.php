@extends('side')
@section('content')
<div id="center">
  <div class="dropdown">
    <h3>Draw Details - FunTarget</h3>
    <button class="dropbtn">Draw Details</button>
    <div class="dropdown-content">
      <a>Fun Target</a>
      
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
      <th scope="col">Game</th>
      <th scope="col">Draw</th>
      <th scope="col">Time</th>

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
<Center style="margin-top: 20px; margin-bottom: 20px;">

    <p>
        Date Vise Game Draw History Data
    </p>
</Center>
<center style="margin-top: 20px; margin-bottom: 20px;">
    <label >From</label>
    <input type="date"/>
    <label >To</label>
    <input type="date"/>
</center>
<center style="margin-top: 20px; margin-bottom: 20px;">
    <button type="button" class="btn btn-primary">Delete Data</button>
</center>
@endsection