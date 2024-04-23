@extends('side')
@section('content')
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
         
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150" style="margin-bottom: 5px">
                 <input placeholder="Search" style="margin-bottom: 5px">
                 <button type="button" class="btn btn-primary">Search</button>
                  </div>
                </div>
              </div>
              <div class="card mt-3">  
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Kenneth Valdez
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Role</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Parent</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Credit Point</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      N/A
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Total Play Point</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     N/A
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Total Won Point</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     N/A
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>
          <Center>

              <h3 style="margin-bottom: 40px">Recent Transection</h3>
            </Center>
          <div id="center">
            
              <button  type="button" class="btn btn-success">Add Point</button>
          <button  type="button" class="btn btn-success">Minus Point</button>
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

        </div>
    </div>
@endsection