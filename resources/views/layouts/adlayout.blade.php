<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <!-- MDB -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!--这个是Graph的-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.1/dist/chart.umd.min.js"></script>


    
    <title>Guys Cafe</title>
    


    
</head>


<body>
    <style>
        /* CSS */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

    </style>

    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
          <div class="position-sticky">
              <div class="list-group list-group-flush mx-3 mt-4">
                  <!-- Welcome with User's Name -->
                  <a href="adminhome" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
                      <i class="fas fa-user fa-fw me-3"></i><span>Welcome <br> {{ Auth::user()->name }}</span>
                  </a>
      
                  <!-- Table -->
                  <a href="table" id="table" class="list-group-item list-group-item-action py-3 ripple" data-mdb-ripple-color="#44c6e3">
                      <i class="fas fa-chart-bar fa-fw me-3"></i><span>Table</span>
                  </a>
      
                  <!-- Food Menu -->
                  <a href="product" id="product" class="list-group-item list-group-item-action py-3 ripple" data-mdb-ripple-color="#44c6e3">
                      <i class="fas fa-utensils fa-fw me-3"></i><span>Food Menu</span>
                  </a>
      
                  <!-- Payment -->
                  <a href="cash" id="cash" class="list-group-item list-group-item-action py-3 ripple" data-mdb-ripple-color="#44c6e3">
                      <i class="fas fa-hand-holding-dollar me-3"></i><span>Payment</span>
                  </a>
      
                  <!-- Voucher -->
                  <a href="vouchers" id="voucher" class="list-group-item list-group-item-action py-3 ripple" data-mdb-ripple-color="#44c6e3">
                      <i class="fas fa-money-bill fa-fw me-3"></i><span>Voucher</span>
                  </a>
      
                  <!-- Reminder -->
                  <a href="fullcalender" id="fullcalender" class="list-group-item list-group-item-action py-3 ripple" data-mdb-ripple-color="#44c6e3">
                      <i class="fas fa-building fa-fw me-3"></i><span>Reminder</span>
                  </a>
      
                  <!-- Supplier -->
                  <a href="supplier" id="recordSupplier" class="list-group-item list-group-item-action py-3 ripple" data-mdb-ripple-color="#44c6e3">
                      <i class="fas fa-clipboard me-3"></i><span>Supplier</span>
                  </a>
      
                  <!-- Users -->
                  <a href="user" id="user" class="list-group-item list-group-item-action py-3 ripple" data-mdb-ripple-color="#44c6e3">
                      <i class="fas fa-users fa-fw me-3"></i><span>Users</span>
                  </a>

                  
                  <!-- Setting -->
                  <a href="setting" id="setting" class="list-group-item list-group-item-action py-3 ripple" data-mdb-ripple-color="#44c6e3">
                    <i class="bi bi-gear-fill fa-fw me-3"></i><span>Setting</span>
                </a>
              </div>
          </div>
      </nav>
        <!-- Sidebar -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const pageContent = document.getElementById("pageContent");
                pageContent.classList.add("fade-in");
            });

        </script>
        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="adminhome">
                    @php
                    $type = 1; 
                
                    $admin_profile_image = \App\Models\User::find($type)->profile_image;
                @endphp
                
                
                <img class="rounded-circle" height="35px" style="margin-left: 20px;" src="@if($admin_profile_image == null) {{ asset("storage/avatar/avatar.png") }} @else {{ asset("storage/$admin_profile_image") }} @endif" 
                id="image_preview_container2">
                
                </a>

                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">

                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chevron-compact-down"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">

                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="container pt-4">@yield('content')</div>


    </main>
    <!--Main layout-->
    <script>
        $(document).ready(function() {
            var table = $('#datatable').DataTable();
        });

    </script>

    @yield('scripts')
    
</body>



<style>
    body {
        background-color: #fbfbfb;
    }

    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }


    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0;
        /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }

    .list-group-item {
        margin-top: 3px;
    }



    #user a.active {
        background-color: rgb(0 0 0 / 5%);
    }




    @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
    }

    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }



    @media(max-width: 768px) {

        .card {
            width: 100%;
        }


        .d-flex #search {
            width: 160px;
        }



        .col-md-auto button {
            width: 100%;
        }

    }






    div.dataTables_wrapper div.dataTables_filter input {
        width: 250px;
    }



    div.dataTables_wrapper div.dataTables_filter label {
        margin: 10px 0;
    }

    .btable::-webkit-scrollbar {
        display: none;
    }

    div.dataTables_wrapper div.dataTables_length label {
        margin: 10px 10px 10px;

    }

    div.dataTables_wrapper div.dataTables_info {
        display: none;
    }

</style>










</html>
