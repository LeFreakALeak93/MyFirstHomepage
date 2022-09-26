<?php
	/* Session - Start oder Session - Wiederaufnahme */
	session_start();
	/* Beenden der Session */
	session_destroy();
	$_SESSION = array();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Anfragen</title>
    <meta charset="utf-8"/>
    <link href="../css/main.css" rel="stylesheet" type="text/css"/>
	<link href="../sitescss/table.css" rel="stylesheet" type="text/css"/>  
	<link rel="preconnect" href="https://fonts.googleapis.com"/>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
	<link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@300&display=swap" rel="stylesheet"/>
  </head>
  <style>
	table{
        border:3px solid lightblue;
		margin-top:1%;
      }
    th,td{
        text-align:left;
        border:1px solid yellowgreen;
        width:16em;
        height:2em;
        padding:10px;
     }
  </style>
  <body>
    <header id="head">
		<img src="../images/banner/bild1.jpg" alt="Logo Immobilienmakler" title="Logo Immobilienmakler"/>
		<hgroup>
			<h2>Meyer Immobilien GmbH</h2>
			<h4>Telefon: +49 (0) 30 - 755 68 32</h4>
			<h4>E-Mail: info@meyer-immobilien-gmbh.de</h4>
		</hgroup>
	</header>
		<div id="navigation">
          <ul>
            <li><a href="../index.html">Start</a></li>
            <li><a href="immobilien.html">Immobilien</a></li>
            <li><a href="team.html">Über uns</a>
				<ul>
					<li><a href="team.html">Unser Team</a></li>
					<li><a href="team.html">Anfahrt</a></li>
				</ul>
			</li>
            <li><a href="anfragen.html">Anfragen</a></li>
            <li><a href="contact.html">Kontakt</a></li>
          </ul>
        </div>
	  <body>
		<h2 style="color:#000000;">Preiskategorien für unsere Immobilien</h2>
		<?php
			// Verbindung mit dem Server
			$con = mysqli_connect("", "root");
			// Auswahl der entsprechenden Datenbank
			mysqli_select_db($con, "immobilien");
			// Übergabe der SQL - Anweisungen und Speicherung in der Variablen $sql
			$sql="SELECT ort, zimmeranzahl, wohnflaeche, grundstueck FROM angebote WHERE ";
			// Auswahl über Kategorie "Kaufpreis" mit festgelegten Grenzen
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
			// Verarbeitung der Spalten aus Datenbank
			if ($num > 0) echo "<span style='color:darkred;font-weight:900;'>Ergebnisse: </span><hr>";
			else		  echo "Keine Ergebnisse <br/>";
			// Ausgabe der Ergebnisse in Tabellenform, 
			echo "<table>";
			echo "<tr><th>Ort</th><th>Zimmeranzahl</th><th>Wohnfläche</th>
			<th>Grundstücksgröße</th>";
			// Auslesen der Datensätze aus dem Array in der Datenbank
			while($dsatz = mysqli_fetch_assoc($res))
				echo "<tr><td>".$dsatz["ort"]."</td><td>".$dsatz["zimmeranzahl"]."</td><td>".$dsatz["wohnflaeche"]." qm</td><td>".$dsatz["grundstueck"] ." qm</td></tr>";
			echo "</table>";
			// Verbindung beenden
			mysqli_close($con);

		?>
		<p><a href="anfragen.html"> LogOut </a></p>
		<p><a href="db_immobilien_auswahl_kategorie_a.php"> Zurück </a></p>
      </body>
	<div class="clearfix"></div>
 	<footer>
		<div>
			<p><a href="impressum.html">Impressum</a> | <a href="contact.html">Kontakt</a> | <a href="#head"> >>> nach oben </a></p>
		</div>
		<div>
			<a href="https://de-de.facebook.com/" target="_blank"><img src="../icon/icon-facebook.png" alt="facebook startsite" title="icon1"/></a>
			<a href="https://www.google.de/?h1=de" target="_blank"><img src="../icon/icon-google-plus.png" alt="google startsite" title="icon2"/></a>
			<a href="https://twitter.com" target="_blank"><img src="../icon/icon-twitter.png" alt="twitter startsite" title="icon3"/></a>  
		</div>
	</footer>
  </body>
</html>