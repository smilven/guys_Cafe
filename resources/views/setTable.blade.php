@extends('adlayout')
@section('content')


{{-- Add Modal --}}
<div class="modal fade" id="AddSupplierModal" tabindex="-1" aria-labelledby="AddSupplierModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddSupplierModalLabel">Add Table</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="save_msgList"></ul>

                <div class="form-group mb-3">
                    <label for="">TableNumber</label>
                    <input type="text"  class="TableNumber form-control" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_supplier">Save</button>
            </div>

        </div>
    </div>
</div>
 
<div class="container" id="pageContent">
    <center>
        <div class="row" id="Table" >

            <!--这边的是for display桌子号码的 start-->
          
            <div class="col-4 mt-5"> 
             
            </div>
         
            <!--这边的是for display桌子号码的 end-->


        </div>
    </center>
</div>




<!--这个modal是for table的 strat-->
<div class="modal fade" id="Tableinfo" tabindex="-1" aria-labelledby="Tableinfo" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="table-number-heading">Table Number</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row">
          <div class="col">
            <button type="button" class="btn btn-warning size" id="Open-Menu-button" onclick="openNewWindow()">Open Menu</button>
        </div>
          <div class="col">
            <button type="button" class="btn btn-primary size" id="copy-url-button">Copy URL</button>
          </div>
        </div>
      </div>
    </div>
  </div>

 
<!--这个modal是for table的 end-->


<!--这边的是for display ADD TABLE这个button start-->

<button type="button" class="AddBox mb-5 mx-5 bottom  " data-bs-toggle="modal" data-bs-target="#AddSupplierModal">
    Add Table
</button>

<!--这边的是for display ADD TABLE这个button end-->


 

<script>
   $(document).ready(function() {
    fetchTable();

    function fetchTable() {
        $.ajax({
            type: "GET"
            , url: "/fetch-table"
            , dataType: "json"
            , success: function(response) {
                $('#Table').html("");
                $.each(response.tables, function(key, data) {
                    $('#Table').append('<div class="col-4 mt-5" data-id="' + data.id + '";><a href="#"class="fas fa-times" onclick="DeleteTable(' + data.id + '); return false;" role="button"></a><div class="box" data-bs-toggle="modal" data-bs-target="#Tableinfo" data-table-number="' + data.TableNumber + '"><p>Table ' + data.TableNumber + '</p></div>');
                });
            }
        });
    }

    $(document).on('click', '.add_supplier', function(e) {
        e.preventDefault();

        $(this).text('Sending..');

        var data = {
            'TableNumber': $('.TableNumber').val()              
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST"
            , url: "/SaveTable"
            , data: data
            , dataType: "json"
            , success: function(response) {
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
                    fetchTable();
                }
            }
        });
    });

  


    $(document).on('click', '.box', function() {
        var tableNumber = $(this).data('table-number');
        $('#Tableinfo h1').text('Table Number ' + tableNumber);
    });

    $('#Open-Menu-button').click(function() {
        document.getElementById('Open-Menu-button').addEventListener('click', function() {
    var tableNumber = document.getElementById('Tableinfo').getElementsByTagName('h1')[0].innerText.split(" ")[2];
    var url = "/homeuser?tableNumber=" + tableNumber;
    window.open(url, '_blank');
  });
        
    });

    $('#copy-url-button').click(function() {
        var tableNumber = $('#Tableinfo h1').text().split(" ")[2];
        var url = "/homeuser?tableNumber=" + tableNumber;
        var dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = url;
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
        alert("URL copied to clipboard: https://966b-2404-160-8060-da0f-2c00-f960-2ab2-42cd.ngrok-free.app" + url);
    })
});
        function DeleteTable(id) {
                if (confirm('Are you sure you want to delete?')) {
                    $.ajax({
                        type: "GET"
                        , url: "deleteTable/" + id
                        , success: function() {
                            // Remove the row from the table
                            $('[data-id="' + id + '"]').remove();
                        }
                    });
                }
            }
</script>








<style>
    #table {
        background-color: #f1f1f1;
    }

    .box {
        width: 100px;
        height: 100px;
        color: #000000;
        background: rgb(236, 175, 101);
        border-radius: 10px;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .size {
        width: 100%;
    }

    .AddBox {
        width: 100px;
        height: 50px;
        color: #000000;
        background: rgb(254, 140, 1);
        border-radius: 10px;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        float: right;
        font-size: 14px;
    }

    p {
        margin: 0;
    }

    .form-outline .form-control~.form-notch {
        padding: 2px;

    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .fa-times {
        position: absolute;
        margin-top: 5px;
        margin-left: 35px;
        cursor: pointer;
        color: #000000;
    }

    .fa-times:hover {
        color: darkgrey;
    }

</style>


@endsection
