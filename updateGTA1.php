
<?php
// Sushrut Diwan 1002024368, Nihar Gharat 1001963506
require("./header.php");

require("./connect.php"); 

if(isset($_POST['submit']))
{	 
	 $monthly_pay = $_POST['monthly_pay'];
	 $course_id = $_POST['course_id'];
	 $sql = "UPDATE gta,section SET monthly_pay = '$monthly_pay' WHERE gta.section_id = section.section_id AND section.course_id = '$course_id';";
	 if (mysqli_query($conn, $sql)) {
		echo "Record has been updated successfully !<br><br>";
		echo 'Click here to <a href="./updateGTA1.php">Update</a> new record';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


?>
