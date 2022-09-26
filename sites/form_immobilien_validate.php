<!DOCTYPE HTML>
<html>
  <head>
    <title>Kontakt</title>
    <meta charset="utf-8"/>
    <link href="../css/main.css" rel="stylesheet" type="text/css"/>
	<link href="../sitescss/contact.css" rel="stylesheet" type="text/css"/> 
	<link rel="preconnect" href="https://fonts.googleapis.com"/>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
	<link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@300&display=swap" rel="stylesheet"/>
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
		  <h3>Formularauswertung</h3>
		  <h4>Auswertung der Formulareingaben</h4>
		   <?php 
		   // Auslesen der Key-Value-Paare über Superglobale Variable $_POST aus dem Formular
			echo "<p>";
			if(isset($_POST["newsletter"])) {
			// Ausgabe der Werte aus Key-Value-Paaren
			echo  $_POST["anrede"] . " " . $_POST["vorname"] . " " . $_POST["nachname"] . "<br/>";
			echo  $_POST["email"] . " " . $_POST["nachricht"]  . "<br/>";
			}
			else
			{
			// keine Ausgabe, da Checkbox "Newsletter" nicht angeklickt
				echo "Sie haben keinen Newsletter eingetragen.";
			}
			echo "</p>";
		   ?>
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