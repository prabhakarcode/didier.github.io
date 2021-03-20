<?php

  $connect = mysqli_connect("localhost","root","","svjk");
  $output='';
  $sql="SELECT * FROM subject  where category_id='".$_POST["categoryId"]."' ORDER  BY subject_name";
  $result = mysqli_query($connect, $sql);
  $output = '<option value=""> select subject</option>';
  while($row=mysqli_fetch_array($result))
  {
    $output .='<option value="'.$row["subject_id"].'">'.$row["subject_name"].'</option>';
  }
  echo $output;
?>

