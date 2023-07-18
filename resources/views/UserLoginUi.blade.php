<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guys Cafe</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <!-- MDB -->
</head>

<body>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=text] {
            -moz-appearance: textfield;
            border: none;
            border-bottom: 2px solid rgb(78, 75, 75);
            outline: none;
        }

        #recaptha-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .PhoneNumber{
            width: 150px;
        }
        .insertOPT{
            width:280px;
        }
    </style>
    <div class="container text-center mt-5">

      
        <!--<img src="https://marketplace.canva.com/EAFBMNorJAA/1/0/1600w/canva-brown-white-cafe-%26-resto-logo-4bXaF-z3obs.jpg" width="350px; height:350px">-->
        <img src="images/logo3.png" alt="" width="350px; height:350px">
        <div class="infoUserLogin mb-2">
            <h5><strong>OTP Verification</strong></h5>
            <p class="fw-normal" style="word-wrap: break-word">We will send you an One Time Password on this mobile
                number</p>
        </div>

        <form action="" method="post">
            @csrf
            <div class="inforUserInputNumber">
                <div id="recaptha-container"></div>
                <p><strong>Enter Mobile Number</strong></p>
                
                <div class="GetOTPCode mt-3 mb-3">
                    <input type="text" name="PhoneNumber" id="PhoneNumber" autocomplete="off" class="PhoneNumber"
                    required>       
              <button type="button" class="btn btn-danger" style="height:30px;width:80px; padding:0%"
              onclick="sendCode()" autocomplete="off"  >Get Code</button>              
                        <div id="sucessMessage" style="color: rgb(240, 138, 21); display:none"></div>
                        <div id="error" style="color: red; display:none"></div>
                        <div id="sentMessage" style="color: rgb(235, 106, 13); display:none"></div>
                  
                </div>

            

                <input type="text" class="insertOPT mt-2 mb-3" id="verificationCode" autocomplete="of" placeholder="Enter OTP Code" required> <br>
                <button type="submit" class="btn btn-warning" style="width:280px;border-radius:15px;" onclick="verifyCode()" autocomplete="off">Submit</button>       
        </form>

     
        
    

    
    </div>

    <script>
        function setUp(){
        var phoneNumber = document.getElementById('PhoneNumber');
       

        if(phoneNumber.value.length>2){
            phoneNumber.setSelectionRange(3,phoneNumber.value.length);
            phoneNumber.focus();
        }
    }
    window.addEventListener('load',setUp,false);
    </script>




    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

    <script>
        var firebaseConfig = {
        apiKey: "AIzaSyBd6sBKPxWycKysDRHL4pSGn2Ej0F_ArBc",
        authDomain: "test-otp-38e03.firebaseapp.com",
        projectId: "test-otp-38e03",
        storageBucket: "test-otp-38e03.appspot.com",
        messagingSenderId: "370325195667",
        appId: "1:370325195667:web:7ee4e78c06b56db4c37666",
        measurementId: "G-58LZJ104EX"
    }

    firebase.initializeApp(firebaseConfig);
    </script>

    <script type="text/javascript">
        window.onload = function(){
        render();
    }

    function render(){
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptha-container');
        recaptchaVerifier.render();
    }

    function sendCode(){

        var number = $('#PhoneNumber').val();

        firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult){

            window.confirmationResult = confirmationResult;
            conderesult = confirmationResult;

            $('#sentMessage').text('Message Sent Successfully!');
            $('#sentMessage').show();

        }).catch(function(error){
            $('#error').text(error.message);
            $('#error').show();
        });

    }

    function verifyCode(){

        var code = $('#verificationCode').val();

        conderesult.confirm(code).then(function(result){
            var user = result.user;

            $('#sucessMessage').text('Your Registration has been successfully!');
            $('#sucessMessage').show();
            window.location.href = 'http://127.0.0.1:8000/new?tableNumber=1'

        }).catch(function(error){
            $('#error').text(error.message);
            $('#error').show();
        });

    }

    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>




</body>

</html>
 

