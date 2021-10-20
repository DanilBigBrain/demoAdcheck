<?php include("config.php"); include("scripts/subpage.php")?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include ('assets/head.php'); ?>
    <title>Adcheck</title>
</head>
<body>

<?php
$subpage_4 = new subPage();
$subpage_4->url = "https://www.focus.de/finanzen/recht/neuer-lockdown-corona-regeln-fuer-weihnachten-mit-wie-vielen-leuten-sie-jetzt-feiern-duerfen_id_12693937.html";
$subpage_4->loadSubPage();
$id = 4; ?>

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
                                    <p><strong>Die offizielle Corona-Warn-App des Bundes wird künftig auch auf den älteren iPhone-Modellen 5s und 6 laufen können. Darauf hat das Robert Koch-Institut am Dienstag in Berlin hingewiesen.</strong></p>
                                </div>
                                <div class="textBlock">

                                    <p>Apple stelle die notwendige technische Schnittstelle, das sogenannte Exposure Notification Framework, nun auch für die Betriebssystem-Version iOS 12.5 bereit. Auf den neuen iPhone-Modellen ist die Betriebssystemsversion iOS 14.2.1 aktuell. Es werde allerdings noch eine Zeit lang dauern, bis eine angepasste Version der Corona-Warn-App des Bundes für die älteren Modelle vorliege, da der Code erst angepasst werden müsse, teilte das RKI weiter mit.</p>

                                    <p> Apple kommt damit Forderung nach, die spezielle Bluetooth-Schnittstelle so zu verändern, dass noch mehr iPhone-Modelle als bislang die Corona-Tracing-App laufen lassen können. "Wir freuen uns, dass Apple sein Exposure Notification Framework nun auch für die Betriebssystem-Version iOS 12.5 bereitstellt", erklärte das RKI.</p>

                                    <p>  Die Entwickler der App, die Deutsche Telekom und SAP, stehen der Mitteilung zufolge mit Apple in Kontakt, um die Corona-Warn-App der Bundesregierung für diese Modelle künftig verfügbar zu machen. "Die Übertragung der Corona-Warn-App auf iOS 12.5 ist möglich, aber mit Aufwand verbunden. Die Unternehmen arbeiten gemeinsam mit Apple mit Hochdruck an den nötigen Anpassungen."</p>

                                    <p> Ein genauer Zeitpunkt, wann die Corona-Warn-App auf iPhones 5s und 6 heruntergeladen werden kann, lasse sich gegenwärtig noch nicht abschätzen. Die Unternehmen würden dazu schnellstmöglich wieder informieren.</p>

                                    <p> Die Corona-Warn-App der Bundesregierung wurde bis heute mehr als 24 Millionen Mal heruntergeladen. Experten schätzen, dass sie von rund 22 Millionen Menschen aktiv genutzt wird. Die Wirksamkeit der App erhöht sich, je mehr Menschen die Anwendung auch tatsächlich einsetzen.</p>
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