<?php
// Sushrut Diwan 1002024368, Nihar Gharat 1001963506
require("./header.php");
require("./connect.php"); 
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_POST['submit']))
{	 
	 $student_id = $_POST['student_id'];
	 $sql = "DELETE ss, ps
             FROM self_support ss 
             JOIN PHD_STUDENT ps ON ps.student_id = ss.student_id
             WHERE ss.student_id NOT IN (SELECT student_id from MILESTONESPASSED) AND ss.student_id = '$student_id'";
	 if (mysqli_query($conn, $sql)) {
		echo "Record Deleted successfully !<br><br>";
		echo 'Click here to <a href="./deleterecord.php">Delete</a> another record';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


?>
