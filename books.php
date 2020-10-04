<?php
include("connection.php");
$cid=$_POST["c_id"];
$h=$_POST["hotel"];
$r=$_POST["room"];
$ci=$_POST["checkin"];
$co=$_POST["checkout"];
if(isset($_POST["submit"])=="submit")
{
$q1="insert into books values('$cid','$h','$r','$ci','$co')";
$success = $mysqli->query($sql);

if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For Contacting Us ";


$conn->close();

?>