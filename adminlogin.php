<!DOCTYPE html>
<head>
    <title>
        Admin Login
    </title>
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
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-analytics.js"></script>

    <script>
    // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyCDXdRv20PVG6Do5ej6S6yAuW8pUPNMvLk",
            authDomain: "carmanagement-c1ce2.firebaseapp.com",
            databaseURL: "https://carmanagement-c1ce2.firebaseio.com",
            projectId: "carmanagement-c1ce2",
            storageBucket: "carmanagement-c1ce2.appspot.com",
            messagingSenderId: "537038259293",
            appId: "1:537038259293:web:eb3a25559a5a2e6338f9b4",
            measurementId: "G-KDVNM1F4HK"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
    </script>
</head>
<body>
    <div class="container-fluid bg">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4">
            <form enctype="multipart/form-data" method="post" class="form-container">
            <div class="form-group">
            <?php
            if(!isset($_POST['submit'])){
                echo "<h4 align='center'>Admin Login:</h4>";
            }
			if(isset($_POST['submit'])) {
                session_start();
                $con = mysqli_connect('localhost','root','');
                mysqli_select_db($con,'dbms');
                $uname = $_POST['uname'];
                $pass = $_POST['password'];
                $s = "SELECT * FROM admin WHERE uname= '$uname' and password='$pass'";
                $result = mysqli_query($con, $s);
                $num = mysqli_num_rows($result);
                if($num==1) {
                    $_SESSION['uname'] = $uname;
                    header('location:adminhome.php');
                }
                else
                {
                    echo "<h4 align='center'><font color='red'>Invalid entry!</font></h4>";
                }
            }
            ?>
            </div>
            <hr>
            <div class="form-group">
                <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
    
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            <br>
            <div class="form-group">
            Want to login as a customer? <a href="login.php">Click Here</a></div>
            <div clas="form-group">
            Want to login as an employee? <a href="emplogin.php">Click Here</a></div>
            </form>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>