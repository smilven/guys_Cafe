<!-- cash.blade.php -->
@extends('layouts.adlayout')
@section('content')

<style>
    #cash {
        background-color: #f1f1f1;
    }

</style>

<div class="container" id="pageContent">
    <div class="card">
        <div class="card-header" style="background: #108de4">
            <h4 style="color: aliceblue">
                Payment
            </h4>
        </div>
        <div class="card-body" id="tableBody">
            <table class="table" id="paymentTable">
                <thead>
                    <tr>
                        <th>Payment ID</th>
                        <th>Table Number</th>
                        <th>User ID</th>
                        <th>Total Food Price</th>
                        <th>Nett Total</th>
                        <th>Earned Point</th>
                        <th>Discount</th>
                        <th>Order</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="payment-details">
                    @foreach ($paymentDetails as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->tableNumber }}</td>
                        <td>{{ $payment->userID }}</td>
                        <td>{{ $payment->totalFoodPrice }}</td>
                        <td>{{ $payment->nett_total }}</td>
                        <td>{{ $payment->earnPoint }}</td>
                        <td>{{ $payment->discount }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-{{ $payment->id }}">
                                View Orders
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-cash-payment" data-payment-id="{{ $payment->id }}">Cash Payment</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @foreach ($paymentDetails as $payment)
    <div class="modal fade" id="modal-{{ $payment->id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $payment->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable custom-modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLabel-{{ $payment->id }}">Order Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Food</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Requirement</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                @foreach ($myreceipt as $receipt)
                                <tbody id="displayConfirmFoodDetail" data-receipt-id="{{ $receipt->id }}">
                                    @if ($receipt->userID == $payment->userID)
                                    <tr>
                                        <td>{{ $receipt->food_name }}</td>
                                        <td>{{ $receipt->food_price }}</td>
                                        <td>{{ $receipt->quantity }}</td>
                                        <td>{{ $receipt->food_requirement }}</td>
                                        <td>
                                            <a href="#" onclick="DeleteSubOrder({{$receipt->id}}); return false;" role="button">
                                                <i class="bi bi-x-lg"></i>
                                            </a>
                                        </td>

                                    </tr>
                                    @endif
                                </tbody>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

<style>
    .custom-modal-dialog {
        max-width: 600px;
    }

</style>
@endsection

@section('scripts')
<script>

        // Attach click event to the "Cash Payment" button
        $(document).on("click", ".btn-cash-payment", function() {
        var paymentId = $(this).data("payment-id");
      
        // Show the confirmation dialog
        var confirmed = confirm("Are you sure you want to proceed with the cash payment?");
        
        if (confirmed) {
            console.log(paymentId);
            // User clicked "OK", proceed with the cash payment
            performCashPayment(paymentId);
        } else {
            console.log(paymentId);
            // User clicked "Cancel", do nothing or show a message
        }
    });

    // AJAX function to handle cash payment
    function performCashPayment(paymentId) {
        $.ajax({
            url: "{{ route('cash.perform.payment') }}"
            , type: "POST"
            , data: {
                _token: "{{ csrf_token() }}"
                , payment_id: paymentId
            }
            , dataType: "json"
            , success: function(response) {
                // Payment success message or handle as needed
                alert("Cash payment recorded successfully!");
                // Remove the payment row from the table after cash payment

                $('#payment-details').find('[data-payment-id="' + paymentId + '"]').closest('tr').remove();
            }
            , error: function(error) {
                console.log(error);
            }
        });
    }


 

    function DeleteSubOrder(id) {
        console.log("DeleteSubOrder called with id:", id);
        if (confirm('Are you sure you want to delete?')) {
            $.ajax({
                type: "GET"
                , url: "deleteSubOrder/" + id
                ,success: function(response) {
    var receiptId = id; // Extract receipt ID from the response if needed

    // Assuming 'response' is a JSON object containing updated payment details
    var updatedPaymentDetails = response.updatedPaymentDetails;

    // Update the <tbody> content with the new payment details
    var tbody = $("#payment-details");
    tbody.empty(); // Clear existing content

    // Loop through updatedPaymentDetails and append rows to the tbody
    for (var i = 0; i < updatedPaymentDetails.length; i++) {
        var payment = updatedPaymentDetails[i];
        var row = '<tr>' +
            '<td>' + payment.id + '</td>' +
            '<td>' + payment.tableNumber + '</td>' +
            '<td>' + payment.userID + '</td>' +
            '<td>' + payment.totalFoodPrice + '</td>' +
            '<td>' + payment.nett_total + '</td>' +
            '<td>' + payment.earnPoint + '</td>' +
            '<td>' + payment.discount + '</td>' +
            '<td>' +
            '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-' + payment.id + '">View Orders</button>' +
            '</td>' +
            '<td>' +
            '<button class="btn btn-primary btn-cash-payment" data-payment-id="' + payment.id + '">Cash Payment</button>' +
            '</td>' +
            '</tr>';
        tbody.append(row);
    }
    
    // Hide the corresponding receipt detail based on receiptId
    $("#displayConfirmFoodDetail[data-receipt-id='" + receiptId + "']").hide();
}

                , error: function(response) {
                    console.log("Deletion error:", response);
                }
            });

        }
    }

</script>


<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>






<style>
    #tableBody {
        overflow-y: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    #tableBody::-webkit-scrollbar {
        display: none;
    }

</style>
<script>
    $(document).ready(function() {
        $('#paymentTable').DataTable({});
    });

</script>
@endsection
