



<!DOCTYPE html>
<html>
<head>
	
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	
</head>






<?php


include 'db.php';


$qr ="select * from feed";

$qr2 = mysql_query($qr);



$row = mysql_num_rows($qr2);

$col=mysql_num_fields($qr2);


?>





<?php
$cou1=0;
$cou2=0;
$cou3=0;
$cou4=0;
$cou5=0;

for($i=0;$i<$row;$i++){



	$fetch = mysql_fetch_array($qr2);

	for($j=1;$j<4;$j++){
           
           if($fetch[$j]==5){
           	$cou5=$cou5+1; 
           }
            elseif($fetch[$j]==4){
           	$cou4=$cou4+1; 
           }
            elseif($fetch[$j]==3){
           	$cou3=$cou3+1; 
           }
            elseif($fetch[$j]==2){
           	$cou2=$cou2+1; 
           }
            elseif($fetch[$j]==1){
           	$cou1=$cou1+1; 
           }
		//echo "<td>".$fetch[$j]."</td>";
	}

	
}

$sum = $cou1+$cou2+$cou3+$cou4+$cou5;
//echo "sum is ".$sum."<br>";

//echo $cou1." ".$cou2." ".$cou3." ".$cou4." ".$cou5."<br>";

$per5=($cou5*100)/$sum;
$per4=($cou4*100)/$sum;
$per3=($cou3*100)/$sum;
$per2=($cou2*100)/$sum;
$per1=($cou1*100)/$sum;


?>
<body>

<div class="container" style="position:absolute;top:100px;">
 <div class="row">
  <div class="col-md-2">
  </div>

  <div class="col-md-8">

<table class="table table-hover table-bordered " >
    <thead>
      <tr>
        <th>Strongly Agree</th>
        <th>Agree</th>
        <th>Neither Agree nor Disagree</th>
        <th>Disagree</th>
        <th>Strongly Disagree</th>
      </tr>
    </thead>
    <tbody>
     <tr>
      <td><?php echo round($per5,2)."%"; ?></td>
      <td><?php echo round($per4,2)."%"; ?></td>
      <td><?php echo round($per3,2)."%"; ?></td>
      <td><?php echo round($per2,2)."%"; ?></td>
      <td><?php echo round($per1,2)."%"; ?></td>
     </tr>
     </tbody>
</table> 

     <h3>Agree: <?php echo round((($per5+$per4)),2)."%"; ?></h3>
     <h3>Neutral: <?php echo round($per3,2)."%"; ?> </h3>
     <h3>Disagree: <?php echo round((($per2+$per1)),2)."%"; ?></h3>
</div>

<div class="col-md-2">
</div>

</div>    
</div>


</body>
</html>













    