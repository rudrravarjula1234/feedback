<html>	
	<head>
		<link rel="stylesheet" type="text/css" href="materlize\css\materialize.css">
        <style>
          .font {font-size:24px;}
        </style>
	</head>
	<body>
<div class=""><br><br><br>
	<img src="materlize\images/imgg.jpg" />
   <div class="container center-aligncard blue-grey " style="padding:20px 30px 40px;position:absolute;z-index:100;margin-top:-55vh;left:30vh;">
    <form action="insert.php" method="post">
    	<label class="white-text font">Rate overall Day1 experience in learning :</label><br>
		<input name="rating" type="radio" id="test1" value="3">
    	<label for="test1" class="white-text">Excellent</label>
      	<input name="rating" type="radio" id="test2" value="2">
     	<label for="test2" class="white-text">Good</label>
     	<input name="rating" type="radio" id="test3" value="1">
     	<label for="test3" class="white-text">Bad</label></br>
     	<label class="white-text font">How did you enjoyed learning in student to student mode:</label><br>
     	<input name="rating1" type="radio" id="test4" value="3">
    	<label for="test4" class="white-text">Excellent</label>
      	<input name="rating1" type="radio" id="test5" value="2">
     	<label for="test5" class="white-text">Good</label>
     	<input name="rating1" type="radio" id="test6" value="1">
     	<label for="test6" class="white-text">Bad</label></br>
     	<label class="white-text font">How did you rate overall facilitators teaching / clearing doubts :</label><br>
    	<input name="rating2" type="radio" id="test7" value="3">
    	<label for="test7" class="white-text">Excellent</label>
      	<input name="rating2" type="radio" id="test8" value="2">
     	<label for="test8" class="white-text">Good</label>
     	<input name="rating2" type="radio" id="test9" value="1">
     	<label for="test9" class="white-text">Bad</label><br>
    	<button  class="btn red right">submit</button>
    </form>
   </div>
</div>
		<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="materlize\js\materialize.js"></script>
	</body>
</html>	
