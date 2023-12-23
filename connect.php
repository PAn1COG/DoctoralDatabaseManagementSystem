<?php
// Sushrut Diwan 1002024368, Nihar Gharat 1001963506
$servername='localhost';
$username='root';
$password='';
$dbname = "doctoral";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

?>