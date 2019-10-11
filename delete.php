<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
echo "deleted successfully!";
header("refresh:1;url=view.php");
?>