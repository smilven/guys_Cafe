@extends('layouts.adlayout')
@section('content')


<!-------------------------------这边是create categotry的 modal------------------------------------>
{{-- Add Modal --}}
<div class="modal fade" id="AddCategoryModal" tabindex="-1" aria-labelledby="AddCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddCategoryModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="save_msgList"></ul>

                <div class="form-group mb-3">
                    <label for="food_category">food_category</label>
                    <input type="text" required class="food_category form-control">
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_category">Save</button>
            </div>

        </div>
    </div>
</div>
{{-- Add- Modal --}}
{{-- Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit & Update category Data</h5>
                <button type="button" class="btn-close closing" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <ul id="update_msgList"></ul>

                <input type="hidden" id="stud_id" />

                <div class="form-group mb-3">
                    <label for="">Categor</label>
                    <input type="text" id="food_category" required class="form-control">
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closing" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary update_category">Update</button>
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
                <h5 class="modal-title" id="DeleteModalLabel">Delete category Data</h5>
                <button type="button" class="btn-close closing" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Confirm to Delete Data ?</h4>
                <input type="hidden" id="deleteing_id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closing" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary delete_category">Yes Delete</button>
            </div>
        </div>
    </div>
</div>
{{-- End - Delete Modal --}}



<div class="container" id="pageContent">
    <!-------------------------------这边是display create料的categotry------------------------------------>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">

                <div id="success_message"></div>

                <div class="card">
                    <div class="card-header bg-warning d-flex justify-content-between align-items-center">
                        <h3 class="text-light"> Category</h3>
                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                data-bs-target="#AddCategoryModal">Add Category</button>
                    </div>
                    <div class="card-body" style="padding: 15px; overflow:scroll ; overflow-y: hidden;">
                        <div class="row mb-3">
                           
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="fw-bold">Category</th>
                                    <th class="fw-bold">Edit</th>
                                    <th class="fw-bold">Delete</th>
                                </tr>
                            </thead>
                            <tbody id='category-table-body'>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>









   


{{-- add new FoodMenu modal start --}}
<div class="modal fade" id="addFoodMenuModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New FoodMenu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="post" id="add_FoodMenu_form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">
          
            <div class="my-2">
                <label for="food_id">Food ID</label>
                <input type="text" name="food_id" class="form-control" placeholder="Food ID" autocomplete="off" required>
            </div>
            <div class="my-2">
                <label for="food_name">Food Name</label>
                <input type="text" name="food_name" class="form-control" placeholder="Food Name" autocomplete="off" required>
            </div>
          
        <div class="my-2">
            <label for="food_description">Food Description</label>
            <input type="text" name="food_description" class="form-control" placeholder="Food Description" autocomplete="off" required>
        </div>
        <div class="my-2">
            <label for="food_price">Food Price</label>
            <input type="text" name="food_price" class="form-control" placeholder="Food Price" autocomplete="off" required>
        </div>
        <div class="my-2">
            <label for="food_category">Select Category</label>
            <select name="food_category" id="food_category" class="form-select" required>
                <option value="">Choose The Category</option>
               
        </div>
        <div class="my-2">
            <input type="hidden" name="status" value="1">
        </div>
        
        <div class="my-2">
            <label for="avatar">Select Avatar</label>
            <input type="file" name="avatar" class="form-control" required>
        </div>
    </div>
 
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="add_FoodMenu_btn" class="btn btn-primary">Add Item</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- add new FoodMenu modal end --}}

    {{-- edit FoodMenu modal start --}}
    <div class="modal fade" id="editFoodMenuModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Food Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST" id="edit_FoodMenu_form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="emp_id" id="emp_id">
                    <input type="hidden" name="emp_avatar" id="emp_avatar">
                    <div class="modal-body p-4 bg-light">
                      
                        <div class="my-2">
                            <label for="food_id">Food ID</label>
                                <input type="text" name="food_id" id="food_id" class="form-control" placeholder="Food ID" autocomplete="off" required>
                            </div>

                            <div class="my-2">
                                <label for="food_name">Food Name</label>
                                    <input type="text" name="food_name" id="food_name" class="form-control" placeholder="Food Name" autocomplete="off" required>
                                </div>
                        <div class="my-2">
                            <label for="food_description">Food Description</label>
                            <input type="food_description" name="food_description" id="food_description" class="form-control" placeholder="Food Description" autocomplete="off" required>
                        </div>
                        <div class="my-2">
                            <label for="food_price">Food Price</label>
                            <input type="text" name="food_price" class="form-control" id="food_price" placeholder="Food Price" autocomplete="off" required>
                        </div>
                        <div class="my-2">
                            <select name="food_category" id="food_category" class="form-select" required>
                                <option value="">Choose The Category</option>

                        </div>
                        <div class="my-2">
                            <input type="hidden" name="status" value="1">
                        </div>
                        <div class="my-2">
                            <label for="avatar">Select Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <div class="mt-2" id="avatar">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="edit_FoodMenu_btn" class="btn btn-success">Update FoodMenu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- edit FoodMenu modal end --}}



    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                        <h3 class="text-light">Menu Table</h3>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addFoodMenuModal"><i
                                class="bi-plus-circle me-2"></i>Add New Item</button>
                    </div>
                    <div class="card-body" id="show_all_FoodMenus" style="padding: 15px; overflow:scroll ; overflow-y: hidden;">
                        <h1 class="text-center text-secondary my-5">Loading...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card-body::-webkit-scrollbar {
    display: none;
}

        </style>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 


    <script>
        

        $(function() {

      // add new FoodMenu ajax request
      $("#add_FoodMenu_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_FoodMenu_btn").text('Adding...');
        
        $.ajax({
          url: '/store',
          method: 'POST',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            
            if (response.status == 200) {
              Swal.fire(
                'Added!',
                ' Added Successfully!',
                'success'
              )
              fetchAllFoodMenus();
              
            }
            $("#add_FoodMenu_btn").text('Add Item');
            $("#add_FoodMenu_form")[0].reset();
            $("#addFoodMenuModal").modal('hide');

          }
       });
      });



   

      // edit FoodMenu ajax request
      $(document).on('click', '.editIcon', function(e) {
        console.log('click')
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '{{ route('edit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            console.log(response.food_id);
            console.log(response.food_name);
            console.log(response.food_description);
            console.log(response.food_category);
            console.log(response.food_price);
            console.log(response.avatar);
            $("#food_id").val(response.food_id); 
            $("#food_name").val(response.food_name); 
            $("#food_description").val(response.food_description);
            $("#food_category").val(response.food_category);
            $("#food_price").val(response.food_price);
            $("#avatar").html(
              `<img src="storage/images/${response.avatar}" width="100" class="img-fluid img-thumbnail">`);
            $("#emp_id").val(response.id);
            $("#emp_avatar").val(response.avatar);
          }
        });
      });

      // update FoodMenu ajax request
      $("#edit_FoodMenu_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_FoodMenu_btn").text('Updating...');
        $.ajax({
          url: '{{ route('update')}}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Updated!',
                'FoodMenu Updated Successfully!',
                'success'
              )
              fetchAllFoodMenus();
            }
            $("#edit_FoodMenu_btn").text('Update FoodMenu');  
            $("#edit_FoodMenu_form")[0].reset();
       
            $("#editFoodMenuModal").modal('hide');

            
          }
        });
      });

    

      // delete FoodMenu ajax request
      $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('delete') }}',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                fetchAllFoodMenus();
              }
            });
          }
        })
      });

      // fetch all FoodMenus ajax request
      fetchAllFoodMenus();

      function fetchAllFoodMenus() {
        $.ajax({
          url: '/fetchall', //{{ route('fetchAll') }} 这是原本的
          method: 'get',
          success: function(response) {
            $("#show_all_FoodMenus").html(response);
            $("#tableProduct").DataTable({
              order: [0, 'desc']
            });
          }
        });
      }
    });

    $(document).on('click', '.statusButton', function(e) {
        e.preventDefault();
    
            var button = $(this);
            var foodId = button.data('emp-id');
            var currentStatus = button.data('emp-status');
            $.ajax({
                url: '/toggle-status/' + foodId,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: currentStatus
                },
                success: function(data) {
                    if (data.status == true) {
                        if (data.newStatus == true) {
                            button.text('Available').removeClass('btn-danger').addClass('btn-success');
                            window.alert('Status updated to Available.');
                        } else {
                            button.text('Unavailable').removeClass('btn-success').addClass('btn-danger');
                            window.alert('Status updated to Unavailable.');
                        }
                        button.data('emp-status', data.newStatus);
                    }
                },
                error: function() {
                    window.alert('Failed to toggle status.');
                }
            });
        });
    
    </script>

 
 
