@extends('adlayout')
@section('content')
<style>
    #recordSupplier {
        background-color: #f1f1f1;
    }
    #tableBody{
        overflow-y: auto;
        scrollbar-width: none; 
        -ms-overflow-style: none; 
    }

    #tableBody::-webkit-scrollbar {
        display: none;
    }
</style>

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


<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

            <div id="success_message"></div>

            <div class="card" >
                <div class="card-header" >
                    <h4>
                        Supplier Contact Number
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#AddSupplierModal">Add Supplier</button>
                    </h4>
                </div>
                <div class="card-body" id="tableBody">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="search" placeholder="Search..." autocomplete="off">
                        </div>
                    </div>
                    <table class="table" id="supplier-table" >
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










