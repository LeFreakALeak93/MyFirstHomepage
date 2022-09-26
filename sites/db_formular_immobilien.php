<!DOCTYPE HTML>
<html>
	<head>
		<title>Auswertung der Preisanfrage</title>
		<meta charset="UTF-8"/>
		<link ref="css/style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h2>Formular</h2>
		<p>Preiskategorien für unsere Immobilien</p>
		<?php
			$con = mysqli_connect("", "root");
			mysqli_select_db($con, "immobilien");
			$sql="SELECT ort, zimmeranzahl, wohnflaeche, grundstueck FROM angebote WHERE ";
			
			switch($_POST["preis"])
			{
				case 1: 
				$sql .= "kaufpreis <= 100000";
				break;				
						
				case 2: 
				$sql .= "kaufpreis >= 250000 AND kaufpreis <= 500000";
				break;
						
				case 3:
				$sql .= "kaufpreis > 500000 AND kaufpreis <= 750000";
				break;
						
				case 4: 
				$sql .= "kaufpreis > 1000000";
				break;
			}
			
			$res = mysqli_query($con, $sql);
			$num = mysqli_num_rows($res);
			if ($num > 0) echo "<span style='color:darkred;font-weight:900;'>Ergebnisse: </span><hr>";
			else		  echo "Keine Ergebnisse <br/>";
			echo "<table>";
			echo "<tr><th>Ort</th><th>Zimmeranzahl</th><th>Wohnfläche</th>
			<th>Grundstücksgröße</th>";
			while($dsatz = mysqli_fetch_assoc($res))
				echo "<tr><td>".$dsatz["ort"]."</td><td>".$dsatz["zimmeranzahl"]."</td><td>".$dsatz["wohnflaeche"]."qm</td><td>".$dsatz["grundstueck"] ."qm²</td></tr>";
			echo "</table>";
			mysqli_close($con);

		?>
	</body>
</html>