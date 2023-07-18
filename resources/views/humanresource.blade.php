@extends('adlayout')
@section('content')

<div class="container">

  

  

    <form action="worker" method="POST">
        @csrf
        <center>
            <h3 style="font-weight:800">Add Worker</h3>
        </center>
        <div class="row g-4 mb-4">
    
            <div class="col-sm">
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" autocomplete="off" />
            </div>
    
            <div class="col-sm">
    
                <input type="text" name="position" id="Position" class="form-control" placeholder="Position"
                    autocomplete="off" />
    
    
            </div>
    
            <div class="col-sm">
                <input type="text" name="phone" id="Phone" class="form-control" placeholder="Phone number"
                    autocomplete="off">
            </div>
    
    
            <div class="col-sm">
                <input type="text" name="ic" id="ic" class="form-control" placeholder="identity number" autocomplete="off">
            </div>
    
            <div class="col-sm">
                <button type="submit" class="btn btn-outline-primary" data-mdb-ripple-color="dark">Add</button>
            </div>
        </div>
    
    </form>
    


<script>
    $(document).ready(function() {
        $(document).on('click', '.edit', function() {

            var worker_id = $(this).val();
            // alert(stud_id);

            $.ajax({
                type: "GET",
                url: "/edit-worker/" + worker_id,
                success: function(response) {
                    //console.log(response);
                    $('#phone').val(response.data.phone);
                    $('#position').val(response.data.position);
                    $('#worker_id').val(response.worker_id); // Set the worker_id input field
                }
            });

        });
    });
</script>

    <div class="card">
        <table class="table align-middle mb-0 bg-white">

            <thead class="bg-light" style="font-weight:700">
                <tr>

                    <td>Worker ID</td>
                    <td>Name</td>
                    <td>Position</td>
                    <td>Phone number</td>
                    <td>Identity number</td>
                    <td>Edit Account</td>
                    <td>Remove Account</td>

                </tr>
            </thead>

            <tbody>
                @foreach ($workers as $Worker)


                <tr>
                    <td>
                        <p class="fw-normal mb-1">{{$Worker['id']}}</p>
                    </td>

                    <td>
                        <p class="fw-normal mb-1">{{$Worker['name']}}</p>

                    </td>

                    <td>
                        <p class="fw-normal mb-1">{{$Worker['position']}}</p>

                    </td>

                    <td>
                        <p class="fw-normal mb-1">{{$Worker['phone']}}</p>

                    </td>

                    <td>
                        <p class="fw-normal mb-1">{{$Worker['ic']}}</p>

                    </td>




                    <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded edit" data-bs-toggle="modal"
                            data-bs-target="#editWorker" value="{{$Worker->id}}">
                            Edit
                        </button>
                    </td>


 

                    
                    <div class="modal fade" id="editWorker" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="{{ url('update-worker') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <input type="hidden" name="worker_id" id="worker_id">

                                    <div class="container" style="padding:20px;">

                                        <center>
                                            <h4 style="margin-bottom: 10px;">Edit User</h4>
                                        </center>
                                        <!-- Name input -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="phone" class="form-control" name="phone" />
                                            <label class="form-label" for="phone">Phone Number</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="position" class="form-control" name="position" />
                                            <label class="form-label" for="position">Position</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block mt-2" id="checkout">Submit</button>

                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>




                    <td>
                        <a href="delete3/{{$Worker['id']}}" class="btn btn-link btn-sm btn-rounded">
                            Remove
                        </a>
                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>


 
 
<style>
    #worker {
        background-color: #f1f1f1;
    }

    @media(max-width: 768px) {

        .btn {
            width: 100%;
        }
    }
</style>

@endsection