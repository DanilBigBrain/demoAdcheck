<?php include("config.php"); include("scripts/subpage.php")?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include ('assets/head.php'); ?>
    <title>Adcheck</title>
</head>
<body>

<?php
$subpage_1 = new subPage();
$subpage_1->url = "https://www.focus.de/sport/fussball/dfbpokal/leipzig-augsburg-zoff-um-verlegung-des-dfb-pokalspiels-rb-erwaegt-klage_id_12774341.html";
$subpage_1->loadSubPage();
$id = 1; ?>

<!-- header ---------------------------->
<?php include ('assets/header.php'); ?>

<!-- main ---------------------------->
<div class="grid-wrapper">
    <div class="grid-container">
        <div class="grid-x">
            <main class="cell small-12 medium-7">
                <?php foreach ($rssNews->loadFeed()->channel->item as $item) { ?>
                    <article class="main-article">

                        <?php if($access == "lim" && ($id == 0 || $id == 2 || $id == 3 || $id == 5)) { ?>
                            <?php include('assets/subpage-error-message.php'); ?>
                        <?php } else { ?>
                            <div class="breadcrumbs">
                                <small>Nachrichten <i class="material-icons md-18">keyboard_arrow_right</i> <?php echo($rssNews->loadFeed()->channel->item[$id]->category); ?></small>
                            </div>
                            <div class="entry-header">
                                <h4><?php echo($rssNews->loadFeed()->channel->item[$id]->category); ?></h4>
                                <h2><?php echo($rssNews->loadFeed()->channel->item[$id]->title); ?></h2>
                                <img src="<?php // echo $array[$j]; $j++; ?>">
                            </div>
                            <div class="entry-image">
                                <img src="<?php echo $rssNews->loadImages()[$id];?>">
                            </div>
                            <div class="entry-footer">
                                <p class="greydate"><?php echo($rssNews->loadFeed()->channel->item[$id]->pubDate); ?></p>
                            </div>
                            <div class="entry-content">
                                <div class="leadIn">
                                    <p><strong>Die Corona-Krise kommt den Staat teuer zu stehen: 179,8 Milliarden Euro Neuschulden plant die Bundesregierung f&uuml;r 2021, zus&auml;tzlich zu den 217,8 Milliarden Euro in diesem Jahr. Doch &Ouml;konomen rechnen vor, warum wir damit locker umgehen k&ouml;nnen.</strong></p>
                                </div>
                                <div class="textBlock">
                                    <p> &#8222;Was ist einem heute 20-j&auml;hrigen Menschen perspektivisch wichtiger?&ldquo;, fragte Marcel Fratzscher im Interview mit &quot;watson&quot; k&uuml;rzlich rhetorisch: &#8222;In 30 Jahren in einer Welt zu leben ohne Klimakatastrophe, mit einer gro&szlig;en Biodiversit&auml;t, in einem Deutschland, in dem es viele gut bezahlte Jobs gibt, aus denen man w&auml;hlen kann? Oder eine Steuererh&ouml;hung von etwa 0,3 Prozent um jeden Preis zu vermeiden? Denn st&auml;rker werden sich die Staatsschulden aus der Corona-Krise f&uuml;r kommende Generationen vermutlich nicht auswirken.&ldquo;</p>

                                    <p> Die Aussage des Pr&auml;sidenten des Deutschen Instituts f&uuml;r Wirtschaftsforschung (DIW) wirkt auf den ersten Blick seltsam. Denn Deutschland t&uuml;rmt in der Corona-Krise neue Staatsschulden auf. Olaf Scholz (SPD) legte jetzt f&uuml;r 2021 einen Bundeshaushalt vor, der mit 179,8 Milliarden Euro Neuschulden rechnet. Das w&auml;re der zweith&ouml;chste Wert in der Geschichte unseres Staates seit dem Zweiten Weltkrieg. &Uuml;bertroffen wird er nur vom aktuellen Jahr, in dem am Ende sogar 217,8 Milliarden Euro Neuschulden stehen sollen. Zum Vergleich: In der Finanzkrise lag das Minus 2009 und 2010 zusammen bei 78,1 Milliarden Euro. Ab 2014 folgten sechs schuldenfreie Jahre in Folge.</p>

                                    <p> Und trotzdem sind sich &Ouml;konomen sicher, dass die Auswirkungen der Rekordschulden &uuml;berschaubar sind. Auch die DZ Bank kommt in einer neuen Auswertung zu einem erstaunlichen Ergebnis: Die Corona-Schulden werden sich demnach schon 2028 wieder amortisiert haben.</p>

                                    <p> Die Analysten schauen dabei auf die deutsche Schuldenquote. Die bezeichnet, wie hoch die gesamten Staatsschulden im Vergleich zum Bruttoinlandsprodukt (BIP), also der Wirtschaftskraft eines Landes, liegen. In Deutschland ist dieser Wert seit der Finanzkrise stetig gesunken. Lag er 2010 noch bei 82,4 Prozent, waren es 2019 nur noch 59,8 Prozent. Das ist international gesehen ein guter Wert. Der EU-Vertrag von Maastricht setzt eine Grenze von 60 Prozent, die aber viele Staaten seit Jahrzehnten &uuml;berschreiten.</p>

                                    <p> Grund f&uuml;r den R&uuml;ckgang der Schuldenquote war neben den schuldenfreien Jahren der stetige Anstieg des BIPs. In der Corona-Krise ist es genau umgekehrt: Die Staatsschulden steigen stark an, das BIP wird dieses Jahr sinken. Folglich wird die Schuldenquote Ende kommenden Jahres voraussichtlich bei rund 74 Prozent liegen.</p>

                                    <p> Im besten Fall sinkt die Schuldenquote auf 55 Prozent. Von dort aus soll es aber schnell wieder nach unten gehen. Die DZ Bank geht davon aus, dass die Quote schon 2027 wieder unter den Stand von 2019 sinken k&ouml;nnte. Die Rechnung dahinter geht davon aus, dass die deutsche Wirtschaft ab 2023 wieder mit demselben Tempo wie vor der Krise w&auml;chst. Das w&auml;ren rund drei Prozent pro Jahr, halb so viel, wenn man die Inflation noch abzieht.</p>

                                    <p> Arbeitet der Staat auch wieder genauso sparsam wie vor der Krise, w&uuml;rde der Schuldenstand auf knapp unter 55 Prozent im Jahr 2028 sinken. Das ginge davon aus, dass der Bund einen Prim&auml;r&uuml;berschuss von 1,5 Prozent des BIP pro Jahr erwirtschaftet. Davon w&uuml;rden noch die Zinszahlungen f&uuml;r die bestehenden Schulden abgezogen. Ein solcher Prim&auml;r&uuml;berschuss ist realistisch: Von 2011 bis 2019 lag er stets &uuml;ber diesem Wert, ab 2014 lag der Durchschnitt bei 2,4 Prozent pro Jahr.</p>

                                    <p> Selbst, wenn das nach Corona nicht m&ouml;glich sein sollte, w&uuml;rde die Schuldenquote wohl sinken: Liegt der Prim&auml;r&uuml;berschuss bei 0, betr&auml;gt sie 2028 noch rund 63 Prozent, macht der Staat pro Jahr 1,5 Prozent Prim&auml;rdefizit, f&auml;llt sie auf etwa 71,5 Prozent.</p>

                                    <p> Niedrigzinsen helfen bei der Schuldenbew&auml;ltigung.  Grund f&uuml;r die gute Entwicklung sind die niedrigen Zinsen. Seit 2005 sind die Zinsbelastungen des Bundes von 2,5 Prozent des BIP auf 0,5 Prozent gesunken. Aktuell haben fast alle deutschen Staatsanleihen sogar negative Renditen, sprich, der Staat bekommt von Investoren noch Geld daf&uuml;r, dass er sich Geld leiht. Die DZ Bank geht in ihrer Analyse davon aus, dass der durchschnittliche Zinssatz bis 2028 auf 0,29 Prozent steigt. Selbst wenn dieser Wert auf 1,5 Prozent klettern sollte, w&uuml;rden die Staatsschulden sinken. Statt bei 55 l&auml;gen sie 2028 dann bei 57,5 Prozent.</p>

                                    <p> Auch ein Anstieg auf 5 Prozent lie&szlig;e sich mit einem Prim&auml;r&uuml;berschuss noch ausgleichen. Dann w&uuml;rde sich die Schuldenquote bei etwa 68 Prozent einpendeln. &#8222;Ein solch drastischer Renditeanstieg am Markt erscheint aus heutiger Sicht aber unwahrscheinlich&ldquo;, schreiben die Analysten. In der Tat, denn daf&uuml;r m&uuml;sste die Europ&auml;ische Zentralbank erst einmal die Zinsen anheben, doch daf&uuml;r gibt es bisher keine Anzeichen. Die EZB w&uuml;rde damit Schuldenstaaten wie Italien (150 Prozent Schuldenquote) und Griechenland (187 Prozent) in ernste Bedr&auml;ngnis bringen.</p>

                                    <p> Die gute Nachricht lautet also, dass Deutschland sich die riesigen Milliardenhilfen in der Corona-Krise und Konjunkturpakete f&uuml;r die Zeit danach durchaus leisten kann. Theoretisch w&auml;re sogar noch Luft f&uuml;r weitere Ausgaben. Allerdings gilt f&uuml;r die Politik hier die alte Spiderman-Weisheit &#8222;mit gro&szlig;er Macht kommt gro&szlig;e Verantwortung&ldquo;. Oder, wie es die DZ Bank formuliert: &#8222;Fiskalischer Leichtsinn und &Uuml;bermut w&auml;ren jetzt wohl die falsche Schlussfolgerung. Investitionsprogramme sollten aber nur initiiert werden, wenn sie sich auch nachhaltig auszahlen.&ldquo; Neun Monate vor einer Bundestagswahl verlangt das viel Disziplin.</p>
                                </div>
                            </div>
                        <?php } ?>
                    </article>
                    <?php if ($j = 1) { break; } ?>
                <?php } ?>
            </main>
            <!-- ------ Sidebar ------ -->
            <?php include ('assets/sidebar-upper.php'); ?>
        </div>
    </div>
</div>

<!-- ------ Footer ------ -->
<?php include_once ('assets/footer.php'); ?>

</body>
</html>