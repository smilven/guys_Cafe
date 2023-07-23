@extends('adlayout')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
<div class="container">

     <div class="card">
        <div class="card-header">
            <h4>
                Payment Record
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="paymentTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User ID</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Nett Price</th>
                        <th>Payment Method</th>
                    </tr>
                </thead>
                @foreach($paymentDetails as $record)
                <tbody>

                  <td>{{$record -> id  }}</td>
                  <td>{{$record -> userID  }}</td>
                  <td>RM{{$record -> totalFoodPrice  }}</td>
                  <td>RM{{$record -> discount  }}</td>
                  <td>RM{{$record -> nett_total  }}</td>
                  <td>{{$record -> payment_method  }}</td>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        // Initialize DataTables
        var table = $('#paymentTable').DataTable();

        // Load data using AJAX
        loadPaymentData();

        function loadPaymentData() {
            $.ajax({
                url: "{{ route('get-payment-data') }}",
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Clear the existing table data
                    table.clear().draw();

                    // Populate the table with the new data
                    table.rows.add(response).draw();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
    });

    // Blade syntax to pass the $paymentDetails variable from PHP to JavaScript
    var paymentData = @json($paymentDetails);
</script>

<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#paymentTable').DataTable();
    });
</script>
@endsection
