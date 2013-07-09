<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Website INT02</title>
	<meta name="language" content="de">
	<meta name="keywords" content="Suchbegriffe">
	<meta name="description" content="Beschreibung">
	<meta name="robots" content="index,follow">
	<meta name="audience" content="alle">
	<meta name="page-topic" content="Website INT02">
	<meta name="revisit-after" CONTENT="7 days">	
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="?seite=1">1</a></li>
			<li><a href="?seite=2">2</a></li>
		</ul>	
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

