<?php
if(!isset($_COOKIE['views'])){
	setcookie('views', 1 ,time()+3600);
	echo "<p>Welcome to this website, it is the first time you visit this website.</p>";
}
else{
    	$views=$_COOKIE['views']+1;
	setcookie('views',$views,time()+3600);
	echo "<p>The number of times you visit this website is " . $views . "</p>";
}
?>
<html>
<body>
<?php
$inputR = $_POST['rows'];
$inputC = $_POST['cols'];
if (is_numeric($inputR) and is_numeric($inputC)){
	$rows = (int)$inputR;
	$cols = (int)$inputC;
	if (($rows >= 3 and $rows <= 12) and ($cols >= 3 and $cols <=12)){
		for ($x = 1; $x <= $rows; $x++){
			for ($y = 1; $y <= $cols; $y++) {
				$num = (string)$x*$y;
				$numStr = "<pre style='display:inline;'>".str_pad($num, 5)."</pre>";
				echo $numStr;
			}	
		echo "<br>";
		}
	}		
else 
	echo "<p>Sorry, your input should between 3-12.</p>";
}
else
	echo "<p>Sorry, you input is invalid.</p>";	
?>
<a href="https://www.cs.ryerson.ca/~r35yu/lab05/Lab05-Part1.html">Enter Again</a>
</body>
</html>
