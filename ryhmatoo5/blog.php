
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
	<script type="text/javascript" src="dygraph.js"></script>
</head>
<body>
<div class="topnav">
  <a href="http://greeny.cs.tlu.ee/~ttaevik/graafik/test/index.php">Graafikud</a>
  <a href="http://greeny.cs.tlu.ee/~ttaevik/graafik/test/blog.php">Blogi</a>
  
</div>

<?php
require("config.php");
$database = "if17_ttaevik_2";

$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);

$sql = "SELECT id, screenshot FROM screenshots";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". '<img src="'.$row["screenshot"].'" />'. "<br>";
    }
} else {
    echo "Sisestatud graafikud puuduvad";
}

$mysqli->close();

?>


	
</body>
</html>



