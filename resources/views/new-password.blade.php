@extends('layouts.app')
@section('content')\

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






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mt-4">
            <div class="card-header"><img src="/images/Capture-removebg-preview.png" align="center"></div>
                <div class="card-body">


                    <div class="mt-5">
                        @if($errors -> any())
                        <div class="col-12">
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


                        <form action="{{ route('reset.password.post', ['token' => $token]) }}" method="POST">
                            @csrf
                            <input type="text"name="token" hidden value ="{{ $token }}">
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="phone" class="form-control" name="phone">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>

                           <button type="submit" class="btn btn-primary">Submit</button>

                           @if (Route::has('login'))
                            <center><a href="{{ route('login') }}" class="btn btn-link">Back to login</a></center>
                            @endif
                        </form>
                    </div>


        </div>
    </div>
</div>
</div>


<style>
     img, svg {
    vertical-align: middle;
    height: 150px;

    padding-left: 90px;
}

.btn-link {
        color: grey;
    }



.card-header:first-child {
    border-radius: var(--mdb-card-inner-border-radius) var(--mdb-card-inner-border-radius) 0 0;
    padding: 0;
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
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
@endsection
