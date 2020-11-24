<html>
<head>
<style>
h1, div {
	text-align:center;
}
img {
	border-radius: 10px;
}
.imgs {
	margin-bottom: 50px;
}
</style>
</head>
<body>
<?php
echo "<h1>Lab06 - Part01: Gallery</h1>";
$conn = mysqli_connect("localhost", "r35yu", "CajilAyp", "r35yu");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT subject, location, date_taken, url FROM L6P1TABLE ORDER BY date_taken ASC';
$result = mysqli_query($conn, $sql);
echo "<h3>Text information about the pictures: </h3>";
echo "<div>";
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "<p><b>Subject: </b>" . $row['subject'] . ", <b>Location: </b>" . $row['location'] . ", <b>Date_taken: </b>" . $row['date_taken'] . "</p>";
       	}
} else {
	echo "<p>Sorry, the table is empty.</p>";
}
echo "</div>";
echo "<h3>Pictures that were taken in Ontario: </h3>";
$sql2 = 'SELECT subject, location, url FROM L6P1TABLE';
$urls = mysqli_query($conn, $sql2);
if (mysqli_num_rows($urls) > 0) {
	while($urlSet = mysqli_fetch_assoc($urls)) {
		echo "<div class='imgs'>";
		if ($urlSet['location'] == 'Ontario'){
			echo "<img src=" . $urlSet['url'] . ">";
			echo "<p><b>Subject: </b>" . $urlSet['subject'] . ", <b>Location: </b>" . $urlSet['location'] . "</p>";
		}
		echo "</div>";
	}
}
else {
	echo "<p>Sorry, the table is empty.</p>";
}

$conn->close();
?>
</body>
</html>
