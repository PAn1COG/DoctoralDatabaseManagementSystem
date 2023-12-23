<?php
// Sushrut Diwan 1002024368, Nihar Gharat 1001963506
require("./header.php");
?>
<center><h1><b>Insert Records</b></h1></center>

    <form action="InsertGRA1.php" method="post" class="was-validated">
    <h2><b> DATA FOR PHD STUDENT TABLE </b></h2>
        <div class="form-group">
            <label for="stateAb">Enter Student ID:</label>
            <input class="form-control" type="text" name="student_id" id="student_id"  required >
        </div>
        <div class="form-group">
            <label for="stateName">Enter First Name:</label>
            <input class="form-control" type="text" name="first_name" id="first_name"  required>
        </div>
        <div class="form-group">
            <label for="stateName">Enter student last_name:</label>
            <input class="form-control" type="text" name="last_name" id="last_name"  required>
        </div>
        <div class="form-group">
            <label for="stateName">Enter student start_semester:</label>
            <input class="form-control" type="text" name="start_semester" id="start_semester"  required>
        </div>
        <div class="form-group">
            <label for="stateName">Enter student start_year:</label>
            <input class="form-control" type="text" name="start_year" id="start_year"  required>
        </div>
        <div class="form-group">
            <select name="supervisor" id="supervisor">
            <option value="" DEFAULT>SELECT Supervisor</option>
            <option value="AO5671">AO5671</option>
            <option value="AS2348">AS2348</option>
            <option value="BL9856">BL9856</option>
            <option value="RB1897">RB1897</option>
            <option value="SB2561">SB2561</option>
            </select>
        </div>

        <!--      FIELDS FOR GRA          -->
        <h2><b> DATA FOR GRA TABLE </b></h2>
        <div class="form-group">
            <select name="finding" id="funding">
            <option value="" DEFAULT>SELECT GRANT</option>    
            <option value="DOE1">DOE1</option>
            <option value="DOT4">DOT4</option>
            <option value="NIH3">NIH3</option>
            <option value="NSF2">NSF2</option>

            </select>
        </div>
        <div class="form-group">
            <label for="stateName">Enter student monthly pay:</label>
            <input class="form-control" type="text" name="monthly_pay" id="monthly_pay"  required>
        </div>
        <input type="submit" class="btn btn-success" name="submit" onclick="return validateInsertForm();" value="submit">
    </form>

<?php
?>