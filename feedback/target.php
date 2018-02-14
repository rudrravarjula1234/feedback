<?php
include "fb/db.php";

if(
	isset($_POST["domin"])&&
	isset($_POST["q1"])&&
	isset($_POST["q2"])&&
	isset($_POST["q3"])&&
	isset($_POST["s1"])&&
	isset($_POST["s2"])&&
	isset($_POST["s3"])
	)
{

//$username=$_POST["username"];
$domin = $_POST["domin"];

$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];

$s1=$_POST["s1"];
$s2=$_POST["s2"];
$s3=$_POST["s3"];


	


	$ins="insert into feed values('$domin','$q1','$q2','$q3','$s1','$s2','$s3')";

	$quer = mysql_query($ins) or die(mysql_error());



	if($quer){
		echo "<script>alert('successfully submitted');</script>";
		   echo "<script>window.location='index.php';</script>";

	}
}
	else{

     echo "<script>alert('Please fill all values');</script>";
     echo "<script>window.location='index.php';</script>";//creae feedback UI

	}

?>