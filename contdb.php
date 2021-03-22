<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svjk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['contdata'])){
    $query="insert into contactdata(fname,sname,email,mobile,profile,gender,address, city,state,pin) values('".$_POST['fname']."','".$_POST['sname']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['profile']."','".$_POST['gender']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['pin']."')";
    mysqli_query($conn,$query) ;
    $result = mysqli_query($conn, $query);
if($result){ header('Location: index.php');

         }       
}






?>