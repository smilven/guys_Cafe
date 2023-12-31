@extends('layouts.adlayout')

@section('content')
{{-- Add Modal --}}







<div class="container" id="pageContent">

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
                    <div class="d-sm-flex align-items-center justify-content-between" style="display: flex;">
                        @php
                        $type = 1; 
                    
                        $company_name = \App\Models\User::find($type)->name;
                    @endphp
                    
                    <h2 style="font-weight: 900">{{ $company_name }}</h2> <!-- Display the name here -->

                       
                    </div>
                    <p style="font-weight: 600">Home/Dashboard</p>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-10 mb-8">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Yearly)</div>
                                            <?php
                                                $serverName = "localhost";
                                                $userName = "root";
                                                $password = "";
                                                $dbName = "status_guys_cafe";
                                                
                                                $con = mysqli_connect($serverName, $userName, $password, $dbName);
                                                
                                                $dash_message_query = "SELECT SUM(nett_total) AS total_sum FROM payment_records";
                                                $dash_message_query_run = mysqli_query($con, $dash_message_query);
                                                
                                                if ($dash_message_query_run) {
                                                    $row = mysqli_fetch_assoc($dash_message_query_run);
                                                    $total_sum = $row['total_sum'];
                                                    echo '<h4 class="mb-0">RM' . $total_sum . '</h4>';
                                                } else {
                                                    echo '<h4 class="mb-0"> No Data </h4>';
                                                }
                                            ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-cash fa-2x text-gray-300"></i>
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
                                                Total Payment Record
                                            </div>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $serverName = "localhost";
                                                    $userName = "root";
                                                    $password ="";
                                                    $dbName = "status_guys_cafe";

                                                    $con = mysqli_connect($serverName,$userName,$password, $dbName);

                                                    $dash_message_query = "SELECT * from payment_records";
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
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total
                                                User
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <?php
                                                    $serverName = "localhost";
                                                    $userName = "root";
                                                    $password = "";
                                                    $dbName = "status_guys_cafe";

                                                    $con = mysqli_connect($serverName, $userName, $password, $dbName);

                                                    $dash_message_query = "SELECT * FROM users";
                                                    $dash_message_query_run = mysqli_query($con, $dash_message_query);
                                                    $message_total = mysqli_num_rows($dash_message_query_run);

                                                    $total_minus_two = $message_total - 2;

                                                    if ($total_minus_two > 0) {
                                                        echo '<h4 class="mb-0">' . $total_minus_two . '</h4>';
                                                    } else {
                                                        echo '<h4 class="mb-0"> No Data </h4>';
                                                    }
                                                ?>

                                                <div class="col">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-people-fill fa-2x text-gray-300"></i>


                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-10 mb-8 show-msg-btn">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Reminder Message
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

                                                    $dash_message_query = "SELECT * from events";
                                                    $dash_message_query_run = mysqli_query($con,$dash_message_query);

                                                    if($message_total = mysqli_num_rows($dash_message_query_run))
                                                    {
                                                        echo '<h4 class="mb-0">  ' .$message_total.' </h4>';
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

                                            </div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <style>
                        #FlashMessages #title{
                            font-weight: 900;
                        }
                        </style>
                    <!-- Modal -->
                    <div class="modal fade" id="showModal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reminder Message</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">

                                    <table class="table" id="FlashMessages">
                                        <thead >
                                            <tr >
                                                <th><strong>Title</strong></th>
                                                <th><strong>Start Date</strong></th>
                                                <th><strong>End Date</strong></th>
                                            </tr>
                                        </thead>

                                        <tbody class="table-group-divider">

                                            <?php
                                        $conn = mysqli_connect("localhost", "root","","status_guys_cafe");
                                        if ($conn-> connect_error){
                                            die("Connection failed:". $conn-> connect_error);
                                        }

                                        $sql = "SELECT title,start,end from events";
                                        $result = $conn-> query($sql);

                                        if ($result-> num_rows > 0){
                                            while ($row = $result-> fetch_assoc()){
                                                echo "<tr><td id=title>". $row["title"] ."</td><td>". $row["start"] ."</td><td>". $row["end"] ."</td></tr>";
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
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>

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
                                    <i class="bi bi-bar-chart-fill" style="margin-right: 5px;"></i>
                                    <h6 class="m-0 font-weight-bold text-primary flex-grow-1">Earnings Overview</h6>
                                </div>
                                
                                <!-- Card Body -->
                                <div class="card-body">

                                    <canvas id="chart"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-8">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <i class="bi bi-pie-chart-fill" style="margin-right: 5px;"></i>
                                    <h6 class="m-0 font-weight-bold text-primary flex-grow-1">Food Analysis</h6>
                                </div>
                                
                                <!-- Card Body -->
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="foodPieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->


                    <script>
                        // Get the data from the PHP variables passed to the view
                     
                        const foodDatasets = @json($foodDatasets);
                        const foodLabels = @json($foodLabels);
                    
            
                    
                        // Create the second pie chart for food counts
                        const foodCtx = document.getElementById('foodPieChart').getContext('2d');
                        const foodPieChart = new Chart(foodCtx, {
                            type: 'pie',
                            data: {
                                labels: foodLabels,
                                datasets: foodDatasets,
                            },
                        });
                    </script>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

    <!-- End of Page Wrapper -->





    <div class="container">



        <div class="card">
            <div class="card-header d-flex align-items-center">
                <i class="bi bi-credit-card-fill" style="font-size: 1.5rem;"></i>
                <h4 style="margin-left: 10px; margin-top:7px; font-size: 1.5rem;">Payment Record</h4>
            </div>
            
            <div class="card-body" id="paymentRecordTable">
                <table class="table table-bordered" id="paymentTable">
                    <thead>
                        <tr>
                            <th>Record ID</th>
                            <th>User ID</th>
                            <th>Total Price</th>
                            <th>Discount</th>
                            <th>Nett Price</th>
                            <th>Payment Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($paymentDetails as $record)
                        <tr>
                            <td>{{ $record->id }}</td>
                            <td>{{ $record->userID }}</td>
                            <td>RM{{ $record->totalFoodPrice }}</td>
                            <td>RM{{ $record->discount }}</td>
                            <td>RM{{ $record->nett_total }}</td>
                            <td>{{ $record->payment_method }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>


<style>
    #sales {
        background-color: #f1f1f1;
    }
</style>



<script>
    var ctx = document.getElementById('chart').getContext('2d');
    var userChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: {!! json_encode($datasets) !!}
        },
    });
</script>



<script>
    $(document).on('click', '.show-msg-btn', function() {
        $('#showModal').modal('show');
    });

</script>


@endsection

@section('scripts')

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>



<style>
    #paymentRecordTable {
        overflow-y: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
</style>




<script>
    $(document).ready(function() {
        $('#paymentTable').DataTable();
    });
</script>
@endsection