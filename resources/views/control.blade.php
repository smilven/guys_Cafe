@extends('adlayout')
@section('content')

{{-- Add Modal --}}

<br>

<div class="modal fade" id="AddSupplierModal" tabindex="-1" aria-labelledby="AddSupplierModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddSupplierModalLabel">Add Supplier Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="save_msgList"></ul>

                <div class="form-group mb-3">
                    <label for="">Name</label>
                    <input type="text" required class="SupplierName form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="">Tel</label>
                    <input type="text" required class="PhoneNumber form-control">
                </div>
                
                <div class="form-group mb-3">
                    <label for="">Category</label>
                    <input type="text" required class="Category form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_supplier">Save</button>
            </div>

        </div>
    </div>
</div>


{{-- Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit & Update Supplier Data</h5>
                <button type="button" class="btn-close closing" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <ul id="update_msgList"></ul>

                <input type="hidden" id="stud_id" />

                <div class="form-group mb-3">
                    <label for="">Name</label>
                    <input type="text" id="SupplierName" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tel</label>
                    <input type="text" id="PhoneNumber" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Category</label>
                    <input type="text" id="Category" required class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closing" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary update_supplier">Update</button>
            </div>

        </div>
    </div>
</div>
{{-- Edn- Edit Modal --}}



{{-- Delete Modal --}}
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DeleteModalLabel">Delete Supplier Data</h5>
                <button type="button" class="btn-close closing" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Confirm to Delete Data ?</h4>
                <input type="hidden" id="deleteing_id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closing" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary delete_supplier">Yes Delete</button>
            </div>
        </div>
    </div>
</div>
{{-- End - Delete Modal --}}






<div class="container">

    <div id="wrapper">

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-10 mb-8">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-10 mb-8">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-10 mb-8">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-10 mb-8">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests
                                            </div>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    //和db做Connection
                                                    $serverName = "localhost";
                                                    $userName = "root";
                                                    $password ="";
                                                    $dbName = "status_guys_cafe";

                                                    //create connection
                                                    $con = mysqli_connect($serverName,$userName,$password, $dbName);

                                                    $dash_message_query = "SELECT * from messages";
                                                    $dash_message_query_run = mysqli_query($con,$dash_message_query);

                                                    if($message_total = mysqli_num_rows($dash_message_query_run))
                                                    {
                                                        echo '<h4 class="mb-0"> ' .$message_total.' </h4>';
                                                    }
                                                    else
                                                    {
                                                        echo '<h4 class="mb-0"> No Data </h4>';
                                                    }
                                                ?>
                                            </div>

                                            <br>

                                            <!--Modal鏈接FlashMessage-->
                                            <div>
                                                <button type="button" class="btn btn-primary show-msg-btn btn-sm" >Detail</button>
                                            </div>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="showModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Flash Message</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                
                                <table class="table"  id="FlashMessages">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Body</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
                                        $conn = mysqli_connect("localhost", "root","","status_guys_cafe");
                                        if ($conn-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                        }

                                        $sql = "SELECT title, body from messages";
                                        $result = $conn-> query($sql);

                                        if ($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){
                                                echo "<tr><td>". $row["title"] ."</td><td>". $row["body"] ."</td></tr>";
                                            }

                                            echo "</table>";
                                        }

                                        else{
                                            echo "0 result";
                                        }

                                        $conn-> close();
                                    ?>

                                    </tbody>
                                    
                                </table>        

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area" style="height:230px">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->



                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->





    </div>
    <!-- End of Content Wrapper -->

    <!-- End of Page Wrapper -->


    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">

                <div id="success_message"></div>

                <div class="card" style="padding: 15px; overflow:scroll ; overflow-y: hidden;">
                    <div class="card-header" >
                        <h4>
                            Supplier Contact Number
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#AddSupplierModal">Add Supplier</button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="search" placeholder="Search..." autocomplete="off">
                            </div>
                        </div>
                        <table class="table" id="supplier-table">
                            <thead>
                                <tr>
                                    <th class="fw-bold">Name</th>
                                    <th class="fw-bold">Phone Number</th>
                                    <th class="fw-bold">Category</th>
                                    <th class="fw-bold">Edit</th>
                                    <th class="fw-bold">Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


<style>
    #sales {
        background-color: #f1f1f1;
    }

</style>




<!-- Page level plugins -->
<script src="javascript/chart.js"></script>


<!-- Page level custom scripts -->
<script src="javascript/chartarea"></script>
<script src="javascript/chartpie"></script>




@endsection