<script>
    $('#addFoodMenuModal').on('shown.bs.modal', function() {
        // Make an AJAX request to fetch the categories
        $.ajax({
            url: '/fetch-categories', // Update the URL to your route
            type: 'GET',
            success: function(response) {
                // Handle the response and update the select dropdown options
                var categories = response.categories;
                var selectOptions = '<option value="" disabled selected>Choose The Category</option>';
                categories.forEach(function(category) {
                    selectOptions += '<option value="' + category.food_category + '">' + category.food_category + '</option>';
                });
                $('#addFoodMenuModal #food_category').html(selectOptions);
            },
            error: function(xhr) {
                // Handle the error
                console.log(xhr.responseText);
            }
        });
    });
</script>


<script>
    $('#editFoodMenuModal').on('shown.bs.modal', function() {
        // Make an AJAX request to fetch the categories
        $.ajax({
            url: '/fetch-categories', // Update the URL to your route
            type: 'GET',
            success: function(response) {
                // Handle the response and update the select dropdown options
                var categories = response.categories;
                var selectOptions = '<option value="" disabled selected>Choose The Category</option>';
                categories.forEach(function(category) {
                    selectOptions += '<option value="' + category.food_category + '">' + category.food_category + '</option>';
                });
                $('#editFoodMenuModal #food_category').html(selectOptions);
            },
            error: function(xhr) {
                // Handle the error
                console.log(xhr.responseText);
            }
        });
    });
