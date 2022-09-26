<?php
// Session starten oder wieder aufnehmen
	session_start();
	// Prüfung, ob ein Wert in der Variablen existiert
	if(isset($_POST["n"]))
	{
		if($_POST["n"]=="Lukas" && $_POST["p"]=="1234" || $_POST["n"]=="Heiner" && $_POST["p"]=="5678")
		{
			/* Zuweisung des Wertes aus $_POST an $_SESSION, sodass er während der Session zur
			 Verfügung steht */
			$_SESSION["n"] = $_POST["n"];
		}
	}
	/* Zugangsregeln */
	if(!isset($_SESSION["n"]))
		exit("<p>Kein Zugang möglich<br/><a href='sc_login.php'>" . "Zum Login</a></p>");
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
	<style>
      table{
        border:3px solid lightblue;
		margin:2% 1%;
      }
      th,td{
        text-align:left;
        border:1px solid yellowgreen;
        width:16em;
        height:2em;
        padding:10px;
      }
	</style>
  </head>
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
	  <section>
	  <?php
		// Auslesen der ID aus Anchor über Superglobale Variable $_GET
		if(isset($_GET["id"]))
			// Verbindungsaufbau mit der Datenbank
			$con = new mysqli("","root","", "immobilien");
			// Übergabe der SQL - Anweisungen an die Variable $sql
			$sql = "SELECT * FROM angebote WHERE id = "
			. intval($_GET["id"]);
			$res= $con->query($sql);
			// Auslesen des Datensätze aus dem Array
			$dsatz=$res->fetch_assoc();
			// Ausgabe der Datensätze in Tabellenform
			echo "<table>";
			echo "<tr><td rowspan='6'><a href='db_immobilien_desc_a.php'><img src='../images/".$dsatz["dateiname"]."' width='250' height='250' title='Zurück zur Übersicht'/></a></td>";
			echo "<td><b>Ort: </b>".$dsatz["ort"]."</td></tr><tr><td><b>Kaufpreis: </b>".number_format($dsatz["kaufpreis"],2,",",".")." €</td></tr><tr><td><b>Zimmeranzahl: </b>".$dsatz["zimmeranzahl"]."</td></tr><tr><td><b>Wohnfläche: </b>".$dsatz["wohnflaeche"]." qm</td></tr><tr><td><b>Grundstück: </b>".$dsatz["grundstueck"]." qm</td></tr>";
			echo "</table>";
			// Verbindung beenden
			$res->close();
			$con->close();
		?>
		<p><a href="anfragen.html"> LogOut </a></p>
      </section>
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