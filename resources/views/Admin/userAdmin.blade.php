@extends('layouts.adlayout')
@section('content')

<!-- Add the CSRF token meta tag in the head section -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Your existing table and other content here -->


<script>
    $(document).ready(function() {
        // Add the CSRF token to the headers of all AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Handle edit button click event
        $('.edit-btn').on('click', function() {
            var userId = $(this).data('user-id');
            var phone = $(this).data('phone');
            var point = $(this).data('point');

            // Set the values in the modal
            $('#userId').val(userId);
            $('#phone').val(phone);
            $('#point').val(point);

            // Show the modal
            $('#editModal').modal('show');
        });

        // Handle form submission
        $('#editForm').on('submit', function(e) {
            e.preventDefault();

            var userId = $('#userId').val();
            var phone = $('#phone').val();
            var point = $('#point').val();

            // Make an AJAX request
            $.ajax({
                url: '/users/' + userId,
                method: 'PUT',
                data: {
                    phone: phone,
                    point: point,
                },
                success: function(response) {
                    // Update the UI here if necessary
                    // For example, update the phone and point columns in the table
                    $('#phone-' + userId).text(phone);
                    $('#point-' + userId).text(point);

                    // Hide the modal
                    $('#editModal').modal('hide');
                },
                error: function(error) {
                    // Handle error if necessary
                    console.log(error);
                }
            });
        });
    });
</script>

<div class="container" id="pageContent">
    <div class="card">
    <div class="card-header" style="background: #ffc1c1">
        <h4>
            User Record
        </h4>
    </div>
    <div class="card btable" style="padding: 15px; overflow: scroll; overflow-y: hidden;">
   
        <table class="table" id="userTable">
            <thead style="font-weight:700">
              <tr>
                <td>User ID</td>
                <td>User Phone Number</td>
                <td>Point</td>
                <td>Edit Account</td>
              </tr>
            </thead>
            <tbody>
              @foreach ($usersWithTypeZero as $user)
              <tr>
                <td>
                    <p class="fw-normal mb-1" id="phone-{{ $user->id }}">{{ $user->id }}</p>
                  </td>
                <td>
                  <p class="fw-normal mb-1" id="phone-{{ $user->id }}">{{ $user->phone }}</p>
                </td>
                <td>
                  <p class="fw-normal mb-1" id="point-{{ $user->id }}">{{ $user->point }}</p>
                </td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded edit-btn"
                    data-user-id="{{ $user->id }}" data-phone="{{ $user->phone }}"
                    data-point="{{ $user->point }}">Edit</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
    </div>
</div>
</div>
<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="editForm">
                <div class="container" style="padding: 20px;">
                    <center>
                        <h4 style="margin-bottom: 10px;">Edit User</h4>
                    </center>
                    <!-- Hidden input to store the user ID -->
                    <input type="hidden" id="userId">

                    <!-- Phone input -->
                    <div class="form-outline mb-4">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" class="form-control">
                    </div>

                    <!-- Point input -->
                    <div class="form-outline mb-4">
                        <label for="point">Point</label>
                        <input type="text" id="point" class="form-control">
                    </div>

                    <input type="submit" class="btn btn-secondary btn-block" style="border-radius: 12px;" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>



<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    jQuery(document).ready(function($) {
      $('#userTable').DataTable();
    });
  </script>
  
<style>
    #user {
        background-color: #f1f1f1;
    }

</style>
@endsection
