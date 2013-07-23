<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <title>Mega Busreisen - Max Mustermann - Bequeme Busreisen</title>
        <meta name="language" content="de">
        <meta name="keywords" content="Reiseunternehmen Max Mustermann, Ferien, Erholung, Busreisen, Urlaubsreise">
        <meta name="description" content="Busreisen zu schönen Urlaubszielen. Das Reiseunternehmen Max Mustermann bringt Sie zu den schönsten Reisezielen in bequemen Reisebussen.">
        <meta name="robots" content="index,follow">
        <meta name="audience" content="alle">
        <meta name="page-topic" content="Reiseunternehmen - Max Mustermann">
        <meta name="revisit-after" CONTENT="7 days">
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
                switch ($_GET['seite']) {

                        case "ueberuns":
                                require("include/ueberuns.html");
                                break;
                        case "informationen":
                                require("include/informationen.html");
                                break;
                        case "reiseziele":
                                require("include/reiseziele.html");
                                break;
                        case "buchung":
                                require("include/buchung.html");
                                break;
                        case "impressum":
                                require("include/impressum.html");
                                break;
                        default:
                                require("include/inhalt.html");

                }
        ?>
        </div>

</body>
</html>
