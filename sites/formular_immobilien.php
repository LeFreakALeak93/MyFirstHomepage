<!DOCTYPE HTML>
<html>
	<head>
		<title>Formularauswertung</title>
		<meta charset="UTF-8"/>
		<link ref="css/style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h2>Formular</h2>
		<p>Preiskategorien für unsere Immobilien</p>
		<form action="db_formular_immobilien.php" method="post">
			<p><input type="radio" name="preis" value="1" > bis 100.000 &euro;</p>
			<p><input type="radio" name="preis" value="2" > ab 250.000 &euro; bis 500.000 &euro;</p>
			<p><input type="radio" name="preis" value="3" > ab 500.000 &euro; bis 750.000 &euro;</p>
			<p><input type="radio" name="preis" value="4" > ab 1.000.000 &euro;</p>
			<p><input type="submit"/><input type="reset"/></p>
	</body>
</html>