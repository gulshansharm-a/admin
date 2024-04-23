@extends('side')
@section('content')
<div id="center">
    <h3 >Player History</h3>
    <div style="display: flex;" >
        <p style="margin-right: 20px">Select game</p>
        <div class="form-group">
        
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Fun Target</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
    </div>
    
    <button  type="button" class="btn btn-success">Back -></button>
</div>
<center style="margin-top: 20px; margin-bottom: 20px;">
    <label >From</label>
    <input type="date"/>
    <label >To</label>
    <input type="date"/>
</center>
<center>
    <button type="button" class="btn btn-primary">Search Data</button>
</center>
    <br>
<table class="table">

  <thead class="table-dark">
    <tr>
      <th scope="col">SL NO</th>
      <th scope="col">HANDDID</th>
      <th scope="col">USERNAME</th>
      <th scope="col">START POINT</th>
      <th scope="col">PLAY POINT</th>
      <th scope="col">WON</th>
      <th scope="col">END POINT</th>
      <th scope="col">DATE</th>
      <th scope="col">GAME</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>52084</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>51184
      <td>51184
      <td>51184
      <td>51184
      <td>51184
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
<center style="margin-top: 20px; margin-bottom: 20px;">
    <label >From</label>
    <input type="date"/>
    <label >To</label>
    <input type="date"/>
</center>
<center>
    <button type="button" class="btn btn-primary">Delete Data</button>
</center>
@endsection