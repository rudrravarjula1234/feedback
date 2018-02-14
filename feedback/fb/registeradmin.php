<!DOCTYPE html>
<html>

<head>
  

<link rel="stylesheet" type="text/css" href="datastyles.css" />
<script type="text/javascript" src="js1.js"></script>
<script type="text/javascript" src="js2.js"></script>

<style>

body{
	font-family:verdana;
}

</style>
</head>












<body>


<h3 style="text-transform:uppercase;text-align:center;">Projects</h3>

<?php
include('db.php');

$query = "select * from feed";
$result = mysql_query($query) or die(mysql_error());
$rows = mysql_num_rows($result);
$fields = mysql_num_fields($result);

?>

<table id="example" class="display" cellspacing="0" width="100%" border="1"> 
<thead>
<tr>
<th>ID</th>
<th>DOMIN</th>
<th>QUE1</th>
<th>QUE2</th>
<th>QUE3</th>
<th>COMM1</th>
<th>COMM2</th>
<th>COMM3</th>
</tr>
</thead>


<tbody>

<?php

for($i=0;$i<$rows;$i++)
{
	
	?> <tr> <td> <?php 

	echo $i+1; 

	?></td><?php

   $row = mysql_fetch_array($result);

     for($j=0;$j<$fields;$j++){     
          
          echo "<td>".$row[$j]."</td>";

		

	 }


   ?> </tr> <?php
}

?>

</tbody>

</table>

<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>

</html>