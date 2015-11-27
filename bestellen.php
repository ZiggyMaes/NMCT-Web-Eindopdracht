<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Bestelformulier</title>
    <link rel="stylesheet" media="screen and (min-width: 960px)" href="css/all-resolutions.css" />
    <link rel="stylesheet" media="screen and (max-width: 480px)" href="css/mobile.css" />
    <link rel="stylesheet" media="screen and (min-width: 480px) and (max-width: 960px)" href="css/responsive.css" />
    <link rel="stylesheet" media="print" href="css/print.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <header>
        <div id="ghost-top"></div>
        <a href="index.html"><img src="images/logo.png" /></a>
        <nav id="main-nav">
            <ul>
                <li><a href="index.html">Homepage</a></li>
                <li><a href="nieuws.html">Nieuws</a></li>
                <li><a href="">Informatie</a></li>
                <li class="nav-active"><a href="bestellen.html">Bestellen</a></li>
            </ul>
        </nav>
        <h1>Bestelformulier</h1>
    </header>
    
<?php
    if(!isset($_POST['btnsubmit']))
    {
        echo('U kunt niet rechstreeks naar deze pagina navigeren.');
        header("refresh:5;url=bestellen.html" );
    }
    else
    {
        $producten = array
        (
        "Basisspel", "Uitbreiding: basisspel met 5 &amp; 6 spelers", "Uitbreiding: Zeevaarders", "Uitbreiding: Zeevaarders met 5 &amp; 6 spelers", "Uitbreiding: Steden en Ridders", "Uitbreiding: Steden en Ridders met 5 &amp; 6 spelers",
        "Uitbreiding: Kooplieden en Barbaren", "Uitbreiding: Kooplieden en Barbaren met 5 &amp; 6 spelers", "Uitbreiding: Piraten en Ontdekkers", "Uitbreiding: Piraten en Ontdekkers met 5 &amp; 6 spelers", "Uitbreiding: De Specialisten van Catan", 
        "Uitbreiding: De Koloni&euml;n van Catan", "Uitbreiding: De Woestijnruiters van Catan", "Uitbreiding: Het Grote Kanaal van Catan", "Uitbreiding: De Wereldwonderen van Catan", "Uitbreiding: Diamanten voor Catan", "Uitbreiding: de Vissers van Catan",
        "Historische Scenario's:  Cheops &amp; Alexander de Grote", "Historische Scenario's: Troje &amp; de Grote Muur"
        );
        
        if(isset($_POST['cboaanspreking']) && !empty($_POST['cboaanspreking'])) $aanspreking = $_POST['cboaanspreking']; else FoutVeld();
        if(isset($_POST['txtnaam']) && !empty($_POST['txtnaam'])) $naam = $_POST['txtnaam']; else FoutVeld();
        if(isset($_POST['txtvoornaam']) && !empty($_POST['txtvoornaam'])) $voornaam = $_POST['txtvoornaam']; else FoutVeld();
        if(isset($_POST['txtemail']) && !empty($_POST['txtemail'])) $email = $_POST['txtemail']; else FoutVeld();
        if(isset($_POST['txtstraat']) && !empty($_POST['txtstraat'])) $straat = $_POST['txtstraat']; else FoutVeld();
        if(isset($_POST['txthuisnummer']) && !empty($_POST['txthuisnummer'])) $huisnummer = $_POST['txthuisnummer']; else FoutVeld();
        if(isset($_POST['txtbus'])) $bus = $_POST['txtbus'];
        if(isset($_POST['txtpostcode']) && !empty($_POST['txtpostcode'])) $postcode = $_POST['txtpostcode']; else FoutVeld();
        if(isset($_POST['txtgemeente']) && !empty($_POST['txtgemeente'])) $gemeente = $_POST['txtgemeente']; else FoutVeld();
        if(isset($_POST['bestelling']) && !empty($_POST['bestelling'])) $bestelling[] = $_POST['bestelling']; else FoutVeld();
        
        echo("<p>Bedankt voor uw aanvraag. Onderstaande bestelling wordt zo snel mogelijk verwerkt en verzonden naar:</p>");
        echo("<p>" . $aanspreking . " " . $voornaam . " " . $naam);
        echo("<br>" . $straat . " " . $huisnummer);
        if(!empty($bus)) echo(" Bus: " . $bus);
        echo("<br>" . $postcode . " " . $gemeente . "</p>");
        
        echo("<p><b>Bestelling:</b> <br> <ul>");
        foreach ($bestelling as $value) 
        {
            foreach($value as $id) echo("<li>" . $producten[$id] . "</li><br>");
            
        }
        echo("</ul></p>");
    }
    
    function FoutVeld()
    {
        echo('Alle velden moeten ingevuld zijn.');
        header("refresh:5;url=bestellen.html" );
    }
?>

    <footer>
        <div id="copyright">
            <p>Copyright &#169; 2014 - 999Games <br />
            Ontwerp door Ziggy Maes</p>
        </div>
        <div id="social">
            <p>Volg ons op:</p>
            <ul>
                <li><a href="https://www.facebook.com/pages/Kolonisten-van-Catannl/165010633585224" target="_blank"><img src="images/social/facebook.png" /></a></li>
                <li><a href="https://twitter.com/kolonistennl" target="_blank"><img src="images/social/twitter.png" /></a></li>
            </ul>
            <ul>
                <li><a href="http://www.linkedin.com/pub/ziggy-maes/38/365/542" target="_blank"><img src="images/social/linkedin.png" /></a></li>
                <li><a href="https://www.google.com/+ZiggyMaes" target="_blank"><img src="images/social/googlep.png" /></a></li>
            </ul>
        </div>
        <div id="references">
            <p>Handige websites:</p>
            <ul>
                <li><a href="http://nl.wikipedia.org/wiki/Kolonisten_van_Catan" target="_blank">Wikipedia artikel over de Kolonisten</a></li>
                <li><a href="http://www.999games.nl/pages/spel-families/de-kolonisten-van-catan.php" target="_blank">Website 999 Games</a></li>
                <li><a href="http://www.playcatan.com/en/" target="_blank">Speel De Kolonisten online!</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>