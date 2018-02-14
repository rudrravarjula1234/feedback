<?php 
	include "db.php";
	$rate1 =  $_POST['rating1'];
	$rate = $_POST['rating'];
	$rate2 = $_POST['rating2'];
	$sql= "INSERT INTO  `feedback`.`feedback` (`rate` ,`rate1`,`rate2`) VALUES ('$rate','$rate1','$rate2')";
	$sql1= mysqli_query($conn,$sql);
	if($sql){
			echo "<script>alert('feedback sent sucessfully')</script>";
			echo "<script>window.location='index.php'</script>";		
	}
	else{
			echo "<script>alert('please submit feedback again')</script>";
			echo "<script>window.location='index.php'</script>";	
	}
?>