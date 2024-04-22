@extends('side')
@section('content')
<div class="center">

<h4 style="color: black; font-weight:bolder">Active Super Distributor</h4>
<div style="display: flex">
<div id="buttonsalign">

    <button class="simpplebuttton">Excel</button>
    <button class="simpplebuttton">PDF</button>
</div>
</div>
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
</div>
@endsection