<html>
<head>
    <title>Phone Number Authentication with Firebase Web</title>
    <script src="NumberAuthentication.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <style>
        .form-container {
            position: absolute;
            top: 25vh;
            left: 20vh;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #000;
        }
    </style>
</head>
<body>
    
    
    <div class="container-fluid bg">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-4 col-md-4">
            <form enctype="multipart/form-data" method="post" class="form-container">
            <div class="form-group">
            </div>
            <hr>
            <center><h2>Enter number to send OTP</h2></center>
            <form>
                <input type="text" id="number" placeholder="+918********">
                <div id="recaptcha-container"></div>
                <p></p>
                <button type="button" onclick="phoneAuth();setTimeout(myFunction, 30000);" class="btn btn-primary btn-block">SendCode</button>
                
                <center><h2>Enter Verification code</h2></center>
                <input type="password" id="verificationCode" placeholder="Enter verification code">
                <p></p>
                <button type="button" onclick="codeverify();" id="B1" class="btn btn-primary btn-block">Verify code</button>

            </form>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-auth.js"></script>



    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#config-web-app -->

    <script>
        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyC8cRqZdzAF1YW8EdySRVtmXeobF7BejGA",
            authDomain: "carm-4ae4e.firebaseapp.com",
            databaseURL: "https://carm-4ae4e.firebaseio.com",
            projectId: "carm-4ae4e",
            storageBucket: "carm-4ae4e.appspot.com",
            messagingSenderId: "1027836163810",
            appId: "1:1027836163810:web:853e87f7729326990390bb",
            measurementId: "G-R7R5D6KMBC"
        };
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
    </script>


</body>
</html>
