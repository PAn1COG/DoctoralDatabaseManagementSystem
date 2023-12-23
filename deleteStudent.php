<?php
// Sushrut Diwan 1002024368, Nihar Gharat 1001963506
require("./header.php");
require("./connect.php");
$sql = "select * from PHD_STUDENT";
if ( $res = mysqli_query($conn, $sql)) {
     if (mysqli_num_rows($res) > 0) { ?>
        <center><h1><b>Delete Records</b></h1></center>
        <form action="deleteStudent1.php" method="post">
            <div class="form-group">
                <label for="student_id">Student ID:</label>
                <select class="form-control" id="student_id" name="student_id">
                    <option value="">Select</option>           
                    <?php while ($row = mysqli_fetch_array($res)) {
                    echo '<option value="'.$row['student_id'].'">'.$row['student_id'].'</option>';
                    } ?>
                </select>
            </div>
            <input class="btn btn-success" type="submit" name="submit" value="submit">
        </form>

    <?php }else{
        echo "<div class='not-found'>No records to delete.</div>";
    }
}

?>