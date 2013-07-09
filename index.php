<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Website INT02</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="?seite=1">1</a></li>
			<li><a href="?seite=2">2</a></li>
		<ul>	
	</div>

	<div id="inhalt">
	<?php 
		switch ($_GET['seite']) {

			case "1":
				require("include/1.html");
				break;
			case "2":
				require("include/2.html");
				break;
			default:
				require("include/inhalt.html");
				
		}
	?>
	</div>

</body>
</html>

