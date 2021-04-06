<?php
// Database configuration
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
?>
<html>
<form action="jobposter.php" method="POST" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
   

    <input type="submit" name="submit" value="Upload">
</form>
</html>
