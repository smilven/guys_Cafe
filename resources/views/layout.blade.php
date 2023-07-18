<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guys Café</title>
  <link rel="icon" href="images/logo.png">


  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>

  <div class="sticky-top">
    <nav class="navbar navbar-light bg-light ">
      <div class="container-fluid">

        <button class="btn btn-light" type="button" data-mdb-toggle="modal" data-mdb-target="#profile">
          <i class="far fa-user-circle" style="font-size: 25px;"></i>
        </button>


        <!-- Modal -->
        <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <center>
                <div class="modal-body"><img src="https://www.pngmart.com/files/21/Account-Avatar-Profile-PNG-Photo.png"
                    height="80px" width="80px"></div>

                <table class="table table-striped table-hover">

                  <p class="h5" style="margin-bottom: 0px;">ID : 001</p>

                  <p class="h6">Points : 0</p>
              </center>
              </table>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"
                  style="width: 100%;">Close</button>
              </div>
            </div>
          </div>
        </div>



        <center>
          <h4 class="mt-2">Guys Café</h4>
        </center>


        <ul class="navbar-nav">
          <!-- Cart -->
          <a href="cart"> <i class="fas fa-shopping-cart" style="font-size: 25px;"></i></a>
        </ul>

      </div>
      <input type="search" placeholder="search somethings..." style="margin: 5px auto 0px; 
            width:90%;
            border-radius:10px; 
            font-size:smaller;
            outline: none; 
            height: 2rem;
            margin-bottom:5px;
            border: 1px solid #ccc;">




      <div class="navbar-start " id="menu">

        <li> <a href="#section1">Chop</a></li>
        <li> <a href="#section2">Pizza</a></li>
        <li> <a href="#section3">Hamburger</a></li>
        <li> <a href="#section4">Spaghetti</a></li>
        <li> <a href="#section5">Drink</a></li>
        <li> <a href="#section6">Dessert</a></li>

      </div>



    </nav>







  </div>
  @yield('content')




  <style>
    .modal-backdrop {
      z-index: 2;
    }



    .stepper-wrapper {
      margin-top: auto;
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .stepper-item {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1;

      @media (max-width: 768px) {
        font-size: 12px;
      }
    }

    .stepper-item::before {
      position: absolute;
      content: "";
      border-bottom: 2px solid #ccc;
      width: 100%;
      top: 20px;
      left: -50%;
      z-index: 2;
    }

    .stepper-item::after {
      position: absolute;
      content: "";
      border-bottom: 2px solid #ccc;
      width: 100%;
      top: 20px;
      left: 50%;
      z-index: 2;
    }

    .stepper-item .step-counter {
      position: relative;
      z-index: 5;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #ccc;
      margin-bottom: 6px;
    }

    .stepper-item.active {
      font-weight: bold;
    }

    .stepper-item.completed .step-counter {
      background-color: #4bb543;
    }

    .stepper-item.completed::after {
      position: absolute;
      content: "";
      border-bottom: 2px solid #4bb543;
      width: 100%;
      top: 20px;
      left: 50%;
      z-index: 3;
    }

    .stepper-item:first-child::before {
      content: none;
    }

    .stepper-item:last-child::after {
      content: none;

    }

    html {
      scroll-behavior: smooth;
    }

    li {
      display: inline-block;
    }


    .navbar {
      padding: 0;
    }

    #menu {
      transition: all 0.2s ease-out;
    }

    div.navbar-start {
      background-color: #f8f9fa !important;
      overflow-x: auto;
      white-space: nowrap;
      scroll-behavior: smooth;
    }


    div.navbar-start::-webkit-scrollbar {
      display: none;

    }




    div.navbar-start a {
      display: inline-block;
      color: black;
      text-align: center;
      padding: 14px;
      text-decoration: none;
      font-size: small;
      width: 110px;
    }

    div.navbar-start a:hover {
      background-color: #777;
    }

    a {
      text-decoration: none;
      color: black;
      background: #f8f9fa !important;
    }

    a.active {
      color: black;
      background: #d7dedd85 !important;
    }
  </style>

  <script>
    var menu = document.getElementById("menu");
 var scrollLeft=500;
 
window.addEventListener("scroll", function() {
  var sections = document.querySelectorAll("[id^='section']");
  for (var i = 0; i < sections.length; i++) {
    var section = sections[i];
    var rect = section.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      var li = document.querySelector("[href='#" + section.id + "']").parentNode;
      var speed=5;
      var left = li.offsetLeft - menu.offsetWidth / 2 + li.offsetWidth / 2;
      left *=speed
      menu.scrollLeft = left;
      break;
    }
  }
});






  </script>

  <!--Boostrap-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
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