<!-- cash.blade.php -->
@extends('adlayout')
@section('content')
    <h1>Payment Details</h1>
    <div class="container">
    <div class="card">
    <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>Payment ID</th>
                <th>User ID</th>
                <th>Total Food Price</th>
                <th>Nett Total</th>
                <th>Earned Point</th>
                <th>Discount</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="payment-details">
            @foreach ($paymentDetails as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->userID }}</td>
                    <td>{{ $payment->totalFoodPrice }}</td>
                    <td>{{ $payment->nett_total }}</td>
                    <td>{{ $payment->earnPoint }}</td>
                    <td>{{ $payment->discount }}</td>
                    <td>
                        <button class="btn btn-primary btn-cash-payment" data-payment-id="{{ $payment->id }}">Cash Payment</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
@endsection

@section('scripts')
    <script>
        // AJAX function to handle cash payment
        function performCashPayment(paymentId) {
            $.ajax({
                url: "{{ route('cash.perform.payment') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    payment_id: paymentId
                },
                dataType: "json",
                success: function(response) {
                    // Payment success message or handle as needed
                    alert("Cash payment recorded successfully!");
                    // Remove the payment row from the table after cash payment
                    $('#payment-details').find('[data-payment-id="' + paymentId + '"]').closest('tr').remove();
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        // Attach click event to the "Cash Payment" button
        $(document).on("click", ".btn-cash-payment", function() {
            var paymentId = $(this).data("payment-id");
            performCashPayment(paymentId);
        });
    </script>
@endsection
