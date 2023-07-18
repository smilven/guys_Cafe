<?php
$tableNumber = 1;

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

<body onload="getLocation()">


    <style>
        .wrapper-progressBar {
            width: 100%
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
                <h3 class="mt-2">Guys Café</h3>
                <p>Table Number:
                    <?php echo $tableNumber; ?>
                </p>
            </center>

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

            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <style>
    
       
    .message-container {
  display: flex;
  justify-content: center;
}
          .message,.message2,.message3{
            position: absolute;
  display: none;
  text-align: center;
  margin: 10px auto;
  padding: 10px;
  background-color: #ffc107; /* Change the background color as desired */
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
                        <form data-action="{{route('add.to.cart')}}" method="POST" id="add-project-form-{{ $foodMenu->id }}">
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

<input type="hidden" name="food_price"  id="food_price" value="{{ $foodMenu->food_price }}">


                                    <h6>Requirement:</h6>

                                    <textarea
                                        style="resize:none;overflow:hidden; width:100%;  min-height: 75px;" id="food_requirement" name="food_requirement"></textarea>

                                  

                                    <div class="d-flex mt-2 mb-2 justify-content-center">
                                        <input type="hidden" name="food_name"  id="food_name" value="{{ $foodMenu->food_name }}">

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

                                    <center> <button type="submit" data-bs-dismiss="offcanvas" aria-label="Close" class="btn btn-warning UserMenu"
                                        style="width: 100%;" onclick="addToCart()">Add to Cart</button>
                            
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
                        <div class="container mb-9">
                            <img src="https://thumbs.dreamstime.com/b/chef-cartoon-giving-thumb-up-isolated-white-background-176171655.jpg"
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
                        <div class="row" id="Table" >
                        </div>
  

                        <form data-action="{{ route('place') }}" method="POST" id="PlaceOrderForm">
                            @csrf
                            <button type="submit" class="btn btn-primary mb-8 UserMenu" style="width:100%" >Place Order</button>
                        </form>



                    </div>
                </div>
<style>
    #Table a{
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

    </style>

<script>
 $(document).ready(function() {
  var form = '#PlaceOrderForm';

  $(form).on('submit', function(event) {
    event.preventDefault();
    var url = $(this).attr('data-action');

    // Check if the table is empty
    if ($('#Table').is(':empty')) {
      alert('Cannot place order. Cart is empty.');
      return; // Stop execution
    }

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
      },
      error: function(response) {
      
      }
    });
  });
});


    </script>
