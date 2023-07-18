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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--jQUERY-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>


  <div class="container-fluid">


    <a href="menu"><i class="fas fa-arrow-left" style="float: left; margin-top:25px;"></i></a>

    <center>
      <h5 style="margin: 20px 0 0 0; display: inline-block;">Your Cart <i class="fas fa-shopping-cart mx-1"></i></h5>
    </center>

    <hr class="hr" />
    <p style="display:inline;">Table:1</p>
    <div id="time" style="display:inline; float:right;"> </div>
    <hr class="hr" />

    <div class="row">
      <div class="col-md-12 overflow-auto">

        <ul class="list-group list-group-light">

          <!--================================ 这边用来display order了什么-start===========================================-->
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-start">
              <img src="https://rimage.gnst.jp/livejapan.com/public/article/detail/a/00/00/a0000370/img/basic/a0000370_main.jpg?20201002142956&q=80&rw=750&rh=536" width="80px" height="80px" style="object-fit: cover; border-radius: 5px; margin-left: 5px;">
              <div class="ms-3">
                <div class="fw-bold mb-1">Sushi</div>
                <div class="fw-light mb-2">No Egg,No Prawn</div>
                <div class="fst-normal mt3">RM 150</div>


              </div>
            </div>

            <div class="d-flex align-items-middle">
              <button class="btn btn-link px-1" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                <i class="fas fa-minus"></i>
              </button>

              <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onkeydown="return false" />

              <button class="btn btn-link px-1" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                <i class="fas fa-plus"></i>
              </button>
            </div>
            <div class="d-flex align-items-end">
              <button type="submit" style="border: none; background-color: transparent; float: right;">
                <i class="fas fa-edit"></i>
              </button>

              <button type="submit" style="border: none; background-color: transparent;">
                <i class="fas fa-trash"></i>
              </button>
            </div>




          </li>

          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-start">
              <img src="https://rimage.gnst.jp/livejapan.com/public/article/detail/a/00/00/a0000370/img/basic/a0000370_main.jpg?20201002142956&q=80&rw=750&rh=536" width="80px" height="80px" style="object-fit: cover; border-radius: 5px; margin-left: 5px;">
              <div class="ms-3">
                <div class="fw-bold mb-1">Sushi</div>
                <div class="fw-light mb-2">No Egg,No Prawn</div>
                <div class="fst-normal mt3">RM 150</div>


              </div>
            </div>

            <div class="d-flex align-items-middle">
              <button class="btn btn-link px-1" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                <i class="fas fa-minus"></i>
              </button>

              <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" onkeydown="return false" />

              <button class="btn btn-link px-1" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                <i class="fas fa-plus"></i>
              </button>
            </div>
            <div class="d-flex align-items-end">
              <button type="submit" style="border: none; background-color: transparent; float: right;">
                <i class="fas fa-edit"></i>
              </button>

              <button type="submit" style="border: none; background-color: transparent;">
                <i class="fas fa-trash"></i>
              </button>
            </div>




          </li>
          <!--================================ 这边用来display order了什么-end===========================================-->




        </ul>

        <!--================================ 这边用来display 价钱-start===========================================-->
        <table class="table">


          <tbody>

            <tr>
              <td> <strong>Quantity</strong> </td>
              <td>2</td>
            </tr>

            <tr>
              <td><strong> Item Price Total</strong> </td>
              <td>RM450</td>
            </tr>
          </tbody>

        </table>
        <!--================================ 这边用来display 价钱-end===========================================-->

        <hr class="hr">
      </div>




      <!--================================ 这边用来display Placa order-start===========================================-->
      <div class="col-md-12 mb-2 mt-1">
        <center><button type="button" class="btn btn-warning" id="myButton">Place Order</button></center>
      </div>
      <!--================================ 这边用来display Placa order-end===========================================-->




    </div>




  </div>

  <style>
    .table {
      margin-bottom: 0px;
    }

    .hr {
      margin: 5px auto;
    }

    .list-group-light .list-group-item {
      padding: 3px;

    }

    .col-md-12::-webkit-scrollbar {
      display: none;
    }

    .btn-warning {
      width: 100%;
    }

    .table td,
    .table th {
      padding: 0.2rem;
      border-top: 1px solid #dee2e6;
    }

    td {

      border-color: transparent;
    }

    .list-group-item {
      padding: 0.3rem 0.3rem;
    }

    .fw-light {
      font-weight: 300 !important;
      font-size: 12px;
    }

    .form-control.form-control-sm {
      font-size: .775rem;
      line-height: 1.5;
      width: 30px;
    }

    .form-control,
    .form-control:focus {
      margin: 10px 0;
    }

    @media (max-width: 576px) {

      img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        margin-top: 10px;
      }

      .fst-normal {
        font-size: smaller;
      }

    }

    .offcanvas.offcanvas-start {
      top: 0;
      left: 0;
      width: 200px;
      border-right: var(--mdb-offcanvas-border-width) solid var(--mdb-offcanvas-border-color);
      transform: translateX(-100%);
    }

    .offcanvas-body {
      flex-grow: 1;
      padding: 0;
      overflow-y: auto;
    }

    a {
      text-decoration: none;
      color: black;
    }
  </style>



  <script>








    var datetime = new Date().toDateString();
    console.log(datetime); // it will represent date in the console of developer tool
    document.getElementById("time").textContent = datetime; // represent on html page

    $(".btn-warning").on("click", function() {

      localStorage.setItem('button', 'clicked');
      window.location.href = "menu";

    });
  </script>



  <!--Boostrap-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
</body>

</html>