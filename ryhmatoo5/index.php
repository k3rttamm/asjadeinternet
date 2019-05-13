
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



<h2>Graafikud</h2>

<form method="POST" enctype="multipart/form-data" action="save.php" id="myForm" >
	<input type="hidden" name="img_val" id="img_val" value="" />
</form>


<h3>Valguse ja pikkuse graafik</h3>					
<div id="target1">
		<div id="graphdiv2"	style="width:500px; height:300px;"></div>
		<br>
		Kommentaarid: <textarea rows="4" cols="50"></textarea>
	</div>
	<input type="submit" value="Salvesta graafik" onclick="capture1();" />
<br>
<br>
<h3>Mullaniiskuse ja temperatuuri graafik</h3>
	<div id="target2">
		<div id="graphdiv3"	style="width:500px; height:300px;"></div>
		<br>
		Kommentaarid: <textarea rows="4" cols="50"></textarea>
	</div>
	<input type="submit" value="Salvesta graafik" onclick="capture2();" />
<br>
<br>
<select id="drop">
  <option value="gameStarted" >reaktsioonimäng</option>
  <option value="stats">Lauamäng</option>
  <option value="mootmed">Taimekasvatus II</option>
    
</select>
<br>
<button onclick="updateGraph()">uuenda graafi</button>

<h3>Graafikud</h3>
	<div id="target3">
		<div id="graphdiv4"	style="width:500px; height:300px;"></div>
		<br>
		Kommentaarid: <textarea rows="4" cols="50"></textarea>
	</div>
	<input type="submit" value="Salvesta graafik" onclick="capture3();" />

<script type="text/javascript">
	function capture1() {
		$('#target1').html2canvas({
			onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
				$('#img_val').val(canvas.toDataURL("image/png"));
                //Submit the form manually
				document.getElementById("myForm").submit();
			}
		});
	}

	function capture2() {
		$('#target2').html2canvas({
			onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
				$('#img_val').val(canvas.toDataURL("image/png"));
                //Submit the form manually
				document.getElementById("myForm").submit();
			}
		});
	}

	function capture3() {
		$('#target3').html2canvas({
			onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
				$('#img_val').val(canvas.toDataURL("image/png"));
                //Submit the form manually
				document.getElementById("myForm").submit();
			}
		});
	}

  g2 = new Dygraph(
    document.getElementById("graphdiv2"),
    "valgus_pikkus.csv", // path to CSV file
    { showRangeSelector:true
    
    });

   g3 = new Dygraph(
    document.getElementById("graphdiv3"),
    "mullaniiskus_temperatuur.csv", // path to CSV file
    { showRangeSelector:true}          // options
  );

g4 = new Dygraph(
    document.getElementById("graphdiv4"),
    document.getElementById("drop").value+".csv", // path to CSV file
    { showRangeSelector:true
    
    });

  function updateGraph()
{ 
	g4 = new Dygraph(
    document.getElementById("graphdiv4"),
    document.getElementById("drop").value+".csv", // path to CSV file
    { showRangeSelector:true
    
    });
}
  
</script>

<style type="text/css">
	#target {
		border: 1px solid #CCC;
		padding: 5px;
		margin: 5px;
	}
	h2, h3 {
		color: #003d5d;
	}
	p {
		color:#AA00BB;
	}
	#more {
		font-family: Verdana;
		color: purple;
		background-color: #d8da3d;
	}
</style>


	
</body>
</html>