</script>





















    <style>
        #product {
            background-color: #f1f1f1;
        }

        .tablemenu::-webkit-scrollbar {
            display: none;
        }
    </style>

  
    <script>
        $(document).ready(function() {
        fetchcategory();

        function fetchcategory() {
            $.ajax({
                type: "GET"
                , url: "/categories"
                , dataType: "json"
                , success: function(response) {
                    // console.log(response);
                    $('#category-table-body').html("");
                    $.each(response.categories, function(key, item) {
                        $('#category-table-body').append('<tr>\
                            <td>' + item.food_category + '</td>\
                            <td><button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm">Edit</button></td>\
                            <td><button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button></td>\
                        \</tr>');
                    });
                }
            });
            $('#search').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('#category-table-body').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        }


        $(document).on('click', '.add_category', function(e) {
            e.preventDefault();

            $(this).text('Sending..');
            var data = {
                'food_category': $('.food_category').val()
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST"
                , url: "/Category"
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
                        $('.add_category').text('Save');
                    } else {
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#AddCategoryModal').find('input').val('');
                        $('.add_category').text('Save');
                        $('#AddCategoryModal').modal('hide');
                        $("#success_message").show().delay(600).fadeOut();
                        fetchcategory();
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
                , url: "/edit-category/" + stud_id
                , success: function(response) {
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $("#success_message").show().delay(600).fadeOut();
                        $('#success_message').text(response.message);
                        $('#editModal').modal('hide');
                    } else {
                         //console.log(response.categories.food_category);
                       // console.log(response.categories.)
                        $('#food_category').val(response.categories.food_category);
                        $('#stud_id').val(stud_id);

                    }
                }
            });
            $('.btn-close').find('input').val('');

        });

        $(document).on('click', '.update_category', function(e) {
            e.preventDefault();

            $(this).text('Updating..');
            var id = $('#stud_id').val();
            // alert(id);

            var data = {
            'food_category': $('#food_category').val()
            , }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT"
                , url: "/update-category/" + id
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
                        $('.update_category').text('Update');
                    } else {
                        $('#update_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $("#success_message").show().delay(600).fadeOut();
                        $('#success_message').text(response.message);
                        $('#editModal').find('input').val('');
                        $('.update_category').text('Update');
                        $('#editModal').modal('hide');
                        fetchcategory();
                    }
                }
            });

        });




        $(document).on('click', '.deletebtn', function() {
            var stud_id = $(this).val();
            $('#DeleteModal').modal('show');
            $('#deleteing_id').val(stud_id);
        });


        $(document).on('click', '.delete_category', function(e) {
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
                , url: "/deleteCategory/" + id
                , dataType: "json"
                , success: function(response) {
                  console.log(response);
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $("#success_message").show().delay(600).fadeOut();
                        $('#success_message').text(response.message);
                        $('.delete_category').text('Yes Delete');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $("#success_message").show().delay(600).fadeOut();
                        $('#success_message').text(response.message);
                        $('.delete_category').text('Yes Delete');
                        $('#DeleteModal').modal('hide');
                        fetchcategory();
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