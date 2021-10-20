<?php include("config.php"); include("scripts/subpage.php")?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include ('assets/head.php'); ?>
    <title>Adcheck</title>
</head>
<body>

<?php
$subpage_3= new subPage();
$subpage_3->url = "https://www.focus.de/finanzen/recht/grosser-ueberblick-erste-bundeslaender-setzen-knallhart-lockdown-um-welche-regeln-jetzt-bei-ihnen-gelten_id_12601147.html";
$subpage_3->loadSubPage();
$id = 3; ?>

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
                                <?php if ($article_icon) { ?>
                                    <img class="article-icon" src="assets/img/logo_small.svg">
                                <?php } ?>
                            </div>
                            <div class="entry-content">
                                <div class="leadIn">
                                    <p><strong> Starke Vorgaben von der Wall Street könnten den Dax zur Wochenmitte weiter nach oben treiben. Der deutsche Leitindex notierte im frühen Handel um 1,34 Prozent höher bei 13.541 Punkten.</strong></p>
                                </div>
                                <div class="textBlock">
                                    <p>Damit ließ der Dax das Corona-Hoch bei 13.460 Punkten von Anfang September in den ersten Handelsminuten hinter sich.</p>

                                    <p>In New York hatte der US-Leitindex Dow Jones Industrial  am Vortag ein weiteres Rekordhoch nur knapp verpasst. Auch Asiens Börsen verzeichneten Kursgewinne, wenn auch moderatere.</p>

                                    <h6>Verhandlungen für US-Hilfspaket kurz vor Abschluss und neue Impulse im Brexit-Prozess</h6>
                                    <p>Die Verhandlungen in den USA über das nächste Hilfspaket für die Wirtschaft gingen auf die Zielgerade und in die Brexit-Verhandlungen sei neue Bewegung gekommen, nannte Analyst Thomas Altmann von QC Partners zwei Kaufgründe für Aktien. Am Abend dürften sich die Blicke auf die US-Notenbank Fed richten. „Die Fed wird einmal mehr sehr deutlich betonen, dass sie bereit steht, um alle Instrumente einzusetzen, sofern sich die wirtschaftliche Situation weiter verschärfen sollte“, erwartet der Börsenexperte.</p>
                                    <p>ProSiebenSat.1  rechnet angesichts einer Belebung des Werbegeschäfts mit einer fortgesetzten Erholung von der Corona-Krise. Der November sei bei den Werbeerlösen „sehr gut“ gelaufen, deutlich besser als im Vorjahr, sagte Konzernchef Rainer Beaujean der „Süddeutschen Zeitung“. Vorbörslich reagierten die Papiere auf Tradegate kaum. Sie waren infolge der Veröffentlichung neuer Unternehmensprognosen Anfang November schon stark gestiegen.</p>
                                    <p>Die Fondsverwalter-Plattform Allfunds plant Kreisemeldungen zufolge offenbar einen Börsengang und könnte ein Übernahmeinteresse auch seitens der Deutschen Börse  auf sich ziehen. Ein womöglich hoher Übernahmepreis könnte die Titel belasten, hieß es aus dem Handel.</p>
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