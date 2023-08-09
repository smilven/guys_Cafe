<?php
if(isset($_GET['tableNumber'])){
$tableNumber = $_GET['tableNumber'];
}else{
    $tableNumber = 1;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guys Café</title>
    <link rel="icon" href="images/logo.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/location.js') }}"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>


    <style>
        #userTableInfo {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            z-index: 0;
            font-size: 18px;
            line-height: 30px;
        }

        .progressBar li {
            list-style-type: none;
            float: left;
            width: 33%;
            position: relative;
            text-align: center;
        }

        .progressBar li:before {
            content: " ";
            line-height: 30px;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: block;
            text-align: center;
            margin: 0 auto 10px;
            background-color: white
        }

        .progressBar li:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #ddd;
            top: 15px;
            left: -50%;
            z-index: -1;
        }

        .progressBar li:first-child:after {
            content: none;
        }

        .progressBar li.active {
            color: dodgerblue;
        }

        .progressBar li.active:before {
            border-color: dodgerblue;
            background-color: dodgerblue
        }

        .progressBar li.active:after {}



        html {
            scroll-behavior: smooth;
        }

        li {
            display: inline-block;
        }

        #menu {
            transition: all 0.2s ease-out;
        }

        div.navbar-start {

            overflow-x: auto;
            white-space: nowrap;
            scroll-behavior: smooth;
        }


        div.navbar-start::-webkit-scrollbar {
            display: none;

        }



        div.navbar-start a {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            font-size: medium;
            width: 150px;
            color: black;
            border-radius: 15px;
            height: 55px;
            padding-top: 10px;

        }

        div.navbar-start {
            margin: 0 auto;
        }

        div.navbar-start img {
            width: 40px;
            height: 30px;
            object-fit: cover;
            margin: -3px 10px 0 0;
        }

        div.navbar-start a:hover {
            background-color: #777;
        }

        .col {
            z-index: 999999;
            height: 8vh;
            font: small;
            background: white;
        }

        .offcanvas-backdrop {
            background-color: transparent;
        }


        .offcanvas,
        .offcanvas-lg,
        .offcanvas-md,
        .offcanvas-sm,
        .offcanvas-xl,
        .offcanvas-xxl {
            --mdb-offcanvas-height: 50vh;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            z-index: 0;
        }

        .fixed-bottom {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            background-color: white;
        }

        .fixed-top {
            background: white;

        }

        .table[type=button]:not(:disabled),
        .table[type=reset]:not(:disabled),
        .table[type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer;
            border-radius: 30px;
        }


        table img {
            vertical-align: middle;
            border-style: none;
            border-radius: 100px;
            margin-top: 50px;
        }

        .col:hover {
            background: #ececec;
        }

        .bi {
            font-size: 25px;
        }

        table p {
            font-size: 25px;
        }

        .small,
        small {
            font-size: 80%;
            padding: 0;
            font-weight: 400;
            z-index: 0;
        }

        section img {

            border-radius: 20px;
            margin-top: 20px;


        }

        section p {
            line-height: 10px;
        }

        .list-group ul {
            margin-top: 200px;

        }

        #scrollfood {
            margin-bottom: 70px;
        }

        .list-group-item-action.mb-1 {
            border-radius: 0px;
        }

        .image {
            max-width: 120px;
            max-height: 120px;
            width: auto;
            height: auto;
        }

        p {
            word-break: break-all;
        }
    </style>

    <nav>
        <div class="fixed-top">
            <center>
         

                @php
                    $type =1;
                    $company_name = \App\Models\User::find($type)->name;
                @endphp
                <h3 class="mt-2">{{$company_name}}</h3>
            </center>
            <p style="display: flex; align-items: center; justify-content: center; position: relative;">
                <span id="TableNumber">Table Number: <?php echo $tableNumber; ?></span>
                    <a href="{{ route('logout') }}" style="position: absolute; right: 0; margin-right: 15px;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="logoutBtn">
                        <i class="bi bi-box-arrow-right"></i>


                    </a>
                
            </p>
       
            <input type="search" class="form-control border" placeholder="Search... P001" aria-label="Search"
                aria-describedby="search-addon" id="search-input" style="width: 90%; margin:10px auto;
              background:transparent;
             border-radius:20px;
            height:35px;
                border: 1px solid transparent;
                background:#f6f3f3;
                color:black;" autocomplete="off" />

            <div class="navbar-start" id="menu">
                @foreach ($data1 as $type)
                <li> <a href="#section{{$type->id}}" class="border">{{$type->food_category}}</a></li>
                @endforeach

            </div>

          
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <style>
#logoutBtn{
   
    color: black; /* Set the color to black (or any color you prefer) */
    text-decoration: none; /* Remove underline */
  
}
                .message-container {
                    display: flex;
                    justify-content: center;
                }

                .message,
                .message2,
                .message3,
                .message4,
                .message5,
                .message6{
                    position: absolute;
                    display: none;
                    text-align: center;
                    margin: 10px auto;
                    padding: 10px;
                    background-color: #ffc107;
                    /* Change the background color as desired */
                    color: #fff;
                    font-weight: bold;
                    width: 50%;
                    animation: fade-in 0.5s ease-out, fade-out 0.5s 1.5s ease-in-out;
                    border-radius: 10px;
                    z-index: 1;

                }
            </style>
            <div class="message-container ">
                <div id="message" class="message">
                    Added
                </div>
                <div id="message2" class="message2">
                    Order sent to kitchen.
                </div>

                <div id="message3" class="message3">
                    Has been removed.
                </div>
                <div id="message4" class="message4">
                    Done Payment Thank You.
                </div>
                <div id="message5" class="message5" style="background: red">
                    Your Point Is Not Enough.
                </div>
                <div id="message6" class="message6" style="background: red">
                    Sorry, this voucher is out of stock and cannot be redeemed at the moment.
                </div>
            </div>
        </div>
    </nav>






    </div>

    <div class="list-group">
        <ul class="list-group list-group-light list-group-small">

            <div id="scrollfood" data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true"
                class="scrollspy-example-2" tabindex="0">

                @foreach($data1 as $type)
                <section id="section{{ $type->id }}">

                    @foreach ($data2 as $foodMenu)
                    @if ($foodMenu['status'] == true)
                    @if ($foodMenu->food_category == $type->food_category)

                    <button class="list-group-item list-group-item-action mb-1" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasBottom{{ $foodMenu->id }}"
                        aria-controls="offcanvasBottom{{ $foodMenu->id }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{asset('storage/images/')}}/{{$foodMenu->avatar}}" class="image">
                                </div>

                                <div class="col-6 mt-4">

                                    <p style="font-weight: 750;text-transform: uppercase;font-size:18px;">
                                        {{$foodMenu->food_id}}</p>

                                    <p style="font-weight: 550;">{{$foodMenu->food_name}}</p>
                                    <p style="line-height: 15px;">{{$foodMenu->food_description}}</p>
                                    <p>RM{{$foodMenu->food_price}}</p>
                                </div>
                            </div>
                        </div>


                    </button>

                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom{{ $foodMenu->id }}"
                        aria-labelledby="offcanvasBottomLabel{{ $foodMenu->id }}">
                        <form data-action="{{route('add.to.cart')}}" method="POST"
                            id="add-project-form-{{ $foodMenu->id }}">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" id="tableNumber" name="tableNumber"
                                    value="<?php echo $tableNumber; ?>" class="form-control">
                            </div>
                            <div class="offcanvas-header">
                                <input type="hidden" name="foodName" id="foodName" value="{{ $foodMenu->food_name }}">

                                <h4 class="offcanvas-title" id="foodName" data-food-name="{{ $foodMenu->food_name }}">{{
                                    $foodMenu->food_name }}</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">

                                <div class="container" style="margin-top:30px;">
                                    <h6>Description:</h6>
                                    <p id="foodDescription" data-food-description="{{ $foodMenu->food_description }}">{{
                                        $foodMenu->food_description }}</p>

                                    <input type="hidden" name="food_price" id="food_price"
                                        value="{{ $foodMenu->food_price }}">

                                        <input type="hidden" name="paymentID" id="paymentID"
                                        value="">

                                    <h6>Requirement:</h6>

                                    <textarea style="resize:none;overflow:hidden; width:100%;"
                                        id="food_requirement" name="food_requirement"></textarea>



                                    <div class="d-flex mt-2 mb-2 justify-content-center">
                                        <input type="hidden" name="food_name" id="food_name"
                                            value="{{ $foodMenu->food_name }}">

                                        <button type="button" class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                        <input id="quantity_food" min="1" name="quantity_food" value="1" type="number"
                                            class="form-control form-control-sm" onKeyDown="return false"
                                            style="width: 15%; margin:5px 0" />

                                        <button type="button" class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="hidden" name="food_id" id="food_id" value="{{ $foodMenu->id }}">

                                    <center> <button type="submit" data-bs-dismiss="offcanvas" aria-label="Close"
                                            class="btn btn-warning UserMenu" style="width: 100%;"
                                            onclick="addToCart()">Add to Cart</button>

                                    </center>
                        </form>

                    </div>


            </div>
    </div>
    @endif
    @endif
    @endforeach



    </section>
    @endforeach


    </div>
    </ul>
    </div>
    <script src="{{ asset('js/project.js') }}"></script>

    <script>
        function incrementValue() {
            var input = document.getElementById('quantity_food');
            input.stepUp();
        }

        function decrementValue() {
            var input = document.getElementById('quantity_food');
            input.stepDown();
        }
        const searchInput = document.getElementById('search-input');
        const foodItems = document.querySelectorAll('.list-group-item');

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.trim().toLowerCase();
            for (let i = 0; i < foodItems.length; i++) {
                const foodItem = foodItems[i];
                const foodId = foodItem.querySelector('p:first-of-type').textContent.toLowerCase();
                const foodName = foodItem.querySelector('p:nth-of-type(2)').textContent.toLowerCase();
                if (foodName.includes(searchTerm) || foodId.includes(searchTerm)) {
                    foodItem.style.display = 'block';
                } else {
                    foodItem.style.display = 'none';
                }
            }
        });

    </script>


    <div class="fixed-bottom shadow-4-strong">
        <div class="container-fluid">

            <div class="row">
                <div class="col text-center" style="border-top-left-radius: 20px;" data-bs-toggle="offcanvas"
                    data-bs-target="#menu">
                    <i class="bi bi-menu-button-wide"></i>
                    <strong> Menu</strong>
                </div>

                <div class="col text-center" data-bs-toggle="offcanvas" data-bs-target="#cook"
                    aria-controls="offcanvasBottom">
                    <i class="bi bi-clipboard-check"></i>
                    <strong>Food</strong>
                </div>
                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="cook" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Food</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small text-center">
                        <div class="offcanvas-body small text-center">
                            <div class="container mb-9">
                                <img id="statusImage" src="https://thumbs.dreamstime.com/b/chef-cartoon-giving-thumb-up-isolated-white-background-176171655.jpg"
                                    alt="GCLogo" style="width:200px; height: 200px;">
                        
                                <div class="row">
                                    <div class="col-xs-12 col-md-8 offset-md-2">
                                        <div class="wrapper-progressBar">
                                            <ul class="progressBar">
                                                <li class="{{ $status === 'placeorder' ? 'active' : '' }}">Places Order</li>
                                                <li class="{{ $status === 'preparing' ? 'active' : '' }}">Preparing</li>
                                                <li class="{{ $status === 'delivered' ? 'active' : '' }}">Food Delivered</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        


                    </div>
                </div>

                <div class="col text-center" data-bs-toggle="offcanvas" data-bs-target="#cart"
                    aria-controls="offcanvasBottom"><i class="bi bi-basket"></i>
                    <strong>Cart</strong>
                </div>

                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="cart" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Cart</h5>


                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <div class="row" id="Table">
                        </div>


                        <form data-action="{{ route('place') }}" method="POST" id="PlaceOrderForm">
                            @csrf
                            <button type="submit" class="btn btn-primary mb-8 UserMenu" style="width:100%">Place
                                Order</button>
                        </form>



                    </div>
                </div>




                <style>
                    #Table a {
                        color: #050709;
                        text-decoration: none;
                        background-color: transparent;
                    }

                    .requirement-container {
                        word-wrap: break-word; // Enable word wrapping for the requirement container
                    }

                    .requirement-text {
                        word-break: break-all; // Allow long words to break and wrap within the requirement text
                    }


                    .payment_tbody_width {
                        width: 70%;
                    }

                    tbody {
                        line-height: 25px;
                        font-size: 15px;
                    }
                </style>





                <script>
                    $(document).ready(function() {

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        fetchAllOrder();

                        function fetchAllOrder() {
                            $.ajax({
                                type: "GET"
                                , url: "/fetchAllorder"
                                , dataType: "json"
                                , success: function(response) {
                                    $('#Table').html("");
                                    $.each(response.mycarts, function(key, data) {
                                        var deleteUrl = "{{ route('mycart.delete', ':id') }}";
                                        deleteUrl = deleteUrl.replace(':id', data.id);

                                        var listItem = $('<li class="list-group-item d-flex justify-content-between align-items-center"></li>');

                                        var itemContainer = $('<div class="d-flex align-items-start"></div>');
                                        itemContainer.append('<img src="storage/images/' + data.avatar + '" width="100">');
                                        var itemDetails = $('<div class="ms-3"></div>');
                                        itemDetails.append('<span style="font-size:15px;"><strong>Food Name:' + data.food_name + '</strong></span><br>');
                                        itemDetails.append('<span>RM' + data.lastest_food_price + '</span><br>');
                                        itemDetails.append('<span>Quantity:' + data.quantity + '</span><br>');
                                        var requirementContainer = $('<div class="requirement-container"></div>');
                                        requirementContainer.append('<span>Requirement:</span>');
                                        var requirementSpan = $('<span class="requirement-text">' + data.food_requirement + '</span>');
                                        requirementContainer.append(requirementSpan);
                                        itemDetails.append(requirementContainer);
                                        itemContainer.append(itemDetails);

                                        var buttonContainer = $('<div class="d-flex align-items-end"></div>');
                                        var editButton = $('<button type="button" style="border: none; background-color: transparent; float: right;"><i class="fas fa-edit"></i></button>');

                                        // Create a variable to store the updated requirement value
                                        var updatedRequirement = data.food_requirement;

                                        editButton.click(function() {
                                            var requirementInput = $('<input type="text">');
                                            requirementInput.val(updatedRequirement);
                                            requirementInput.addClass('no-border');
                                            requirementInput.blur(function() {
                                                updatedRequirement = requirementInput.val();
                                                requirementSpan.text(updatedRequirement);
                                                requirementInput.replaceWith(requirementSpan);

                                                // Make an AJAX request to update the requirement in the database
                                                var updateUrl = "/mycart/update/" + data.id;
                                                $.ajax({
                                                    type: "POST"
                                                    , url: updateUrl
                                                    , data: {
                                                        requirement: updatedRequirement
                                                    }
                                                    , success: function(response) {
                                                        console.log(response);
                                                        fetchAllPayment();
                                                    }
                                                    , error: function(error) {
                                                        console.log(error);
                                                    }
                                                });
                                            });
                                            requirementSpan.replaceWith(requirementInput);

                                            // Auto-focus the input field
                                            requirementInput.focus();
                                        });

                                        buttonContainer.append(editButton);

                                        var deleteLink = $('<a href="javascript:void(0)" id="delete-mycart" data-url="' + deleteUrl + '" data-id="ITEM_ID"><i class="fas fa-trash"></i></a>');
                                        buttonContainer.append(deleteLink);

                                        listItem.append(itemContainer);
                                        listItem.append(buttonContainer);

                                        $('#Table').append(listItem);
                                    });
                                }
                            });
                        }


                        fetchAllPayment()

                        function fetchAllPayment() {
                            $.ajax({
                                type: "GET"
                                , url: "/fetchAllPayment"
                                , dataType: "json"
                                , success: function(response) {
                                    if (response && response.payments) {
                                        var totalFoodPrice = 0;
                                        var totalQuantity = 0;

                                        $('#table_payment').html("");

                                        $.each(response.payments, function(key, data) {
                                            var listItem = '<ul class="list-group list-group-flush">' +
                                                '<li class="list-group-item d-flex justify-content-between align-items-center">' +
                                                '<div class="d-flex align-items-start">' +
                                                '<div class="ms-3">' +
                                                '<div class="fw-bold mb-1">Food Name: ' + data.food_name + '</div>' +
                                                '<div class="fw-bold mb-1">Food Price:RM ' + data.lastest_food_price + '</div>' +
                                                '<div class="fw-bold mb-1">Quantity: ' + data.quantity + '</div>' +
                                                '<div class="fw-bold">Food Requirement: ' + data.food_requirement + '</div>' +

                                                '</div>' +
                                                '</div>' +
                                                '</li>' +
                                                '</ul>' + '<br>';

                                            $('#table_payment').append(listItem);


                                        });




                                        console.log(response.payments);
                                    }

                                }
                                , error: function(xhr, status, error) {
                                    console.error("AJAX Error:", status, error);
                                    $('#table_payment').html("<p>Error fetching payments.</p>");
                                }
                            });
                        }




                        fetchAllPaymentDetail()


                        // Function to fetch the updated payment details after deletion
                        function fetchAllPaymentDetail() {
                            $.ajax({
                                type: "GET"
                                , url: "/fetchAllPaymentDetail"
                                , dataType: "json"
                                , success: function(response) {
                                    if (response && response.payment_details) {
                                        $('#table_tbody_payment').html("");

                                        $.each(response.payment_details, function(key, data) {
                                            var listItem = '<tr>' +
                                                '<td><strong>Total Price</strong> </td>' +
                                                '<td>RM' + data.totalFoodPrice + '</td>' +
                                                '</tr>' +
                                                '<tr>' +
                                                '<tr>' +
                                                '<td><strong>Earn Point</strong> </td>' +
                                                '<td>' + data.earnPoint + '</td>' +
                                                '</tr>' +
                                                '<td><strong>Discount</strong></td>' +
                                                '<td id="discountAmount">' + data.discount + '</td>' +
                                                '</tr>' +

                                                '<tr>' +
                                                '<td><strong>Nett Total</strong> </td>' +
                                                '<td id="nett_total">RM' + data.nett_total + '</td>' +
                                                '</tr>';
                                            $('#table_tbody_payment').append(listItem);
                                        });

                                        // Update the totalFoodPrice value after receiving the updated data
                                        var totalFoodPrice = response.totalFoodPrice;
                                        $('#total_food_price_value').text(totalFoodPrice);
                                    }

                                }
                                , error: function(xhr, status, error) {
                                    console.error("AJAX Error:", status, error);
                                }
                            });
                        }



                      
                        $(document).ready(function() {
    // Create a flag to keep track of whether the coupon has been applied
    let couponApplied = false;

    $('#couponForm').submit(function(e) {
        e.preventDefault(); // Prevent default form submission

        // Check if the coupon has already been applied
        if (couponApplied) {
            // Show a message or take any appropriate action to indicate that the coupon has already been applied
            $('#responseContainer').html('<p>Coupon has already been applied.</p>');
            return; // Stop further processing
        }

        // Get the coupon code from the input field
        const couponCode = $('#coupon_code').val();

        // Make the AJAX request to storeCoupon endpoint
        $.ajax({
            type: 'POST',
            url: "/coupon",
            data: {
                coupon_code: couponCode,
                _token: "{{ csrf_token() }}" // Pass the CSRF token with the request
            },
            dataType: 'json',
            success: function(response) {
                // Handle the success response
                const message = response.message;
                const amount = response.amount;

                // Update the response container with the success message and amount
                $('#responseContainer').html(`<p>${message}</p>`);

                // Update the discount amount value after receiving the updated data
                $('#discountAmount').text('RM' + amount); // Assuming the "amount" is the discount amount.

                // Calculate and update the nett_total value after applying the coupon
                const oldNettTotal = parseFloat($('#nett_total').text().replace('RM', ''));
                const newNettTotal = (oldNettTotal - amount).toFixed(2); // Ensure the result has two decimal places
                $('#nett_total').text('RM' + newNettTotal);

                // Set the flag to indicate that the coupon has been applied
                couponApplied = true;
            },
            error: function(error) {
                // Handle the error response
                const errorMessage = error.responseJSON.message;

                // Update the response container with the error message
                $('#responseContainer').html(`<p>${errorMessage}</p>`);
            }
        });
    });


// Function to remove the applied coupon
function removeCoupon() {
    // Make the AJAX request to removeCoupon endpoint
    $.ajax({
        type: 'POST',
        url: "{{ route('coupon.remove') }}", // Replace this with the actual route for removing the coupon
        data: {
            _token: "{{ csrf_token() }}" // Pass the CSRF token with the request
        },
        dataType: 'json',
        success: function(response) {
            // Handle the success response
            const message = response.message;

            // Update the response container with the success message
            $('#responseContainer').html(`<p>${message}</p>`);

            // Reset the coupon-related UI elements
            $('#discountAmount').text('RM0.00'); // Assuming the "discountAmount" element displays the discount amount.
            
            // Calculate and update the nett_total value after removing the coupon
            const oldNettTotal = parseFloat($('#nett_total').text().replace('RM', ''));
            const discountAmount = parseFloat(response.amount);
            const newNettTotal = (oldNettTotal + discountAmount).toFixed(2); // Ensure the result has two decimal places
            $('#nett_total').text('RM' + newNettTotal);

            // Set the flag to indicate that the coupon has been removed
            couponApplied = false;
            $('#coupon_code').val('');
        },
        error: function(error) {
            console.log(error);
            // Handle the error response
            const errorMessage = error.responseJSON.message;

            // Update the response container with the error message
            $('#responseContainer').html(`<p>${errorMessage}</p>`);
        }
    });
}

// Event listener for the remove coupon button
$('#removeCouponBtn').click(function() {
    $('#coupon_code').val('');

    removeCoupon();

});



});




                        var form = '[id^="add-project-form-"]';

                        $('[id^="add-project-form-"]').on('submit', function(event) {
                            event.preventDefault();

                            var url = $(this).attr('data-action');
                            var form = $(this); // Store the form reference here
                            $.ajax({
                                url: '/add.to.cart'
                                , method: 'POST'
                                , data: new FormData(this)
                                , dataType: 'JSON'
                                , contentType: false
                                , cache: false
                                , processData: false
                                , success: function(response) {
                                    if (response.status == 200) {
                                        form.find('textarea').val('');
                                        form.find('#quantity_food').val('1');
                                        $('.offcanvas-bottom').offcanvas('hide');
                                        fetchAllOrder();
                                        // Fetch the payment and payment details after a successful cart update
                                        fetchAllPayment();
                                        fetchAllPaymentDetail();

                                        console.log('successlah');
                                    }
                                }
                                , error: function(response) {
                                    console.log('fail');
                                    console.log(response); // Log the error response for further investigation
                                }
                            });
                        });




                        /*------------------------------------------
                        --------------------------------------------
                        When click user on Show Button
                        --------------------------------------------
                        --------------------------------------------*/


                        $('body').on('click', '#delete-mycart', function() {
                            var deleteUrl = $(this).data('url');
                            var itemId = $(this).data('id');

                            // Update the userURL with the specific ID.
                            var userURL = deleteUrl.replace('{id}', itemId);

                            var liObj = $(this).closest('li');

                            // Make sure to use HTTPS for the AJAX request URL
                            //userURL = userURL.replace('http://', 'https://');

                            $.ajax({
                                url: userURL
                                , type: 'DELETE'
                                , dataType: 'json'
                                , success: function(data) {
                                    liObj.fadeOut(200, function() {
                                        $(this).remove();
                                    });
                                    var message = document.getElementById("message3");
                                    message.style.display = "block";
                                    setTimeout(function() {
                                        message.style.display = "none";
                                    }, 2000);

                                    // Fetch the updated payment list after successful deletion
                                    fetchAllPayment();
                                    fetchAllPaymentDetail();

                                }
                                , error: function(response) {
                                    // Handle error response
                                }
                            });
                        });




                    });


                    $(document).ready(function() {
                        var form = '#PlaceOrderForm';

                        $(form).on('submit', function(event) {
                            event.preventDefault();
                           // Check if the table is empty before proceeding with the form submission
 

    var url = $(this).attr('data-action');

              
    $.ajax({
    url: '/home/place',
    method: 'POST',
    data: new FormData(this),
    dataType: 'JSON',
    contentType: false,
    cache: false,
    processData: false,
    success: function(response) {
        console.log("Success");

     
        $('#Table').fadeOut('slow', function() {
            $(this).empty().fadeIn('slow');
        });

        var message = document.getElementById("message2");
        message.style.display = "block";
        setTimeout(function() {
            message.style.display = "none";
        }, 2000);
    }, error: function(response) {

                                }
                            });
                        });


                        var form = '#cardinfo';

                        $(form).on('submit', function(event) {

                            event.preventDefault();
                            var url = $(this).attr('data-action');
                            var expiry_date = $('#expiry_date').val();
                            var cvv = $('#cvv').val();
                            var cardholder_name = $('#cardholder_name').val();
                            var card_number = $('#card_number').val();
                            var redemption_code = $('#redemption_code').val();

                            $.ajax({
                                url: '/home/store'
                                , method: 'POST'
                                , data: {
                                    _token: '{{ csrf_token() }}'
                                    , expiry_date: expiry_date
                                    , cvv: cvv
                                    , cardholder_name: cardholder_name
                                    , card_number: card_number
                                , }
                                , dataType: 'JSON'
                                , success: function(response) {
                                    console.log("Success Good");
                                    console.log(response);
                                    var message = document.getElementById("message4");
                                    message.style.display = "block";
                                    setTimeout(function() {
                                        message.style.display = "none";
                                    }, 2000);

                                    $('#total_food_price_value').fadeOut('slow', function() {
                                        $(this).empty().fadeIn('slow');
                                    });
                                    $('#table_payment').fadeOut('slow', function() {
                                        $(this).empty().fadeIn('slow');
                                    });
                                    $('#table_tbody_payment').fadeOut('Slow', function() {
                                        $(this).empty().fadeIn('slow');
                                    })
                                    $('#cardinfo')[0].reset(); // Reset the form to clear the values
                                    // $('#delete-mycart').click(); 
                                    $('#PlaceOrderForm').submit();

                                    $('#coupon_code').val('');
                                    fetchAllMyPoint()
                                },







                                error: function(response) {
                                    console.log("Fail Bad");
                                    console.log(response);
                                    alert('Your Payment Error')
                                }
                            });
                        });




                        fetchAllMyPoint()
                        // Function to fetch and update user's points
                        function fetchAllMyPoint() {
                            $.ajax({
                                type: "GET"
                                , url: "/fetchAllMyPoint"
                                , dataType: "json"
                                , success: function(response) {
                                    if (response && response.users) {
                                        console.log(response); // Check the response in the browser console

                                        $('#userTableInfo').html("");

                                        $.each(response.users, function(key, data) {
                                            var listItem = '<div>' +
                                                '<span><strong>User:</strong> </span>' +
                                                '<span>' + data.name + '</span>' +
                                                '</div>' +
                                                '<div>' +
                                                '<span><strong>Point:</strong> </span>' +
                                                '<span id="userPoints"> ' + data.point + '</span>' +
                                                '</div>';
                                            $('#userTableInfo').append(listItem);
                                        });

                                        // Update the totalFoodPrice value after receiving the updated data
                                        var totalFoodPrice = response.totalFoodPrice;
                                    }
                                }
                                , error: function(xhr, status, error) {
                                    console.error("AJAX Error:", status, error);
                                }
                            });
                        }



                        fetchRedemptionCode()


                        // Function to fetch the updated payment details after deletion
                        function fetchRedemptionCode() {
                            $.ajax({
                                type: "GET"
                                , url: "/fetchRedemptionCode"
                                , dataType: "json"
                                , success: function(response) {
                                    if (response && response.redemptions) {
                                        $('#redemptionCode').html("");

                                        $.each(response.redemptions, function(key, data) {
                                            var listItem = '<li class="list-group-item d-flex justify-content-between align-items-center mb-2" style="background: rgb(149 203 255);">' +
                                                '<div class="row">' +
                                                '<div class="col-3">' +
                                                '<img src="https://t4.ftcdn.net/jpg/03/31/50/87/360_F_331508755_eDTtcgYlNmjxC7MZIsRgXGsARgkigSaB.jpg" width="80px" height="80px" style="object-fit: cover; border-radius: 50%;">' +
                                                '</div>' +
                                                '<div class="col-9">' +
                                                '<div class="infor" style="color: white;">' +
                                                '<h4>Voucher RM' + data.amount + '</h4>' +
                                                '<button type="button" class="btn btn-info btn-sm UserVoucher">Code: ' + data.redemptionCode + '</button>' +
                                                '</div>' +
                                                '</div>' +
                                                '</div>' +
                                                '</li>';

                                            $('#redemptionCode').append(listItem);
                                        });
                                        
                                    }
                                }
                                , error: function(xhr, status, error) {
                                    console.error("AJAX Error:", status, error);
                                }
                            });
                        }

                        var form = '[id^="VoucherRedemption"]';
                        $(form).on('submit', function(event) {
    event.preventDefault();
    var url = $(this).attr('data-action');

    $.ajax({
        url: '/VoucherRedemption',
        method: 'POST',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function(response) {
            console.log("Redemption");

            if (response.status === 'error') {
                // Handle the error response when the voucher quantity is zero
                alert(response.message);
            } else {
                // Access the updated points from the response
                var updatedPoints = response.userPoints;
                var redemptionCode = response.redemptionCode; // Assuming 'redemptionCode' is returned in the AJAX response
                // Update the displayed points on the page without reloading
                $('#userPoints').text(updatedPoints); // Update the points correctly without concatenating with existing points
                fetchRedemptionCode()
            }
        },
        error: function(response) {
    if (response.status === 400) {
        // Handle the specific error when the HTTP status code is 400 (Bad Request)
        var message = document.getElementById("message5");
        message.style.display = "block";
        setTimeout(function() {
            message.style.display = "none";
        }, 2000);
    }   if (response.status === 405) {
        // Handle the specific error when the HTTP status code is 400 (Bad Request)
        var message = document.getElementById("message6");
        message.style.display = "block";
        setTimeout(function() {
            message.style.display = "none";
        }, 3000);
    } 
}
    });
});




                    });

                </script>









                <div class="col text-center" data-bs-toggle="offcanvas" data-bs-target="#pay"
                    aria-controls="offcanvasBottom">
                    <i class="bi bi-receipt"></i>
                    <strong>Pay</strong>
                </div>



                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="pay" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Payment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">

                        <div class="container mb-8">
                            <table class="table_payment" id="table_payment" style="width: 100%">


                            </table>

                            <div class id="table_tbody_payment_div">
                                <table class="table" id="table_tbody_payment" style="width: 100%">


                                </table>
                            </div>

                            <form id="couponForm">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="coupon_code" name="coupon_code"
                                        placeholder="Voucher Code" aria-label="Recipient's username"
                                        aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" id="removeCouponBtn" type="button"><i class="bi bi-x-lg" style="font-size: 1px;"></i>
                                        </button>
                                    <button class="btn btn-outline-secondary" type="submit"
                                        id="button-addon2">Apply</button>

                                </div>

                            </form>

                            <div id="responseContainer"></div>

                            <h6 style="margin-left: 20px; margin-top: 25px;">Payment Method :</h6>

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <i class="fas fa-hand-holding-usd"></i>Cash Payment
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Please inform the cashier at the counter that you
                                            would like
                                            to
                                            pay by cash.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <i class="far fa-credit-card"></i>Debit/Credit Card
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>Card Information <img
                                                            src="https://w7.pngwing.com/pngs/678/81/png-transparent-visa-and-master-cards-mastercard-money-foothills-florist-business-visa-visa-mastercard-text-service-orange.png"
                                                            width="60px" height="25px"></h5>
                                                    <form id="cardinfo" method="POST"
                                                        data-action="{{ route('store.card.info') }}">
                                                        @csrf

                                                       <div class="form-group">
                                <input type="hidden" id="tableNumber" name="tableNumber"
                                    value="<?php echo $tableNumber; ?>" class="form-control">
                            </div>

                                                        <div class="row  mt-2">
                                                            <div class="col">

                                                                <div class="form-outline">
                                                                    <input type="number" id="card_number"
                                                                        class="form-control" required />
                                                                    <label class="form-label" for="form6Example1">Card
                                                                        Number</label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row  mt-2">
                                                            <div class="col">
                                                                <div class="form-outline">
                                                                    <input type="text" id="expiry_date"
                                                                        class="form-control" required maxlength="5"
                                                                        placeholder="MM/YY">
                                                                    <label class="form-label" for="form6Example1">MM /
                                                                        YY</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-outline">
                                                                    <input type="number" id="cvv" class="form-control"
                                                                        required />
                                                                    <label class="form-label"
                                                                        for="form6Example2">Cvv</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col">
                                                                <div class="form-outline">
                                                                    <input type="text" id="cardholder_name"
                                                                        class="form-control" required
                                                                        autocomplete="off" />
                                                                    <label class="form-label" for="form6Example1">Card
                                                                        Holder
                                                                        Name</label>
                                                                </div>
                                                            </div>


