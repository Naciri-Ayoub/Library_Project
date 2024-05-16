

@extends('layouts.master')
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="{{asset('css/all-student.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">


</head>
<body>
<div class="px-4">
<h1>dachboard</h1>

 <!-- Content Row -->

<div class="row">
     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Categorys</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">25</div>
                    </div>
                    <div class="col-auto">
                    <i class="flaticon-classmates text-green"></i>
                         <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        {{-- <div><img src="{{asset('img/back-to-school.png')}}" width="40" alt=""></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Products</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bag-shopping fa-2x text-gray-300"></i>
                        {{-- <div><img src="{{asset('img/group.png')}}" width="40" alt=""></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Orders</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                    </div>
                    <div class="col-auto">
                    <i class="flaticon-classmates text-green"></i>
                         <i class="fas fa-person-walking-luggage fa-2x text-gray-300"></i> 
                        {{-- <div><img src="{{asset('img/couple.png')}}" width="40" alt=""></div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Clients</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                    </div>
                    <div class="col-auto">
                         <i class="fas fa-user fa-2x text-gray-300"></i> 
                        {{-- <div><img src="{{asset('img/money-stack.png')}}" width="40" alt=""></div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<div class="row">

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-dark">Earnings Overview</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area">
                <canvas id="myAreaChart"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- =============================================================================================== -->
<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-dark">Orders</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-pie pt-4 pb-2">
                <canvas id="myPieChart"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <span class="mr-2">
                    <i class="fas fa-circle text-warning"></i> Male Students
                </span>
                
                <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i> Female Students
                </span>
            </div>
        </div>
    </div>
</div>
</div>
<!-- -------------------------------------------------------------------------------------------------- -->

<div class="container">
  <div class="row">
    <div class="col-md-3 mb-3">
      <div class="card">
        <div class="card-body text-center color-social-facebook">
        
          <p class="card-text"><i class="fa-brands fa-facebook px-2"></i>Like us on Facebook</p>
          <h5 class="card-title">10,000</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <div class="card-body text-center color-social-twitter">
          
          <p class="card-text"><i class="fa-brands fa-twitter px-2"></i>Follow us on Twitter</p>
          <h5 class="card-title">11,000</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3  mb-3">
      <div class="card ">
        <div class="card-body text-center color-social-googleplus">
        
          <p class="card-text"><i class="fa-brands fa-google-plus-g px-2"></i>Follow us on Google+</p>
          <h5 class="card-title">19,000</h5>
          
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <div class="card-body text-center color-social-linkden">
        
        <p class="card-text"><i class="fa-brands fa-linkedin-in px-2"></i>Follow us on LinkedIn</p>
        <h5 class="card-title">45,000</h5>
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>



@endsection

    

    <script>
    </script>

