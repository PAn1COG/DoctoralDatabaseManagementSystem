<?php
// Sushrut Diwan 1002024368, Nihar Gharat 1001963506
require("./header.php");
require("./connect.php");
?>
<center><h1><b>Update Records</b></h1></center>
    <form action="updateGTA1.php" method="post" class="was-validated">
        
        <div class="form-group">
            <label for="monthly_pay">New Monthly PAY</label>
            <input class="form-control" type="text" name="monthly_pay" id="monthly_pay"  required>
        </div>
        <div class="form-group">
            <select name="course_id" id="course_id">
            <option value="" DEFAULT>SELECT COURSE</option>
            <option value="CSE1310">CSE1310</option>
            <option value="CSE1320">CSE1320</option>
            <option value="CSE1325">CSE1325</option>
            <option value="CSE3302">CSE3302</option>
            <option value="CSE3310">CSE3310</option>
            <option value="CSE3330">CSE3330</option>
            <option value="CSE3442">CSE3442</option>
            <option value="CSE4351">CSE4351</option>
            <option value="CSE4354">CSE4354</option>
            <option value="CSE6365">CSE6365</option>
            <option value="CSE5322">CSE5322</option>
            <option value="CSE5324">CSE5324</option>
            <option value="CSE6338">CSE6338</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success" name="submit" onclick="return validateInsertForm();" value="submit">
    </form>

    <?php 

?>