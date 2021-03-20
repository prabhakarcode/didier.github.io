<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css5/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php
function load_category()
{
  $connect = mysqli_connect("localhost","root","","svjk");
  $output='';
  $sql="SELECT * FROM category ORDER BY category_name ";
  $result=mysqli_query($connect, $sql);
  while($row=mysqli_fetch_array($result))
  {
    $output .='<option value="'.$row["category_id"].'">'.$row["category_name"].'</option>';
  }
  return $output;
} 
?>



<form action="">
 <select name="category" id="category">
 <option value="">select category</option>
 <?php echo load_category(); ?>
 </select>
 <select name="subject" id="subject">
 <option value=""> select subject </option>
 </select>
</form>
<script>
$(document).ready(function(){
  $('#category').change(function(){
    var category_id = $(this).val();
    $.ajax({
      url:"fetch_subject.php",
      method: "POST",
      data:{categoryId:category_id},
      dataType:"text",
      success:function(data)
      {
        $('#subject').html(data);
      }
    });
  });
});
</script>
     <script src="js/jquery-3.3.1.min">
    <script src="js/bootstrap.min.js"></script>
    <script src="js5/bootstrap.min.js"></script>
    <script src="js/jscript.js"></script>

</body>
</html>