@extends('adlayout')
@section('content')
{{-- Add Modal --}}
<style>
    #voucher {
        background-color: #f1f1f1;
    }
</style>

<div class="modal fade" id="AddVoucherModal" tabindex="-1" aria-labelledby="AddVoucherModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddVoucherModalLabel">Add Voucher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="save_msgList"></ul>

                <div class="form-group mb-3">
                    <label for="">Voucher Code</label>
                    <input type="text" required class="code form-control" id="code" name="code">
                </div>
                <div class="form-group mb-3">
                    <label for="">Voucher Amount</label>
                    <input type="text" required class="amount form-control" id="amount" name="amount">
                </div>
                <div class="form-group mb-3">
                    <label for="">Voucher Quantity</label>
                    <input type="text" required class="quantity form-control" id="quantity" name="quantity">
                </div>
                <div class="form-group mb-3">
                    <select name="type" required class="type form-select" id="type">
                        <option value="">Choose The Voucher Type</option>
                        <option value="percent">Percent</option>
                        <option value="fixed">Fixed</option>

                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="">Point Required</label>
                    <input type="text" required class="point form-control" id="point" name="point">
                </div>

                <div class="row form-group mb-3">
                    <label for="">Expiry Date</label>
                    <div class="col">
                        <div class="input-group date">
                            <input type="text" required class="expiry form-control" name="expiry">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_voucher">Save</button>
            </div>



        </div>
    </div>
</div>


