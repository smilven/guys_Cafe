@extends('adlayout')
@section('content')


<div class="container">
    <div class="card btable" style="padding: 15px; overflow:scroll ; overflow-y: hidden;">


        <table class="table" id="datatable">

            <thead style="font-weight:700">
                <tr>

                    <td>User ID</td>
                    <td>User Phone Number</td>
                    <td>Point</td>
                    <td>Edit Account</td>
                    <td>Remove Account</td>


                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <p class="fw-normal mb-1">00001</p>
                    </td>

                    <td>
                        <p class="fw-normal mb-1">0123456789</p>

                    </td>
                    <td>
                        <p class="fw-normal mb-1">500</p>

                    </td>

                    <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Edit
                        </button>


                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <form>
                                        <div class="container" style="padding:20px;">

                                            <center>
                                                <h4 style="margin-bottom: 10px;">Edit User</h4>
                                            </center>
                                            <!-- Name input -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="form4Example1" class="form-control" />
                                                <label class="form-label" for="form4Example1">Phone Number</label>
                                            </div>



                                            <input type="submit" class="btn btn-secondary  btn-block" style="border-radius: 12px;" value="Submit">


                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>

                    </td>









                    <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                            Remove
                        </button>
                    </td>



                </tr>

            </tbody>
        </table>
    </div>

</div>







<style>
    #user {
        background-color: #f1f1f1;
    }
</style>
@endsection