<?php
        // false = disable Url Rewriting
        // true = enable URl Rewriting. .htaccess file needed
        define(USE_MOD_REWRITE, true);

                switch ($_GET['seite']) {

                                case "reiseziele": //Reiseziele
                                                $site = "include/reiseziele.php";
                                                $title = "Busreise Urlaubsziele - Jetzt Reiseziel auswählen";
                                                $keywords = "busreise, busreisen, urlaub, urlaubsziel, urlaubsziele, mega busreisen max mustermann";
                                                $description = "Wählen Sie Ihre Busreise aus. Sie können aus unterschiedlichen Busreisen ein Urlaubsziel auswählen und wir bringen Sie sicher und schnell ans Ziel.";
                                                break;
                                case "unterkuenfte": // Unterkuenfte
                                                $site = "include/unterkuenfte.php";
                                                $title = "Übersicht der Unterkünfte bei Ihren Reisezielen - Max Mustermann";
                                                $keywords = "unterkünfte der reiseziele, hotel, hotelzimmer, ferienhaus, ferienhäuser, unterkunft bei busreise";
                                                $description = "Eine angenehme Busreise und dann in tollen Unterkünften nächtigen. Hier finden Sie eine Übersicht über die verschiedenen Unterkünften der Reiseziele";
                                                break;
                                case "buchung": //Buchung
                                                $site = "include/buchung.html";
                                                $title = "Busreise buchen - Buchen Sie Ihre Busreise bei Max Mustermann";
                                                $keywords = "busreise, busreise buchen, buchungsanfrage busreise, busreise Buchung";
                                                $description = "Jetzt Busreise auswählen, Buchungsanfrage stellen oder gleich direkt Ihre gewünschte Busreise buchen. Genießen Sie Ihren Urlaub und erleben Sie mehr aus der Nähe.";
                                                break;
                                case "informationen": //Informationen
                                                $site = "include/informationen.html";
                                                $title = "Informationen zu Busreisen mit Max Mustermann Mega Busreisen";
                                                $keywords = "busreisen, urlaub, busreise, urlaubsreise, max mustermann, mega busreisen max mustermann";
                                                $description = "Hier finden Sie weitere Informationen zum Ablauf der Busreise. Erfahren Sie mehr über Ihren nächsten Busreise Urlaub. Sie werden sich wohl fühlen.";
                                                break;
                                case "ueberuns": //Ueberuns
                                                $site = "include/ueberuns.html";
                                                $title = "Mega Busreisen Max Mustermann - Busreise mal anders";
                                                $keywords = "busreise, busreisen, urlaub, reiseurlaub, max mustermann";
                                                $description = "Erleben Sie Ihre Busreise mal anders. Wir bieten Ihnen beliebte Urlaubsziele an und bringen Sie bequem und sicher an Ihr gewünschtes Urlaubsziel hin.";
                                                break;
                                case "impressum": // Impressum
                                                $site = "include/impressum.html";
                                                $title = "Mega Busreisen Max Mustermann Impressum";
                                                $keywords = "busreisen max mustermann, max mustermann, mega busreisen max mustermann";
                                                $description = "Mega Busreisen Max Mustermann Busreisen. Ihr Busreise Unternehmen. Erleben Sie Ihre Busreise ganz anders und fühlen Sie sich bereits beim Einsteigen wie im Urlaub.";
                                                break;
                                default: // Home Seite und alle ungueltigen Seiten
                                                $site = "include/inhalt.html";
                                                $title = "Mega Busreisen Max Mustermann - Bequeme Busreisen";
                                                $keywords = "Reiseunternehmen Max Mustermann, Ferien, Erholung, Busreisen, Urlaubsreise";
                                                $description = "Busreisen zu schönen Urlaubszielen. Das Reiseunternehmen Max Mustermann bringt Sie zu den schönsten Reisezielen in bequemen Reisebussen.";
        }

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <title><?php print $title;?></title>
        <meta name="language" content="de">
        <meta name="keywords" content="<?php print $keywords;?>">
        <meta name="description" content="<?php print $description;?>">
                <meta name="robots" content="index,follow">
        <meta name="audience" content="alle">
        <meta name="page-topic" content="Mega Busreisen - Max Mustermann - Bequeme Busreisen">
        <meta name="revisit-after" CONTENT="7 days">
                <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" >
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--[if IE]>
                <link rel="stylesheet" type="text/css" href="css/ie.css">
        <![endif]-->
</head>
<body>


        <div id="container">

        <div id="menu">
                <ul>
                        <li><a href="<?php print (USE_MOD_REWRITE) ? "index.html" : "index.php"?>">Home</a></li>
                        <li><a href="<?php print (USE_MOD_REWRITE) ? "reiseziele.html" : "?seite=reiseziele"?>">Reiseziele</a></li>
                        <li><a href="<?php print (USE_MOD_REWRITE) ? "unterkuenfte.html" : "?seite=unterkuenfte"?>">Unterkünfte</a></li>
                        <li><a href="<?php print (USE_MOD_REWRITE) ? "buchung.html" : "?seite=buchung"?>">Buchung</a></li>
                        <li><a href="<?php print (USE_MOD_REWRITE) ? "informationen.html" : "?seite=informationen"?>">Informationen</a></li>
                        <li><a href="<?php print (USE_MOD_REWRITE) ? "ueberuns.html" : "?seite=ueberuns"?>">&Uuml;ber uns</a></li>
                        <li><a href="<?php print (USE_MOD_REWRITE) ? "impressum.html" : "?seite=impressum"?>">Impressum</a></li>
                </ul>
        </div>

        <div id="inhalt">
        <?php
                        require($site);
        ?>
        </div>

        </div>

        <div id="footer"><center>Copyright 2013 - Mega Busreisen Max Mustermann</center></div>


</body>
</html>
