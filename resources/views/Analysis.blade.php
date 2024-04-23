@extends('side')
@section('content')
<div id="analysis">
    <button  type="button" class="btn btn-success">Last 6 Month</button>
    <button  type="button" class="btn btn-success">Current Month</button>
    <button  type="button" class="btn btn-success">Last Month</button>
    <button  type="button" class="btn btn-success">Last Week</button>
    <button  type="button" class="btn btn-success">Current Week</button>
    <button  type="button" class="btn btn-success">Yesterday</button>
    <button  type="button" class="btn btn-success">Today</button>
</div>
<div id="analysis" style="margin-top: 40px">
<div id="center" style="flex-direction: column">
    <p>Play Point</p>
    <p>0</p>
</div>
<div id="center" style="flex-direction: column">
    <p>win Point</p>
    <p>0</p>
</div>
<div id="center" style="flex-direction: column">
    <p>End Point</p>
    <p>0</p>
</div>
<div id="center" style="flex-direction: column">
    <p>ADMINBALANCE</p>
    <p>0</p>
</div>
<div id="center" style="flex-direction: column">
    <p>CURRENT BALANCE</p>
    <p>0</p>
</div>
<div id="center" style="flex-direction: column">
    <p>X = 2</p>
    <p>0</p>
</div>
<div id="center" style="flex-direction: column">
    <p>CURRENT WINNING PERCENT</p>
    <p>0</p>
</div>
</div>
<center style="margin-top: 20px; color: grey">

    <h3>Winning</h3>
</center>
<div id="analysiss" style="margin-top: 40px">
<div style="margin-top: 40px; margin-bottom: 30px; padding: 20px; display:flex; align-items:center; justify-content:center ">
    <p>Sl No</p>
</div>
<div style="margin-top: 40px; margin-bottom: 30px; padding: 20px; display:flex; align-items:center; justify-content:center ">
    <p>Last Winning</p>
</div>
<div style="margin-top: 40px; margin-bottom: 30px; padding: 20px; display:flex; align-items:center; justify-content:center ">
    <p>New Winning</p>
</div>
<div style="margin-top: 40px; margin-bottom: 30px; padding: 20px; display:flex; align-items:center; justify-content:center ">
    <p>varriation</p>
</div>
<div style="margin-top: 40px; margin-bottom: 30px; padding: 20px; display:flex; align-items:center; justify-content:center ">
    <p>Create Date</p>
</div>
</div>
<center style="margin-top: 20px; color: grey">

    <h4>Admin Balance</h4>
</center>
<div id="analysiss" style="margin-top: 40px">
    <div style="margin-top: 40px; margin-bottom: 30px; padding: 20px; display:flex; align-items:center; justify-content:center ">
        <p>Sl No</p>
    </div>
    <div style="margin-top: 40px; margin-bottom: 30px; padding: 20px; display:flex; align-items:center; justify-content:center ">
        <p>LAST ADMINBALANCE</p>
    </div>
    <div style="margin-top: 40px; margin-bottom: 30px; padding: 20px; display:flex; align-items:center; justify-content:center ">
        <p>NEW ADMINBALANCE</p>
    </div>
    <div style="margin-top: 40px; margin-bottom: 30px; padding: 20px; display:flex; align-items:center; justify-content:center ">
        <p>CREATED DATE</p>
    </div>
  
    </div>
@endsection