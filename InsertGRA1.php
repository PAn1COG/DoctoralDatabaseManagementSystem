
<?php
// Sushrut Diwan 1002024368, Nihar Gharat 1001963506

require("./header.php");

require("./connect.php"); 
if(isset($_POST['submit']))
{	 
	 $student_id = $_POST['student_id'];
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $start_semester = $_POST['start_semester'];
     $start_year = $_POST['start_year'];
     $supervisor = $_POST['supervisor'];
    //  $funding = $_POST['funding'];
     $monthly_pay = $_POST['monthly_pay'];
	 $sql = "INSERT INTO PHD_STUDENT (student_id, first_name, last_name, start_semester, start_year, supervisor) VALUES ('$student_id','$first_name','$last_name','$start_semester','$start_year','$supervisor');
             INSERT INTO GRA (student_id, funding, monthly_pay) VALUES ('$student_id','NIH3','$monthly_pay');
             INSERT INTO PHDCOMMITTEE (student_id, instructor_id) VALUES ('$student_id','$supervisor')";
    //  $mysqli->multi_query($sql);
    if (mysqli_multi_query($conn, $sql)) {
		echo "New record created successfully !<br><br>";
		echo 'Click here to <a href="./InsertGRA.php">Insert</a> new record';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>