<script>
 $(document).ready(function() {
    fetchAllOrder();
    function fetchAllOrder() {
  $.ajax({
    type: "GET",
    url: "/fetchAllorder",
    dataType: "json",
    success: function(response) {
      $('#Table').html("");
      $.each(response.mycarts, function(key, data) {
        var deleteUrl = "{{ route('mycart.delete', ':id') }}";
        deleteUrl = deleteUrl.replace(':id', data.id);

        var listItem = $('<li class="list-group-item d-flex justify-content-between align-items-center"></li>');

        var itemContainer = $('<div class="d-flex align-items-start"></div>');
        itemContainer.append('<img src="storage/images/' + data.avatar + '" width="100" class="img-thumbnail">');
        var itemDetails = $('<div class="ms-3"></div>');
        itemDetails.append('<span style="font-size:15px;"><strong>Food Name:'+ data.food_name + '</strong></span><br>');
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
              type: "POST",
              url: updateUrl,
              data: { requirement: updatedRequirement },
              success: function(response) {
                console.log(response);
              },
              error: function(error) {
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







var form = '[id^="add-project-form-"]';

    $('[id^="add-project-form-"]').on('submit', function(event) {
        event.preventDefault();

        var url = $(this).attr('data-action');
        $.ajax({
            url: '/add.to.cart',
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                if (response.status == 200) {
                    $(form).find('textarea').val('');
                    $(form).find('#quantity_food').val('1');
                    $('.offcanvas-bottom').offcanvas('hide');
                    fetchAllOrder();
                    console.log('successlah')
                }
            },
            error: function(response) {

            }
        });
    });

  
   
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
 
   /*------------------------------------------
   --------------------------------------------
   When click user on Show Button
   --------------------------------------------
   --------------------------------------------*/
   $('body').on('click', '#delete-mycart', function () {
    var deleteUrl = $(this).data('url');
    var itemId = $(this).data('id');

    // Update the userURL with the specific ID.
    var userURL = deleteUrl.replace('{id}', itemId);

    var liObj = $(this).closest('li');

    // Make sure to use HTTPS for the AJAX request URL
   //userURL = userURL.replace('http://', 'https://');

    $.ajax({
        url: userURL,
        type: 'DELETE',
        dataType: 'json',
        success: function (data) {
            liObj.fadeOut(200, function () {
                $(this).remove();
            });
            var message = document.getElementById("message3");
            message.style.display = "block";
            setTimeout(function () {
                message.style.display = "none";
            }, 2000);
        },
        error: function (response) {
            // Handle error response
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
                            <table class="table">

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-start">


                                            <div class="ms-3">
                                                <div class="fw-bold mb-1">Sushi</div>
                                                <div class="fw-light mb-2">No Egg,No Prawn</div>

                                                <div class="fst-normal mt3">RM 150</div>
                                            </div>

                                        </div>

                                        <div class="d-flex align-items-end">
                                            <div class="fw-light">x1</div>
                                        </div>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-start">


                                            <div class="ms-3">
                                                <div class="fw-bold mb-1">Sushi</div>
                                                <div class="fw-light mb-2">No Egg,No Prawn</div>

                                                <div class="fst-normal mt3">RM 150</div>

                                            </div>
                                        </div>

                                        <div class="d-flex align-items-end">
                                            <div class="fw-light">x1</div>
                                        </div>
                                    </li>
                                </ul>
                                <tbody>

                                    <tr>
                                        <td> <strong>Food Price Total</strong> </td>
                                        <td>2</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Discount</strong> </td>
                                        <td>RM450</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Nett Total</strong> </td>
                                        <td>RM450</td>
                                    </tr>

                                </tbody>

                            </table>


                            <h6 style="margin-left: 10px;">Payment Method :</h6>

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
                                                    <form id="cardinfo">
                                                        <div class="row  mt-2">
                                                            <div class="col">

                                                                <div class="form-outline">

                                                                    <input type="number" id="formField1"
                                                                        class="form-control" required />
                                                                    <label class="form-label" for="form6Example1">Card
                                                                        Number</label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row  mt-2">
                                                            <div class="col">
                                                                <div class="form-outline">
                                                                    <input type="tel" id="formField2"
                                                                        class="form-control" required />
                                                                    <label class="form-label" for="form6Example1">MM /
                                                                        YY</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-outline">
                                                                    <input type="tel" id="formField3"
                                                                        class="form-control" required />
                                                                    <label class="form-label"
                                                                        for="form6Example2">Cvv</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col">
                                                                <div class="form-outline">
                                                                    <input type="text" id="formField4"
                                                                        class="form-control" required />
                                                                    <label class="form-label" for="form6Example1">Card
                                                                        Holder
                                                                        Name</label>
                                                                </div>
                                                            </div>



                                                            <button type="submit" class="btn btn-primary" id="checkbox"
                                                                style="width:100%;">Checkout</button>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>







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
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><strong>{{ Auth::user()->name }}</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>UserID : Guys0001</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Points : 58</strong></td>
                                </tr>
                            </tbody>
                        </table>




                        <ul style="padding-left: 0; margin-bottom: 80px;" class="text-center">
                            @foreach ($data3 as $data3)


                            <li class="list-group-item d-flex justify-content-between align-items-center mb-2"
                                style="background: orange;">


                                <div class="row">


                                    <div class="col-3">
                                        <img src="https://thumbs.dreamstime.com/b/chef-cartoon-giving-thumb-up-isolated-white-background-176171655.jpg"
                                            width="80px" height="80px" style="object-fit: cover; border-radius: 50%;">

                                    </div>
                                    <div class="col-9">
                                        <div class="infor" style="color: white;">
                                            <h4>Voucher RM{{$data3->amount}}</h4>
                                            <button type="button"
                                                class="btn btn-danger btn-sm UserMenu">Points{{$data3->point}}</button>

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