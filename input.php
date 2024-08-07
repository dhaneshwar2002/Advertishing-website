<?php

$ename=$_REQUEST['ename'];
$email_address=$_REQUEST['email_address'];
$subject=$_REQUEST['subject'];
$phone=$_REQUEST['phone'];


include 'contect_input.php';

$q="insert into send(ename, email_address,subject,phone)value( '$ename','$email_address','$subject','$phone' )";
mysqli_query($con,$q);


if (mysqli_affected_rows($con)>0){

header("location:contect_input.php?success");


}else{
    header("location:contect_input.php?error");


}

?>