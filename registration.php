<?php
require_once 'connect.php';

$name=$_POST["name"];
$password=$_POST["password"];
$email=$_POST["email"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$usertype=(int)$_POST["usertype"];
$dte=date("Y/m/d");
echo $usertype;

//$qry="insert into users values('','".$email."','".$password."','".$name."',".$usertype.",'".$address."','".$contact."','".$date."')";


$qry="INSERT INTO `users` (`id`, `user_id`, `password`, `name`, `type`, `address`, `contact_no`, `date`) VALUES (NULL, '".$email."', '".$password."', '".$name."', '".$usertype."', '".$address."', '".$contact."', '".$dte."')";
echo $qry;

if (mysqli_query($conn,$qry))
{
	echo "data  inserted successfully";
}
else
{
	echo "e	rr";
}

?>