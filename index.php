<?php

                switch ($_GET['seite']) {

                                case "ueberuns": //Überuns
                                                $site = "include/ueberuns.html";
                                                $title = "Mega Busreisen Max Mustermann - Busreise mal anders";
                                                $keywords = "busreise, busreisen, urlaub, reiseurlaub, max mustermann";
                                                $description = "Erleben Sie Ihre Busreise mal anders. Wir bieten Ihnen beliebte Urlaubsziele an und bringen Sie bequem und sicher an Ihr gewünschtes Urlaubsziel hin.";
                                                break;
                                case "informationen": //Informationen
                                                $site = "include/informationen.html";
                                                $title = "";
                                                $keywords = "";
                                                $description = "";
                                                break;
                                case "reiseziele": //Reiseziele
                                                $site = "include/reiseziele.html";
                                                $title = "";
                                                $keywords = "";
                                                $description = "";
                                                break;
                                case "buchung": //Buchung
                                                $site = "include/buchung.html";
                                                $title = "";
                                                $keywords = "";
                                                $description = "";
                                                break;
                                case "impressum": // Impressum
                                                $site = "include/impressum.html";
                                                $title = "";
                                                $keywords = "";
                                                $description = "";
                                                break;
                                default: // Home Seite und alle ungueltigen Seiten
                                                $site = "include/inhalt.html";
                                                $title = "Mega Busreisen - Max Mustermann - Bequeme Busreisen";
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

        <div id="menu">
                <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="?seite=ueberuns">&Uuml;ber uns</a></li>
                        <li><a href="?seite=informationen">Informationen</a></li>
                        <li><a href="?seite=reiseziele">Reiseziele</a></li>
                        <li><a href="?seite=buchung">Buchung</a></li>
                        <li><a href="?seite=impressum">Impressum</a></li>
                </ul>
        </div>

        <div id="inhalt">
        <?php
                        require($site);
        ?>
        </div>

</body>
</html>