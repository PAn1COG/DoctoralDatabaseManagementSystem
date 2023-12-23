<?php
// Sushrut Diwan 1002024368, Nihar Gharat 1001963506
require("./header.php");
?>
    <?php
require("./connect.php"); 
$student_idt = [];
$sql = "SELECT DISTINCT G.grant_title, G.type, G.account_no FROM GRANTS AS G, GRA WHERE G.account_no=GRA.funding; ";
if ( $res = mysqli_query($conn, $sql)) {
     if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {
        $grant_title[] = $row['grant_title'];
        $type[] = $row['type'];
        $account_no[] = $row['account_no'];
        }
    }
}
if ( $res = mysqli_query($conn, $sql)) {
     if (mysqli_num_rows($res) > 0) { ?>

    <table class="table">
    <thead>
    <div class="form-group">
            <h3 for="stateAb">Display Grant Title, Type, and Account No. for a GRA student.</h3>
        </div>
      <tr>
        <th>grant_title</th>
        <th>type</th>
        <th>account_no</th>
      </tr>
    </thead>
    <tbody>
      
        <?php while ($row = mysqli_fetch_array($res)) { ?>
            <tr>
                <td><?php echo $row['grant_title']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['account_no']; ?></td>  
            </tr>
            
        <?php } ?>
        </tbody>
        </table>

    <?php  
    }else {
        echo "<div class='not-found'>No matching records are found.</div>";
    }
}

?>


<!-- Display Grant Title, Type, and Account No. for a GRA student. -->
<!-- SELECT DISTINCT G.grant_title, G.type, G.account_no
    -> FROM GRANTS AS G, GRA
    -> WHERE G.account_no=GRA.funding; -->