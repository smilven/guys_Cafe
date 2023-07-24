@extends('adlayout')
@section('content')




<style>
    #general {
        background-color: #f1f1f1;
    }
</style>
<div class="card">

  <div class="card-body">

    <legend>Flash Message</legend>

    <form id="flashMessageForm" method="post" action="{{ route('smessage') }}">
        @CSRF
        @method('post')


        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" placeholder="Title" class="form-control" id="" aria-describedby="title">
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input type="text" name="body" placeholder="Body" class="form-control" id="" aria-describedby="body">
        </div>

        <br>

        <div>
            <input type="submit" class="btn btn-primary" value="Save Flash Message">
        </div>

        <br>

        <div id="flashMessageContainer">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><h6><b>Title</b></h6></th>
                        <th scope="col"><h6><b>Body</b></h6></th>
                        <th scope="col"><h6><b>Edit</b></h6></th>
                        <th scope="col"><h6><b>Delete</b></h6></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $message)
                    <tr>
                        <td><h6>{{$message->title}}</h6></td>
                        <td><h6>{{$message->body}}</h6></td>
                        <td>
                            <button type="button" value="{{$message->id}}" class="btn btn-primary editbtn btn-sm">Edit</button>
                        </td>
                        <td>
                            <button type="button" value="{{$message->id}}" class="btn btn-danger deletebtn btn-sm">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </form>

  </div>

</div>



<!-- Modal -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <form action="{{ url('update-message') }}" method="POST" class="editForm">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" id="id" />

            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" id="title" required class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Body</label>
                    <input type="text" name="body" id="body" required class="form-control">
                </div>
            </div>
        

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!--Delete Modal-->

<div class="modal fade" id="DeleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <form action="{{ url('delete-message') }}" method="POST" class="deleteForm" id="delete_id">
            @csrf
            @method('DELETE')

            <legend>Comfirm to Delete?</legend>
            <input type="hidden" id="deleteing_id" name="delete_id">

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!--END-->
<script>
    $(document).ready(function(){
       
        $(document).on('click', '.deletebtn', function(e) {
            e.preventDefault();
            var id = $(this).val();
            $('#DeleteModal').modal('show');
            $('#deleteing_id').val(id);
            deleteForm = $(this).closest('form');
        });
    
        $('.deleteForm').submit(function(event) {
            event.preventDefault();
    
            var formData = $(this).serialize();
    
            $.ajax({
                type: 'DELETE',
                url: $(this).attr('action'),
                data: formData,
                success: function(response) {
                    var deletedRow = $('#flashMessageContainer').find('button[value="' + response.message.id + '"]').closest('tr');
                    deletedRow.remove();
                    $('#DeleteModal').modal('hide');
                },
                error: function(error) {
                    alert('Error deleting message.');
                }
            });
        });
                
            $(document).on('click','.editbtn' , function(){
    
                var id = $(this).val();
                $('#editModal').modal('show');
    
                $.ajax({
                    type:"GET",
                    url:"/edit-message/"+id,
                    success: function(response){
                        //console.log(response);
                        $('#title').val(response.message.title);
                        $('#body').val(response.message.body);
                        $('#id').val(response.message.id);
    
                    }
                });
            });
    
            $('#flashMessageForm').submit(function(event) {
                event.preventDefault();
    
                var formData = $(this).serialize();
    
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function(response) {
                        var newRow = '<tr>' +
                            '<td><h6>' + response.message.title + '</h6></td>' +
                            '<td><h6>' + response.message.body + '</h6></td>' +
                            '<td>' +
                            '<button type="button" value="' + response.message.id + '" class="btn btn-primary editbtn btn-sm">Edit</button>' +
                            '</td>' +
                            '<td>' +
                            '<button type="button" value="' + response.message.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button>' +
                            '</td>' +
                            '</tr>';
    
                        $('#flashMessageContainer tbody').append(newRow);
                        
                        $('#flashMessageForm')[0].reset();
                        
                    },
                    
                    error: function(error) {
                    }
                });
            });
    
            $('.editForm').submit(function(event) {
                event.preventDefault();
    
                var formData = $(this).serialize();
    
                $.ajax({
                    type: 'PUT',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function(response) {
                        var rowToUpdate = $('#flashMessageContainer').find('button[value="' + response.message.id + '"]').closest('tr');
                        var newRow = '<tr>' +
                            '<td><h6>' + response.message.title + '</h6></td>' +
                            '<td><h6>' + response.message.body + '</h6></td>' +
                            '<td>' +
                            '<button type="button" value="' + response.message.id + '" class="btn btn-primary editbtn btn-sm">Edit</button>' +
                            '</td>' +
                            '<td>' +
                            '<button type="button" value="' + response.message.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button>' +
                            '</td>' +
                            '</tr>';
                        rowToUpdate.replaceWith(newRow);
                        $('#editModal').modal('hide');
                    },
                });
            });
    
    });
    </script>
@endsection








