<?php 
	include "db.php";

	$res= "SELECT * FROM `feedback`";
	$sql = mysqli_query($conn,$res);
	$row = mysqli_num_rows($sql);
	$tot = $row*3;
	echo $tot;
	echo "<table>";
	echo "<tr>";
		echo "<th>sno</th>";
		echo "<th>overoll rating</th>";
		echo "<th>learning</th>";
		echo "<th>doubts</th>";
	echo "</tr>";
	$rem=0;$rem1=0;$rem2=0;
	for($i=0;$i<$row;$i++){
		$fet = mysqli_fetch_array($sql);
		
	echo "<tr>";
		echo "<td>".$fet["sno"]."</td>";
		echo "<td>".$re=$fet["rate"]."</td>";
		echo "<td>".$re1=$fet["rate1"]."</td>";
		echo "<td>".$re2=$fet["rate2"]."</td>";
	$rem=$re+$rem;
	$rem1=$re1+$rem1;
	$rem2=$re2+$rem2;
	
	echo "</tr>";	
}
	
	echo "</table>"; 
	echo "overall %".($rem/$tot)*100;
	echo "<br>";
	echo "learning %".($rem1/$tot)*100;
	echo "<br>";
	echo "doubts%".($rem2/$tot)*100;
	echo "<br>";
?>