{{-- Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit & Update Voucher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <ul id="update_msgList"></ul>

                <input type="hidden" id="vou_id" name="vou_id" />

                <div class="form-group mb-3">
                    <label for="">Voucher Code</label>
                    <input type="text" required class="code form-control" id="edit_code" name="code">
                </div>
                <div class="form-group mb-3">
                    <label for="">Voucher Amount</label>
                    <input type="text" required class="amount form-control" id="edit_amount" name="amount">
                </div>
                <div class="form-group mb-3">
                    <label for="">Voucher Quantity</label>
                    <input type="text" required class="quantity form-control" id="edit_quantity" name="quantity">
                </div>
                <div class="form-group mb-3">
                    <select name="type" required class="type form-select" id="edit_type">
                        <option value="">Choose The Voucher Type</option>
                        <option value="percent">Percent</option>
                        <option value="fixed">Fixed</option>

                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Point Required</label>
                    <input type="text" required class="point form-control" id="edit_point" name="point">
                </div>

                <div class="form-group mb-3">
                    <label for="">Expiry Date</label>
                    <div class="col">
                        <div class="input-group date">
                            <input type="text" class="expiry form-control"  id="edit_expiry"  name="expiry">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary update_voucher">Update</button>
            </div>

        </div>
    </div>
</div>
{{-- Edn- Edit Modal --}}


{{-- Delete Modal --}}
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Voucher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Confirm to Delete Data ?</h4>
                <input type="hidden" id="deleteing_id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary delete_voucher">Yes Delete</button>
            </div>
        </div>
    </div>
</div>
{{-- End - Delete Modal --}}
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

            <div id="success_message"></div>

            <!-- Voucher Table -->
            <div class="card">
                <div class="card-header">
                    <h4>
                        Voucher
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#AddVoucherModal">Add Voucher</button>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Voucher Code</th>
                                <th>Voucher Type</th>
                                <th>Voucher Amount</th>
                                <th>Voucher Quantity</th>
                                <th>Point Required</th>
                                <th>Expiry Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="voucher_tbody">
                            <!-- Your voucher data will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Redemption Table -->
            <div class="card mt-4">
                <div class="card-header">
                    <h4>
                        Redemption Details
                    </h4>
                </div>
                <div class="Redemption-body">
                    <table class="table Redemption-bordered">
                        <thead>
                            <tr>
                                <th>Voucher Code</th>
                                <th>Redemption Code</th>
                                <th>Redemption Date</th>
                                <th>User ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Your redemption data will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
    $(function() {
        $('.date').datepicker();
    });



    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        fetchvoucher();

        function fetchvoucher() {
            $.ajax({
                type: "GET",
                url: "/fetch-vouchers",
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    $('#voucher_tbody').html("");
                    $.each(response.vouchers, function(key, item) {
                        $('#voucher_tbody').append('<tr>\
                                    <td>' + item.id + '</td>\
                                    <td>' + item.code + '</td>\
                                    <td>' + item.type + '</td>\
                                    <td>' + item.amount + '</td>\
                                    <td>' + item.quantity + '</td>\
                                    <td>' + item.point + '</td>\
                                    <td>' + item.expiry + '</td>\
                                    <td><button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm">Edit</button></td>\
                                    <td><button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button></td>\
                                \</tr>');
                    });
                }
            });
        }

        $(document).on('click', '.add_voucher', function(e) {
            e.preventDefault();

            $(this).text('Sending..');

            var data = {
                'code': $('.code').val(),
                'type': $('.type').val(),
                'amount': $('.amount').val(),
                'quantity': $('.quantity').val(),
                'point': $('.point').val(),
                'expiry': $('.expiry').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/vouchers",
                data: data,
                dataType: "json",
                success: function(response) {
                    // console.log(response);
                    if (response.status == 400) {
                        $('#save_msgList').html("");
                        $('#save_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#save_msgList').append('<li>' + err_value + '</li>');
                        });
                        $('.add_voucher').text('Save');
                    } else {
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#AddVoucherModal').find('input').val('');
                        $('.add_voucher').text('Save');
                        $('#AddVoucherModal').modal('hide');
                        fetchvoucher();
                    }
                }
            });

        });


        $(document).on('click', '.editbtn', function(e) {
            e.preventDefault();
            var vou_id = $(this).val();
            // alert(vou_id);
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit-voucher/" + vou_id,
                success: function(response) {
                    if (response.status == 404) {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        //$('#editModal').modal('hide');
                    } else {
                        console.log(response.voucher.id);
                        $('#edit_code').val(response.voucher.code);
                        $('#edit_type').val(response.voucher.type);
                        $('#edit_amount').val(response.voucher.amount);
                        $('#edit_quantity').val(response.voucher.quantity);
                        $('#edit_point').val(response.voucher.point);
                        $('#edit_expiry').datepicker("setDate", new Date(response.voucher.expiry));
                        // Set the expiry date using the datepicker's "setDate" method
                        $('#vou_id').val(vou_id);
                    }
                }
            });

            $('#edit_expiry').datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 0,
                changeMonth: true,
                changeYear: true
            });

            $('.btn-close').find('input').val('');

        });


        $(document).on('click', '.update_voucher', function(e) {
            e.preventDefault();

            $(this).text('Updating..');
            var vou_id = $('#vou_id').val();
            // alert(id);

            var data = {
                'code': $('#edit_code').val(),
                'type': $('#edit_type').val(),
                'amount': $('#edit_amount').val(),
                'quantity': $('#edit_quantity').val(),
                'point': $('#edit_point').val(),
                'expiry': $('#edit_expiry').val(),
            }




            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "/update-voucher/" + vou_id,
                data: data,
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    if (response.status == 400) {
                        $('#update_msgList').html("");
                        $('#update_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#update_msgList').append('<li>' + err_value +
                                '</li>');
                        });
                        $('.update_voucher').text('Update');
                    } else {
                        $('#update_msgList').html("");

                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#editModal').find('input').val('');
                        $('.update_voucher').text('Update');
                        $('#editModal').modal('hide');
                        fetchvoucher();
                    }
                }
            });

        });

        $(document).on('click', '.deletebtn', function() {
            var vou_id = $(this).val();
            $('#DeleteModal').modal('show');
            $('#deleteing_id').val(vou_id);
        });

        $(document).on('click', '.delete_voucher', function(e) {
            e.preventDefault();

            $(this).text('Deleting..');
            var id = $('#deleteing_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/delete-voucher/" + id,
                dataType: "json",
                success: function(response) {
                    // console.log(response);
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_voucher').text('Yes Delete');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_voucher').text('Yes Delete');
                        $('#DeleteModal').modal('hide');
                        fetchvoucher();
                    }
                }
            });
        });

    });
</script>
@endsection
