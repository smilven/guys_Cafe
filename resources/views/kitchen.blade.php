@extends('layouts.app')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel='stylesheet'
href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link rel="stylesheet"
href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->

<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="home">
            <img src="images\logo3.png" class="logoImg"/>
          </a>



          <style>
  .logoImg{
    height: 45px;
    width: auto;
    margin-left: 20px;
  }
            </style>
          <!-- Right links -->
          <ul class="navbar-nav ms-auto d-flex flex-row">

            <!-- Avatar -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-caret-down-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">

                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
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

      <div class="container">
        <div class="row">
            @foreach ($data4->groupBy('userID') as $userID => $items)
            <div class="col-md-4 mt-5">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="{{ route('update.order.status') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-title d-flex justify-content-between">
                                <center><b>Table 1</b></center>
                                <b>Users {{ $userID }}</b>



                            </div>
                            <hr>

                            <table class="table table-borderless">
                                    @foreach ($items as $item)

                                    <input type="hidden" name="orderID" id="orderID" value="{{ $item -> orderID }}">
                                    <input type="hidden" name="userID" id="userID" value="{{ $item -> userID }}">


                                        <tbody>
                                            <tr>
                                            <td>{{ $item->food_name }}</td>
                                            <td>x{{ $item->quantity }}</td>
                                        </tr>
                                        </tbody>

                                        {{-- <div class="p-2"><p class="mt-2">{{ $item->food_name }}</p></div>
                                    <div class="align-self-end"><p class="mt-2"> x{{ $item->quantity }}</p></div> --}}

                                    @endforeach

                                </table>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <select class="form-select" aria-label="Default select example" name="food_Status" id="food_Status">
                                    <option selected>Choose The Order Status</option>
                                    <option value="placeorder">Place Order</option>
                                    <option value="preparing">Preparing</option>
                                    <option value="delivered">Delivered</option>
                                </select>
                                <button type="submit" class="submit_status btn btn-primary" name="submit_status" style="width: 35%">Submit</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-danger mt-2">Issues</button>
                            <form action="{{ route('kitchen.delete', $item->userID) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-success mt-2">Complete</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

<style>
    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
    width: 100%;
}
</style>


      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>


@endsection
