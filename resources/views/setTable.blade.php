@extends('adlayout')
@section('content')

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

{{-- Add Modal --}}
<div class="modal fade" id="addTableModal" tabindex="-1" aria-labelledby="addTableModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTableModalLabel">Add Table</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="save_msgList"></ul>

                <div class="form-group mb-3">
                    <label for="">TableNumber</label>
                    <input type="text" class="TableNumber form-control" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_table">Save</button>
            </div>

        </div>
    </div>
</div>

<div class="container" id="pageContent">
    <center>
        <div class="row" id="Table">

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
                    <button type="button" class="btn btn-primary size" data-bs-toggle="modal" data-bs-target="#qrcodeModal" id="download-qrCode-button">QR CODE</button>




                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="qrcodeModal" tabindex="-1" aria-labelledby="qrcodeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="qrcodeModalLabel">QR Code</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center">
                <div id="qrcode-container"></div>
                <p id="url-text" class="mt-2"></p>
                <button class="btn btn-primary mt-2" id="download-button">Download QR Code</button>
            </div>
        </div>
    </div>
</div>
<!--这个modal是for table的 end-->


<!--这边的是for display ADD TABLE这个button start-->

<button type="button" class="AddBox mb-5 mx-5 bottom  " data-bs-toggle="modal" data-bs-target="#addTableModal">
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

        $(document).on('click', '.add_table', function(e) {
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
                        $('.add_table').text('Save');
                    } else {
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#addTableModal').find('input').val('');
                        $('.add_table').text('Save');
                        $('#addTableModal').modal('hide');
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

        $('#download-qrCode-button').click(function() {
            var tableNumber = $('#Tableinfo h1').text().split(" ")[2];
            console.log(tableNumber);
            var url = "/homeuser?tableNumber=" + tableNumber;

            $('#qrcode-container').empty();

            var qrcode = new QRCode(document.getElementById("qrcode-container"), {
                text: url
                , width: 128
                , height: 128
            , });

            $('#url-text').text("URL: " + url);

            $('#download-button').click(function() {
                // Generate a Data URL for the QR code image
                var qrCodeDataURL = $('#qrcode-container canvas')[0].toDataURL("image/png");

                // Create a temporary <a> element and trigger the download
                var link = document.createElement('a');
                link.download = 'qrcode.png';
                link.href = qrCodeDataURL;
                link.click();
            });

            $('#qrcodeModal').modal('show');

            var dummy = document.createElement("textarea");
            document.body.appendChild(dummy);
            dummy.value = url;
            dummy.select();
            document.execCommand("copy");
            document.body.removeChild(dummy);
        });
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
