@extends('side')

@section('content')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Generated Point Balance</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rs.40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Generate Point</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Today Play Point</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Today End Points</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Distributor</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rs.40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Super Distributor</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Players</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Online Playerst</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow" id="lastwinner">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Total Bet On Number</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body" id="card">
                    <div id="Number">
                        <div class="arrow">
                            <h3>Numbers</h3>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <h3>Amount</h3>
                        </div>

                        <div class="arrow">
                            <p>1</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>100</p>
                        </div>
                        <div class="arrow">
                            <p>2</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>200</p>
                        </div>
                        <div class="arrow">
                            <p>3</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>300</p>
                        </div>
                        <div class="arrow">
                            <p>4</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>400</p>
                        </div>
                        <div class="arrow">
                            <p>5</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>500</p>
                        </div>
                        <div class="arrow">
                            <p>6</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>600</p>
                        </div>
                        <div class="arrow">
                            <p>7</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>700</p>
                        </div>
                        <div class="arrow">
                            <p>8</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>800</p>
                        </div>
                        <div class="arrow">
                            <p>9</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>900</p>
                        </div>
                        <div class="arrow">
                            <p>10</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>1000</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

      
    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow" id="lastwinner">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Total Bet On Number</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body" id="card">
                    <div id="Number">
                        <div class="arrow">
                            <h3>Numbers</h3>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <h3>Amount</h3>
                        </div>

                        <div class="arrow">
                            <p>1</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>100</p>
                        </div>
                        <div class="arrow">
                            <p>2</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>200</p>
                        </div>
                        <div class="arrow">
                            <p>3</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>300</p>
                        </div>
                        <div class="arrow">
                            <p>4</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>400</p>
                        </div>
                        <div class="arrow">
                            <p>5</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>500</p>
                        </div>
                        <div class="arrow">
                            <p>6</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>600</p>
                        </div>
                        <div class="arrow">
                            <p>7</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>700</p>
                        </div>
                        <div class="arrow">
                            <p>8</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>800</p>
                        </div>
                        <div class="arrow">
                            <p>9</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>900</p>
                        </div>
                        <div class="arrow">
                            <p>10</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>1000</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

      
    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow" id="lastwinner">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Total Bet On Number</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body" id="card">
                    <div id="Number">
                        <div class="arrow">
                            <h3>Numbers</h3>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <h3>Amount</h3>
                        </div>

                        <div class="arrow">
                            <p>1</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>100</p>
                        </div>
                        <div class="arrow">
                            <p>2</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>200</p>
                        </div>
                        <div class="arrow">
                            <p>3</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>300</p>
                        </div>
                        <div class="arrow">
                            <p>4</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>400</p>
                        </div>
                        <div class="arrow">
                            <p>5</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>500</p>
                        </div>
                        <div class="arrow">
                            <p>6</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>600</p>
                        </div>
                        <div class="arrow">
                            <p>7</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>700</p>
                        </div>
                        <div class="arrow">
                            <p>8</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>800</p>
                        </div>
                        <div class="arrow">
                            <p>9</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>900</p>
                        </div>
                        <div class="arrow">
                            <p>10</p>
                          
                            <p><span class="material-symbols-outlined">
                                    turn_sharp_left
                                </span></p>
                                <p>1000</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

      
    </div>
@endsection,
