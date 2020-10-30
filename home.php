<?php
session_start();
if(!isset($_SESSION['email'])) {
    header('location:login.php');
}

$time = $_SERVER['REQUEST_TIME'];
$td = 60;
if(isset($_SESSION['LAST_ACTIVITY']) && ($time - $_SESSION['LAST_ACTIVITY']) >$td)
{
    session_unset();
    session_destroy();
    header('location: logout.php');
}
$_SESSION['LAST_ACTIVITY'] = $time;
?>


<!DOCTYPE html>
<head>
<title>
   Home Page</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/global1.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style> 
    body { 
        margin: 0; 
        padding: 0; 
    } 
  
    div { 
        position: absolute; 
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
    } 
  
    h2 { 
        font-size: 3em; 
        font-family: serif; 
        color: transparent; 
        text-align: center; 
        animation: effect 2s linear infinite; 
    } 
  
    @keyframes effect { 
        0% { 
            background: linear-gradient( 
                #008000, #00FF00); 
            -webkit-background-clip: text; 
        } 
  
        100% { 
            background: linear-gradient( 
                #3CE7D7, #000FFF); 
            -webkit-background-clip: text; 
        } 
    } 
    
</style>
</head>
   <body class="bg">
       <br>
       <p>
       <ul>
   <li><a href="home.php">HOME</a></li>
   <li><a href="dashboard.php">DASHBOARD</a></li>
   <li><a href="contactus.php">CONTACT US</a></li>
   <li><a href="cart.php">CART</a></li>
   <li> <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></li>
   <li><a href="logout.php"> LOGOUT </a></li>
   </ul>
   <p>
   <br><br><br><br>  <br><br><br><br>
   <h1 align="center" class="heading"> <big><font color='white'>
        
   <div id="text"><h2>Welcome</h2></div>
   <br><br>t
   <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbms";
        
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $email=$_SESSION['email'];
        $sql = "SELECT fname,lname FROM usertable WHERE email='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<marquee>".$row["fname"]. " " .$row["lname"]. "!</marquee>";
            }
        } 
        $conn->close();
        ?> </font></big></h1>
</p>


</body>
</html>