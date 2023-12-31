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
            <div class="card">
                <div class="card-header">  @php
                    $type = 1; 
                
                    $admin_profile_image = \App\Models\User::find($type)->profile_image;
                @endphp
                
                <div class="text-center" style="margin: 10px;"> 
                    <img class="rounded-circle" src="@if($admin_profile_image == null) {{ asset("storage/avatar/avatar.png") }} @else {{ asset("storage/$admin_profile_image") }} @endif" id="image_preview_container">
                </div>
                </div>
            <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="form-label">Name</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control   @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>



                                        <!-- Email input -->


                                            <div class="form-group row">
                                                <label for="phone" class="form-label">Phone</label>

                                                <div class="col-md-12">
                                                    <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="" placeholder="Phone Number" required>

                                                    @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                    @endif




                                            </div>
                                        </div>

                                        <!-- Password input -->
                                        <div class="row mb-3">
                                            <label for="password" class="form-label">Password</i></span></label>

                                            <div class="col-md-12">
                                                <input id="password" type="password"
                                                    class="form-control"
                                                    name="password" required autocomplete="new-password" placeholder="At least 6 character">

                                              

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password-confirm" class="form-label">Confirm Password</label>

                                            <div class="col-md-12">
                                                <input id="password-confirm" type="password" class="form-control  @error('password') is-invalid @enderror" name="password_confirmation" placeholder="At least 6 character" required autocomplete="new-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- 2 column grid layout for inline styling -->

                                        <!-- Checkbox -->

                                    </div>


                                    <!-- Submit button -->
                                    <center><button type="Submit" class="btn btn-primary">
                                            Register
                                        </button>

                                        @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="btn btn-link" style="background-color: transparent;margin-top:5px;">Back to login</a>
                    @endif
                </center>  </div>


                    </form>
                </div>
            </div>
        </div>
    </div>




<style>
    img,
    svg {
        height: 150px;
        padding: 0;
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
        padding: 0;
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
@endsection
