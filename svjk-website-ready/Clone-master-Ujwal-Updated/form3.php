<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
</head>
<body style="background:transparent url('collage123.jpg') no-repeat center center /cover">
<div class="container-fluid">
  <div class="row">
     <div class="col-sm-2" style="background-color:lavender;"></div>
     <div class="col-sm-3" style="background-color:lavender;">.col-sm-3</div>
     <div class="col-sm-3" style="background-color:lavenderblush;">
  <p>Already member?<a href="login.php"> Login</p>
    <h3>Student Regisration form</h3>
    <?php

    $servername = "localhost";
    $username = "svjk";
    $password = "password";
    $dbname = "website";

// Create connection
     $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
     if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$clas = $_POST['clas'];
$boar = $_POST['boar'];
$wher = $_POST['wher'];
$sub = $_POST['sub'];

mysqli_close($conn);
?>
<form action="form4.php" method="POST">
<div class="checkbox">
  <label for="checkbox">Timings:</label><br />
  <label><input type="checkbox" name="time" value="morning">Morning (8 to 12pm)</label>
  <label><input type="checkbox" name="time" value="early_afternoon">Early afternoon(12 to 3pm)</label>
  <label><input type="checkbox" name="time" value="late_afternoon">Late afternoon (3 to 5pm)</label>
  <label><input type="checkbox" name="time" value="early_evening">Early evening (5 to 7pm)</label>
  <label><input type="checkbox" name="time" value="night">Night (7 to 10pm)</label>
</div>
   <div class="form-group">
      <label for="address">Address:</label>
      <input type="textarea" name="address" class="form-control" placeholder="enter your address">
   </div>
 <div class="form-group">
 <label for="pincode">Pincode:</label>
 <input type="number" name="pincode" id="pincode" required placeholder="pincode plz">
 </div>
  <div class="form-group">
   <button style='font-size:24px'><a href="home.php">Submit<i class='fas fa-angle-double-right'></i></a></button>
</div>
</form>

    </div>
  
    <div class="col-sm-3" style="background-color:lavender;"> </div>
    <div class="col-sm-1" style="background-color:lavender;"></div>
  </div>
</div>

</body>
</html>
