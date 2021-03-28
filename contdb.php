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
    /*mysqli_query($conn,$query) ;
    $result = mysqli_query($conn, $query);
if($result){ header('Location: index.php') ;
  $conn->close();

         }   */
         
         if(mysqli_query($conn, $query)){
          header('Location: index.php') ;
      } else{
          echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
      }

    } 
    if(isset($_POST['geteacher'])){
      $checkbox1=$_POST['techno'];  
    $chk="";  
      foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
      $query="insert into get_teacher_inquery (	type_of_tuition,category,subject,address,pin,number) values('$chk','".$_POST['category']."','".$_POST['subject']."','".$_POST['address']."','".$_POST['pin']."','".$_POST['number']."')";
     
           
       if(mysqli_query($conn, $query)){
            header('Location: index.php') ;
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
        }
  
      } 
      mysqli_close($conn);
?>