<?php
$conn=new mysqli("localhost","root","","hotel_booking");
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
?>