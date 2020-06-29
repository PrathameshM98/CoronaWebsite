<?php
require_once("dbbb.php");
$username = $_POST['Username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$msg = $_POST['msg'];
$checkbox1 = $_POST['coronasym'];
$newvalue = implode(",", $checkbox1);
echo $insertquery = " insert into coronacase( username,email,mobile,symp,message) values('$username','$email','$mobile','$newvalue','$msg') ";
$query = mysqli_query($con, $insertquery);
header("location:mainpage.php?msg=1");