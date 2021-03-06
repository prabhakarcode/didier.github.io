<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/cutom.css">
  <link rel="stylesheet" href="css/styling.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css5/bootstrap.min.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
			<?php include 'head_links.php'; ?>
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="https://cdnjs.cloudfl.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
  <title>Document</title>
</head>

  
<body class="bodyeducation" data-spy="scroll" data-target=".site-navbar-target" data-offset="300" >

<?php include 'navigation.html'; ?> 
    <?php
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "svjk";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Include the database configuration file

$statusMsg = '';

// File upload path
$targetDir = "upload/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into job_poster (file_name, uploaded_on ) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?> 
<div class="container">
 <div class="row">
    <?php
    // Include the database configuration file
    
    // Get images from the database
    $query = $db->query("SELECT * FROM job_poster ORDER BY uploaded_on DESC");
    $query="select * from text";
    
    
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $imageURL = 'upload/'.$row["file_name"];
    ?>
     <div class="col-md-8">
        <p><?php echo $subject; ?></p>
     </div>
     <div class="col-md-4">
        <img src="<?php echo $imageURL; ?>" alt="" width="200  m "  style=" width: 500px;">

     </div>
     <?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?> 



 </div>
</div>


    <?php 
    include 'subscribe_form.php';
    include 'footer.php';
    ?>   
  </div>
  <!-- .site-wrap -->
  <?php include 'script_links.php'; ?>
  <script src="js/jquery.animateNumber.min.js"></script>


<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM_uULzojkkhIew706uqwf8KG75oEVuDQ  &callback=initMap">
</script><script>function initMap() {
  var bangalore = {lat: 12.9833, lng: 77.5833};
  var mark2 = {lat: 12.9933, lng: 77.6033};

  var map = new google.maps.Map(
    document.getElementById('map'), {zoom: 13, center: bangalore});

  var marker = new google.maps.Marker({position: bangalore, label: 'B', map: map});
  var marker2 = new google.maps.Marker({position: mark2, label: 'A',map: map});

  
 }</script><!--
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 --> <script src="jquery.js"></script>
	  <script src="js/popper.min.js"></script>		
	  <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap.min.js"></script>	
      <script src="js5/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  	
</body>
</html>