<input type="hidden" value="" id="redemption_code" class="redemption_code">
                                                            <button type="submit" class="btn btn-primary"
                                                                id="checkoutBtn" style="width: 100%;">Checkout</button>
                                                    </form>

                                                    <script>
                                                            // Get the input element by its id
    const cardholderNameInput = document.getElementById('cardholder_name');

// Add an event listener for the 'input' event
cardholderNameInput.addEventListener('input', function (event) {
    // Get the input value and remove any non-alphabetic characters using regular expression
    const filteredValue = event.target.value.replace(/[^a-zA-Z ]/g, '');
    // Update the input value with the filtered value
    event.target.value = filteredValue;
});
                                                        document.getElementById('cvv').addEventListener('input', function() {
                                                            if (this.value.length > 3) {
                                                                this.value = this.value.slice(0, 3); // Truncate to 3 characters
                                                            }
                                                        });
                                                    
   // Get the input element by its id
   const expiryDateInput = document.getElementById('expiry_date');

// Add an event listener for the 'input' event
expiryDateInput.addEventListener('input', function () {
    // Get the input value and remove any non-numeric characters using regular expression
    const filteredValue = this.value.replace(/\D/g, '');

    // Format the input value as MM/YY
    const formattedValue = filteredValue.replace(/^(\d\d)(\d\d)$/g, '$1/$2');

    // Update the input value with the formatted value
    this.value = formattedValue;
});

                                                        document.getElementById('card_number').addEventListener('input', function() {
                                                            if (this.value.length > 16) {
                                                                this.value = this.value.slice(0, 16); // Truncate to 3 characters
                                                            }
                                                        });

                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <script>
                                // jQuery code to handle coupon form submission
                                $(document).ready(function() {
                                    $("#couponForm").submit(function(event) {
                                        event.preventDefault();
                                        var redemptionAbleCode = $("#coupon_code").val();
                                        $("#redemption_code").val(redemptionAbleCode);
                                        // Now submit the cardinfo form
                                    });
                                });
                            </script>




                        </div>

                    </div>

                </div>
            </div>
            <div class="col text-center" style="border-top-right-radius: 20px;" data-bs-toggle="offcanvas"
                data-bs-target="#User" aria-controls="offcanvasBottom">
                <i class="bi bi-person"></i>
                <strong>User</strong>
            </div>

            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="User" aria-labelledby="offcanvasBottomLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasBottomLabel">User</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                </div>

                <div class="offcanvas-body small">

                    <div class="container">
                        <div class="table table-borderless" id="userTableInfo">




                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-mdb-toggle="modal"
                            data-mdb-target="#staticBackdrop" style="width: 100%">
                            View Your Order History
                        </button>
                      
                        <!-- Modal -->
                        <div class="modal-dialog modal-dialog-scrollable">

                            <div class="modal fade" id="staticBackdrop" data-mdb-backdrop="false"
                                data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog mt-5">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel"> Order History</h5>

                                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div id="modal-orders-container">
                                                @foreach ($paymentRecords->groupBy('userID') as $userID => $histories)
                                                    <div class="accordion" id="accordionExample">
                                                        @foreach ($histories as $index => $history)
                                                            @php
                                                            $accordionId = 'accordion_' . $userID . '_' . $index;
                                                            @endphp
                                        
                                                            <div class="card">
                                                                <div class="card-header mb-2" id="heading_{{ $accordionId }}">
                                                                    <h5 class="mb-0">
                                                                        <button class="btn btn-link card-header mb-2" id="heading_{{ $accordionId }}" type="button"
                                                                            data-toggle="collapse" data-target="#collapse_{{ $accordionId }}" aria-expanded="true"
                                                                            aria-controls="collapse_{{ $accordionId }}">
                                                                            Order {{ $history->id }}
                                                                        </button>
                                                                    </h5>
                                                                </div>
                                                                <div id="collapse_{{ $accordionId }}" class="collapse" aria-labelledby="heading_{{ $accordionId }}"
                                                                    data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                        <table class="table table-borderless">
                                                                            <!-- Your table content -->
                                                                            <thead>
                                                                                <tr>
                                                                                    <td>Food Name<td>
                                                                                        <td>Quantity<td>
                                                                                            <td>Food Price<td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($history->orders as $order)
                                                                                    <tr>
                                                                                        <td>{{ $order->food_name }}</td>
                                                                                        <td>{{ $order->quantity }}</td>
                                                                                        <td>{{ $order->food_price }}</td>
                                                                                        <!-- Add other cells for other columns if needed -->
                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                        
                                                                        <table class="table table-borderless">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Total Price :</td>
                                                                                    <td>RM{{ $history->nett_total }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Payment Method :</td>
                                                                                    <td>{{ $history->payment_method }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Point Earned :</td>
                                                                                    <td>{{ $history->earnPoint }}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        


                                        <div class="modal-footer">
                                            <button type="hidden" class="btn btn-secondary hidden"
                                                data-mdb-dismiss="modal" hidden>Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <style>
                            .modal-dialog-scrollable .modal-content {
                                max-height: calc(80vh - 1rem);
                                overflow: hidden;
                                margin-top: 80px;
                            }
                        </style>


                        <!-- Your existing HTML content -->

                        <div id="orders-container">
                            <!-- Payment records will be loaded here through AJAX -->
                        </div>

                        <!-- Add the following script to handle AJAX request for payment records -->
                        <script>
                            function loadOrderHistory() {
                                $.ajax({
                                    url: "{{ route('get.payment.records') }}",
                                    type: 'GET',
                                    dataType: 'json',
                                    success: function(response) {
                                        var paymentRecordsHtml = '';
                        
                                        $.each(response.paymentRecords, function(index, history) {
                                            var accordionId = "accordion_" + history.userID + "_" + index;
                        
                                            paymentRecordsHtml += '<div class="card">';
                                            paymentRecordsHtml += '    <div class="card-header mb-2" id="heading_' + accordionId + '">';
                                            paymentRecordsHtml += '        <h5 class="mb-0">';
                                            paymentRecordsHtml += '            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse_' + accordionId + '" aria-expanded="true" aria-controls="collapse_' + accordionId + '">';
                                            paymentRecordsHtml += '                Order ' + history.id;
                                            paymentRecordsHtml += '            </button>';
                                            paymentRecordsHtml += '        </h5>';
                                            paymentRecordsHtml += '    </div>';
                                            paymentRecordsHtml += '    <div id="collapse_' + accordionId + '" class="collapse" aria-labelledby="heading_' + accordionId + '" data-parent="#modal-orders-container">';
                                            paymentRecordsHtml += '        <div class="card-body">';
                                            paymentRecordsHtml += '            <table class="table">';
                                            paymentRecordsHtml += '                <thead>';
                                            paymentRecordsHtml += '                    <tr>';
                                            paymentRecordsHtml += '                        <td><strong>Food Name</strong></td>';
                                            paymentRecordsHtml += '                        <td><strong>Food Price</strong></td>';
                                            paymentRecordsHtml += '                        <td><strong>Quantity</strong></td>';
                                            // Add other table headers if needed
                                            paymentRecordsHtml += '                    </tr>';
                                            paymentRecordsHtml += '                </thead>';
                                            paymentRecordsHtml += '                <tbody>';
                                            $.each(history.orders, function(i, order) {
                                                paymentRecordsHtml += '                    <tr>';
                                                paymentRecordsHtml += '                        <td>' + order.food_name + '</td>';
                                                paymentRecordsHtml += '                        <td>' + order.food_price + '</td>';
                                                paymentRecordsHtml += '                        <td>' + order.quantity + '</td>';
                                                // Add other cells for other columns if needed
                                                paymentRecordsHtml += '                    </tr>';
                                            });
                                            paymentRecordsHtml += '                </tbody>';
                                            paymentRecordsHtml += '            </table>';
                                            paymentRecordsHtml += '            <hr>'; 
                                            paymentRecordsHtml += '            <table class="table table-borderless">';
                                            paymentRecordsHtml += '                <tbody>';
                                            paymentRecordsHtml += '                    <tr>';
                                            paymentRecordsHtml += '                        <td>Total Price :</td>';
                                            paymentRecordsHtml += '                        <td>RM' + history.nett_total + '</td>';
                                            paymentRecordsHtml += '                    </tr>';
                                            paymentRecordsHtml += '                    <tr>';
                                            paymentRecordsHtml += '                        <td>Payment Method :</td>';
                                            paymentRecordsHtml += '                        <td>' + history.payment_method + '</td>';
                                            paymentRecordsHtml += '                    </tr>';
                                            paymentRecordsHtml += '                    <tr>';
                                            paymentRecordsHtml += '                        <td>Point Earned :</td>';
                                            paymentRecordsHtml += '                        <td>' + history.earnPoint + '</td>';
                                            paymentRecordsHtml += '                    </tr>';
                                            paymentRecordsHtml += '                </tbody>';
                                            paymentRecordsHtml += '            </table>';
                                            paymentRecordsHtml += '        </div>';
                                            paymentRecordsHtml += '    </div>';
                                            paymentRecordsHtml += '</div>';
                                        });
                        
                                        $('#modal-orders-container').html(paymentRecordsHtml);
                                    },
                                    error: function(error) {
                                        console.error(error);
                                    }
                                });
                            }
                        
                            // Load order history immediately when the modal is shown
                            $('#staticBackdrop').on('shown.bs.modal', function() {
                                loadOrderHistory();
                            });
                        
                        </script>
                        
                        <h4 class="text-center"> Your Voucher</h4>

                        <ul style="padding-left: 0; margin-bottom: 20px; margin-top: 20px;" class="text-center"
                            id="redemptionCode">

                        </ul>
                        <hr>
                        <ul style="padding-left: 0; margin-bottom: 80px;" class="text-center">
                            <h4>Redeemable Voucher</h4>
                            @foreach ($data3 as $voucher)
                            <li class="list-group-item d-flex justify-content-between align-items-center mb-2"
                                style="background: orange;">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="https://thumbs.dreamstime.com/b/chef-cartoon-giving-thumb-up-isolated-white-background-176171655.jpg"
                                            width="80px" height="80px" style="object-fit: cover; border-radius: 50%;">
                                    </div>
                                    <div class="col-9">
                                        <div class="infor" style="color: white;">
                                            <h4>Voucher RM{{ $voucher->amount }}</h4>
                                            <form data-action="{{ route('VoucherRedemption') }}" method="POST"
                                                id="VoucherRedemption{{ $voucher->id }}">
                                                @csrf
                                                <input type="hidden" name="Voucher[{{ $voucher->id }}]"
                                                    id="Voucher[{{ $voucher->id }}]" value="{{ $voucher->id }}">
                                                <button type="submit" class="btn btn-danger btn-sm UserVoucher"
                                                    data-voucher-id="{{ $voucher->id }}"
                                                    data-redemption-code="{{ $voucher->redemptionCode }}"
                                                    data-points="{{ $voucher->point }}">Points {{ $voucher->point
                                                    }}</button>
                                            </form>
                                            <span class="redemption-code" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>


                    </div>






                </div>
            </div>
        </div>

    </div>
    </div>







    <script>
        var menu = document.getElementById("menu");
        var scrollLeft = 500;

        window.addEventListener("scroll", function() {
            var sections = document.querySelectorAll("[id^='section']");

            for (var i = 0; i < sections.length; i++) {
                var section = sections[i];
                var rect = section.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    var li = document.querySelector("[href='#" + section.id + "']").parentNode;
                    var speed = 5;
                    var left = li.offsetLeft - menu.offsetWidth / 2 + li.offsetWidth / 2;
                    left *= speed
                    menu.scrollLeft = left;
                    break;
                }
            }
        });

    </script>







    <!--Boostrap-->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
</body>

</html>