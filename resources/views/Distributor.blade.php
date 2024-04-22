@extends('side')
@section('content')
<div class="center">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
        <th scope="col">SL NO.</th>
        <th scope="col">USERNAME</th>
        <th scope="col">REFERAL</th>
        <th scope="col">PASSWORD</th>
        <th scope="col">CREDIT</th>
        <th scope="col">COMMISSION %</th>
        <th scope="col">ACTION</th>
        <th scope="col">LAST LOGIN</th>
        <th scope="col">CREATED DATE</th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td><div id="actionspace">
            <span class="material-symbols-outlined" id="action">
                edit
                </span>
                <span class="material-symbols-outlined" id="action">
                    unarchive
                    </span>
                    <span class="material-symbols-outlined" id="action">
                        move_to_inbox
                        </span>
</div>
<div id="actionspace">
    <span class="material-symbols-outlined" id="action">
        close
        </span>
        <span class="material-symbols-outlined" id="action">
            cancel
            </span>
            <span class="material-symbols-outlined" id="action">
                delete
                </span>
</div>
    </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td><div id="actionspace">
            <span class="material-symbols-outlined" id="action">
                edit
                </span>
                <span class="material-symbols-outlined" id="action">
                    unarchive
                    </span>
                    <span class="material-symbols-outlined" id="action">
                        move_to_inbox
                        </span>
</div>
<div id="actionspace">
    <span class="material-symbols-outlined" id="action">
        close
        </span>
        <span class="material-symbols-outlined" id="action">
            cancel
            </span>
            <span class="material-symbols-outlined" id="action">
                delete
                </span>
</div>
    </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td><div id="actionspace">
            <span class="material-symbols-outlined" id="action">
                edit
                </span>
                <span class="material-symbols-outlined" id="action">
                    unarchive
                    </span>
                    <span class="material-symbols-outlined" id="action">
                        move_to_inbox
                        </span>
</div>
<div id="actionspace">
    <span class="material-symbols-outlined" id="action">
        close
        </span>
        <span class="material-symbols-outlined" id="action">
            cancel
            </span>
            <span class="material-symbols-outlined" id="action">
                delete
                </span>
</div>
    </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection