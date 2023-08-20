@extends('layouts.app')
@section('content')


<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>
<link rel="stylesheet" href="">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />




        <div class="col-md-4">
            <div class="card">
                <div class="card-header">                      @php
                    $type = 1; 
                
                    $admin_profile_image = \App\Models\User::find($type)->profile_image;
                @endphp
                <div class="text-center" style="margin: 10px;">
                    
                <img class="rounded-circle" src="@if($admin_profile_image == null) {{ asset("storage/avatar/avatar.png") }} @else {{ asset("storage/$admin_profile_image") }} @endif" id="image_preview_container">
               
            </div>
            </div>
                <div class="card-body">

    <div class="row-mb-3">
                        @if($errors -> any())
                        <div class="col-md-12">
                            @foreach ($errors -> all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        </div>
                        @endif

                        @if (session() -> has('error'))
                        <div class="alert-alert-danger">{{ session('error') }}</div>
                        @endif

                        @if (session() -> has('success'))
                        <div class="alert-alert-success">{{ session('success') }}</div>
                        @endif
                        </div>
                        <p>We will send a link to your email,use that link to reset password.</p>
                        <form action="{{ route('forget.password.post') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                                <label for="phone" class="form-label">Phone or Email</label>

                            <div class="col-md-12">

                                <input type="phone" class="form-control" name="phone">
                            </div>
                            </div>

                            <center><button type="submit" class="btn btn-primary mt-3">Submit</button></center>

                            @if (Route::has('login'))
                            <center><a href="{{ route('login') }}" class="btn btn-link mt-1" style="background-color: transparent;margin-top:5px;">Back to login</a></center>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
  


<style>

    img,
    svg {
        height: 150px;
    }

    .card-header:first-child {
        border-radius: var(--mdb-card-inner-border-radius) var(--mdb-card-inner-border-radius) 0 0;
        padding: 0;
    }

    a {
    color: grey;
    text-decoration: underline;
}



    body {
        margin: 0;
        font-family: var(--mdb-body-font-family);
        font-size: var(--mdb-body-font-size);
        font-weight: var(--mdb-body-font-weight);
        line-height: var(--mdb-body-line-height);
        color: var(--mdb-body-color);
        text-align: var(--mdb-body-text-align);
        background-color: white;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .form-check {
        min-height: 1.5rem;
        margin-left: 13px;
    }

    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer;
        width: 90%;
        border-radius: 15px;
        color: white;
        background: orange;
    }

    .fa-solid,
    .fas {
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        padding-right: 8px;
        padding-left: 10px;
    }

    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer;
        width: 90%;
        border-radius: 15px;
        color: white;
        background: orange;
        border-color: lightpink;
    }

    .card-header:first-child {
        border-radius: var(--mdb-card-inner-border-radius) var(--mdb-card-inner-border-radius) 0 0;
        background-color: white;
    }

    .btn-link {
        color: grey;
    }

    .form-outline .form-control {
        min-height: auto;
        padding: 0.32rem 0.75rem;
        border: 10px;
        background: lightgrey;
        transition: all .2s linear;
        border-color: black;
    }

    .form-check-input[type=checkbox]:checked:after {
        display: block;
        transform: rotate(45deg)
            /*!rtl:ignore*/
        ;
        width: 0.375rem;
        height: 0.8125rem;
        border: 0.125rem solid #fff;
        border-top: 0;
        border-left: 0
            /*!rtl:ignore*/
        ;
        margin-left: 0.25rem;
        margin-top: -1px;
        background-color: royalblue;

    }


</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
@endsection