@section('scripts')
<script>

    $(document).on('click', '.show-msg-btn', function() {
        $('#showModal').modal('show');
    });

    $(document).ready(function() {
        fetchsupplier();

        function fetchsupplier() {
            $.ajax({
                type: "GET"
                , url: "/fetch-supplier"
                , dataType: "json"
                , success: function(response) {
                    // console.log(response);
                    $('#supplier-table tbody').html("");
                    $.each(response.suppliers, function(key, item) {
                        $('#supplier-table tbody').append('<tr>\
                            <td>' + item.SupplierName + '</td>\
                            <td>' + item.PhoneNumber + '</td>\
                            <td>' + item.Category + '</td>\
                            <td><button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm">Edit</button></td>\
                            <td><button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button></td>\
                        \</tr>');
                    });
                }
            });
            $('#search').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        }




  

        $(document).on('click', '.add_supplier', function(e) {
            e.preventDefault();

            $(this).text('Sending..');

            var data = {
                'SupplierName': $('.SupplierName').val()
                , 'PhoneNumber': $('.PhoneNumber').val()
                , 'Category': $('.Category').val()
            , }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST"
                , url: "/supplier"
                , data: data
                , dataType: "json"
                , success: function(response) {
                    // console.log(response);
                    if (response.status == 400) {
                        $('#save_msgList').html("");
                        $('#save_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#save_msgList').append('<li>' + err_value + '</li>');
                        });
                        $('.add_supplier').text('Save');
                    } else {
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#AddSupplierModal').find('input').val('');
                        $('.add_supplier').text('Save');
                        $('#AddSupplierModal').modal('hide');
                        $("#success_message").show().delay(600).fadeOut();
                        fetchsupplier();
                    }
                }
            });

        });

        $(document).on('click', '.editbtn', function(e) {
            e.preventDefault();
            var stud_id = $(this).val();
            // alert(stud_id);
            $('#editModal').modal('show');
            $.ajax({
                type: "GET"
                , url: "/edit-supplier/" + stud_id
                , success: function(response) {
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $("#success_message").show().delay(600).fadeOut();
                        $('#success_message').text(response.message);
                        $('#editModal').modal('hide');
                    } else {
                        // console.log(response.supplier.name);
                        $('#SupplierName').val(response.supplier.SupplierName);
                        $('#PhoneNumber').val(response.supplier.PhoneNumber);
                        $('#Category').val(response.supplier.Category);
                        $('#stud_id').val(stud_id);

                    }
                }
            });
            $('.btn-close').find('input').val('');

        });

        $(document).on('click', '.update_supplier', function(e) {
            e.preventDefault();

            $(this).text('Updating..');
            var id = $('#stud_id').val();
            // alert(id);

            var data = {
                'name': $('#name').val()
                , 'SupplierName': $('#SupplierName').val()
                , 'PhoneNumber': $('#PhoneNumber').val()
                , 'Category': $('#Category').val()
            , }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT"
                , url: "/update-supplier/" + id
                , data: data
                , dataType: "json"
                , success: function(response) {
                    // console.log(response);
                    if (response.status == 400) {
                        $('#update_msgList').html("");
                        $('#update_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#update_msgList').append('<li>' + err_value +
                                '</li>');
                        });
                        $('.update_supplier').text('Update');
                    } else {
                        $('#update_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $("#success_message").show().delay(600).fadeOut();
                        $('#success_message').text(response.message);
                        $('#editModal').find('input').val('');
                        $('.update_supplier').text('Update');
                        $('#editModal').modal('hide');
                        fetchsupplier();
                    }
                }
            });

        });

        $(document).on('click', '.deletebtn', function() {
            var stud_id = $(this).val();
            $('#DeleteModal').modal('show');
            $('#deleteing_id').val(stud_id);
        });


        $(document).on('click', '.delete_supplier', function(e) {
            e.preventDefault();

            $(this).text('Deleting..');
            var id = $('#deleteing_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE"
                , url: "/delete-supplier/" + id
                , dataType: "json"
                , success: function(response) {
                    // console.log(response);
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $("#success_message").show().delay(600).fadeOut();
                        $('#success_message').text(response.message);
                        $('.delete_supplier').text('Yes Delete');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $("#success_message").show().delay(600).fadeOut();
                        $('#success_message').text(response.message);
                        $('.delete_supplier').text('Yes Delete');
                        $('#DeleteModal').modal('hide');
                        fetchsupplier();
                    }
                }
            });
        });
        $(document).on('click', '.closing', function() {
            $('#DeleteModal').modal('hide');
            $('#editModal').modal('hide');
        });

    });

</script>

@endsection
