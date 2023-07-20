@extends('layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />

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
            <img src="images\logo3.png" class="logoImg" />
        </a>

        <style>
            .logoImg {
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
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
                            <b>User {{ $userID }}</b>
                        </div>
                        <hr>

                        <table class="table table-borderless">
                            @foreach ($items as $item)
                            <tbody>
                                <tr>
                                    <td>{{ $item->food_name }}</td>
                                    <td>x{{ $item->quantity }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <hr>

                        <div class="d-flex justify-content-between">
                            <input type="hidden" name="userID" value="{{ $userID }}">
                            <select class="form-select food-status-select" aria-label="Default select example"
                                name="food_Status">
                                <option selected>Choose The Order Status</option>
                                <option value="placeorder">Place Order</option>
                                <option value="preparing">Preparing</option>
                                <option value="delivered">Delivered</option>
                            </select>
                            <button type="submit" class="submit_status btn btn-primary"
                                style="width: 35%">Submit</button>
                        </div>
                    </form>

                    <form action="{{ route('kitchen.delete', $userID) }}" method="POST" class="delete-form" data-user-id="{{ $userID }}">

                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-success mt-2 delete-button" name="delete-button">Complete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script>
$(document).ready(function () {
    // Add the CSRF token to the headers
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Retrieve and set the food status for each dropdown from local storage
    $('.food-status-select').each(function () {
        var userID = $(this).closest('.card-body').find('input[name="userID"]').val();
        var foodStatus = localStorage.getItem('foodStatus_' + userID);

        if (foodStatus) {
            // Update the selected option based on the retrieved food status
            $(this).val(foodStatus);
        }
    });

    // Handle form submission using AJAX
    $('form').on('submit', function (event) {
        event.preventDefault();

        var form = $(this);
        var url = form.attr('action');
        var formData = new FormData(form[0]);

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // Update the food status in local storage
                updateFoodStatus(response);
            },
            error: function (xhr, status, error) {
                // Handle the error if any
                console.log(error);
            }
        });
    });

    // Handle deletion using AJAX
    $(document).on('click', '.delete-button', function (event) {
        event.preventDefault();

        var form = $(this).closest('.delete-form');
        var userID = form.data('user-id'); // Get the userID from data attribute
        var url = '/kitchen/' + userID; // Update the URL with the userID
        var deleteButton = $(this);

        // Disable the delete button during the AJAX request
        deleteButton.prop('disabled', true);

        $.ajax({
            type: 'DELETE',
            url: url,
            dataType: 'json',
            success: function (response) {
                // Show a success message or perform any other actions
                console.log(response.message);
                // Remove the card dynamically
                form.closest('.card').remove();
            },
            error: function (xhr, status, error) {
                // Handle the error if any
                console.log(error);
            },
            complete: function () {
                // Re-enable the delete button after the AJAX request is completed
                deleteButton.prop('disabled', false);
            }
        });
    });

    // Function to update the food status in local storage
    function updateFoodStatus(response) {
        var userID = response.userID;
        var foodStatus = response.foodStatus;

        $('.food-status-select').each(function () {
            var selectUserID = $(this).closest('.card-body').find('input[name="userID"]').val();
            if (selectUserID == userID) {
                // Update the selected option based on the updated food status
                $(this).val(foodStatus);

                // Update the food status in local storage
                localStorage.setItem('foodStatus_' + userID, foodStatus);
            }
        });
    }
});



</script>



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
