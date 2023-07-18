<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basket</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />


</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="menu"><i class="fas fa-arrow-left" style="margin-left: 10px;"></i></a>
            <h1 class="navbar-brand mx-auto">Payment</h1>
        </nav>
    </header>

    <main>


        <div class="container">

            <div class="card-body">
                <div class="container">
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


                
                <table class="table">


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
                <form>
                    <div class="form-group mt-2">
                        <div class="input-group"> <input type="text" class="form-control coupon" name=""
                                placeholder="Promo code"> <span class="input-group-append"> <button
                                    class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                                </div>
                                </div>
                </form>




                <div class="container">
                    <div class="fw-normal">Payment Method :</div>
                    <hr>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <i class="fas fa-hand-holding-usd"></i>Cash Payment
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Please inform the cashier at the counter that you would like
                                    to
                                    pay by cash.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
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

                                                            <input type="number" id="formField1" class="form-control"
                                                                required />
                                                            <label class="form-label" for="form6Example1">Card
                                                                Number</label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row  mt-2">
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="tel" id="formField2" class="form-control"
                                                                required />
                                                            <label class="form-label" for="form6Example1">MM /
                                                                YY</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="tel" id="formField3" class="form-control"
                                                                required />
                                                            <label class="form-label" for="form6Example2">Cvv</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="formField4" class="form-control"
                                                                required />
                                                            <label class="form-label" for="form6Example1">Card Holder
                                                                Name</label>
                                                        </div>
                                                    </div>





                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <button type="submit" class="btn btn-primary" id="checkbox"
                            style="width:100%;">Checkout</button>
                        </form>




                    </div>

                </div>

    </main>
</body>

<style>
    .fas.fa-hand-holding-usd {
        width: 10px;
        margin-right: 13px;
    }


    .fa-solid,
    .fas {

        width: 10px;
    }


    .table td,
    .table th {
        padding: 0.2rem 1.3rem;
        border-top: 1px solid #dee2e6;
    }

    td {
        border-color: transparent;
    }

    .card-body {
        padding: 10 10 10 10;
    }

    .fa-arrow-left:before {
        margin-right: 130;
    }

    .list-group-flush>.list-group-item:last-child {
        padding: 0;
    }

    .fw-light {
        font-size: 12px;
    }

    .fst-normal {
        font-size: 14px;
    }

    .list-group-flush>.list-group-item {
        border-left-width: 0;
        border-bottom-width: var(--mdb-list-group-border-width);
        border-right-width: 0;
        padding: 0;
        border-top-width: 0;
    }

    .card.fw-bold {
        margin-left: 12px;
    }

    .fw-normal {
        padding-left: 17px;
    }

    hr {
        margin: 6px;
        color: grey;
    }

    .accordion-flush .accordion-item .accordion-button,
    .accordion-flush .accordion-item .accordion-button.collapsed {
        border-radius: 0;
        padding: 8 18 10;
    }

    .fa-hand-holding-dollar:before,
    .fa-hand-holding-usd:before {
        padding: 0 5 0 0;
    }

    .fa-credit-card-alt:before,
    .fa-credit-card:before {
        padding: 0 5 0 0;
    }

    img,
    svg {
        vertical-align: middle;
        float: right;
    }

    .container,
    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
        padding: 0;
    }

    label {
        display: inline-block;
        padding: 0 17 0;
    }

    .input-group .btn {
        line-height: 1;
        height: 35;
    }

    .card-body {
        padding: 10 10 10 10;
        width: 100%;
    }

    .table-borderless>:not(caption)>*>* {
        border-bottom-width: 0;
        padding: 5 0 5 0;
        float: right;
        font-size: 18px;
    }


    .list-group {
        --mdb-list-group-item-transition-time: 0.5s;
        padding: 0 5;
    }
</style>


<script>
    const form = document.querySelector('#cardinfo');
    const formField1 = document.getElementById('formField1');
    const formField2 = document.getElementById('formField2');
    const formField3 = document.getElementById('formField3');
    const formField4 = document.getElementById('formField4');
    const button = document.getElementById('checkbox');

    form.addEventListener('submit', function(event) {
        if (formField1.value.length === 0 || formField2.value.length === 0 ||
            formField3.value.length === 0 || formField4.value.length === 0) {
            button.disabled = true;
            event.preventDefault();

        } else {
            button.disabled = false;
            window.location.href="menu";
            alert('you have successfully make a payment'); 
            localStorage.removeItem('button');
                $(".fixed-bottom").css({
                    display: "none"
                });
              
              
        }
    });
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

</html>