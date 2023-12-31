@extends('layouts.app')
@section('content')
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>
<link rel="stylesheet" href="">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />




<div class="col-md-4">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        {{$errors->first()}}
    </div>
    @endif
    <div class="card mt-3">
        <div class="card-header"> @php
            $type = 1;

            $admin_profile_image = \App\Models\User::find($type)->profile_image;
            @endphp
<div class="text-center" style="margin: 10px;">

            <img class="rounded-circle" src="@if($admin_profile_image == null) {{ asset(" storage/avatar/avatar.png") }}
                @else {{ asset("storage/$admin_profile_image") }} @endif" id="image_preview_container">
                    
</div>
        </div>
        <div class="card-body">
            <p>Thanks for registering with our platform. We will call you to verify your phone number in a
                jiffy. Provide the code below.</p>

            <form method="post" action="{{ route('phoneverification.verify') }}">
                @csrf
                <div class="form-group mt-3">
                    <label for="code">Verification Code</label>
                    <input id="code" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }} mt-1"
                        name="code" type="text" placeholder="Verification Code" required autofocus>
                    @if ($errors->has('code'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('code') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <center><button class="btn btn-primary mt-4">Verify Phone</button></center>
                </div>

        </div>
        </form>
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
        width: 100%;
        border-radius: 15px;
        color: white;
        background: orange;
        border-color: lightpink;
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
        width: 100%;
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
@endsection