@extends('side')
@section('content')
<div >
    <div style="display: flex; justify-content:center">
      <h3>Joker List -2x</h3>

    </div>
  <div class="dropdown">
    <button class="dropbtn">Joker List</button>
    <div class="dropdown-content">
      
      <a >All</a>
      <a >1X</a>
      <a >2X</a>
    </div>
  </div>
 
</div>
<br>
<table class="table">

  <thead class="table-dark">
    <tr>
      <th scope="col">SL NO</th>
      <th scope="col">Joker</th>
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