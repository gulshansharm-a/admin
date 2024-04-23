@extends('side')
@section('content')
<div class="transfer" style="margin-top: 10px">
    <h4 style="margin: 10px">Balance Tranfer</h4>
    <label style="margin: 10px">
        UserName:-
    </label>
    <div class="form-group" style="margin: 10px">
       
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter The UserName">
      </div>
    </div>
<div class="transfer">
    <h3 style="margin-bottom: 30px; margin-left: 10px ">Tranfer Status</h3>
    <div class="form-group" style="margin-left: 10px">
        <label for="exampleFormControlSelect1">Show Entries</label>

        <select class="form-control" id="exampleFormControlSelect1" style="width: 150px">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <table class="table">

        <thead class="table-dark">
            <tr>
                <th scope="col">SL NO</th>
                <th scope="col">USER NAME</th>
                <th scope="col">AMOUNT</th>
                <th scope="col">DATE</th>
                <th scope="col">ACTION</th>

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
</div>

@endsection