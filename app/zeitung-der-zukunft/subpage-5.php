<?php include("config.php"); include("scripts/subpage.php")?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include ('assets/head.php'); ?>
    <title>Adcheck</title>
</head>
<body>

<?php
$subpage_5 = new subPage();
$subpage_5->url = "https://www.focus.de/finanzen/boerse/aktien/schwung-und-schmerzen-neuer-conti-chef-fuehrt-grossumbau-fort_id_12778588.html";
$subpage_5->loadSubPage();
$id = 6; ?>

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
                                    <p><strong>Der neue Continental-Chef Nikolai Setzer hat sich für seinen Job an der Konzernspitze viel vorgenommen: In mehreren Hightech-Bereichen will er das Tempo erhöhen, gleichzeitig soll sich der Autozulieferer und Reifenhersteller auf vorhandene Stärken besinnen.</strong></p>
                                </div>
                                <div class="textBlock">


                                    <p>Mit dieser Mischstrategie will der Manager, der kürzlich Elmar Degenhart bei dem Dax -Unternehmen aus Hannover ablöste, auch den schwierigen Spagat aus Wachstum bei Software und Elektronik sowie Einsparungen auf den klassischen Gebieten hinbekommen.</p>

                                    <p> Bei einem „Kapitalmarkttag“ informiert der Neue am Mittwoch Anleger und Branchenexperten über seine Ziele. Wie bei anderen Konzernen aus der Branche scheint das Schlimmste der Corona-Pandemie bei Conti überstanden, während es für viele kleine Zulieferfirmen immer enger wird. Doch nun steht in Deutschland erneut ein weitreichender Shutdown an, der das öffentliche Leben bremst. Schon im Frühjahr waren die Autobauer als wichtigste Kunden von Continental hart getroffen, als Autohäuser über mehrere Wochen schließen mussten.</p>


                                    <h6>Conti hat Umsatzminus deutlich eingedämmt - niedriger bereinigter Jahresgewinn wird anvisiert</h6>
                                    <p>Nach dem Einbruch im zweiten Quartal sah es im dritten Jahresviertel wieder besser aus, zumindest im Tagesgeschäft. Nach einem Umsatzminus von rund 40 Prozent im Vorquartal waren es jüngst noch rund 7 Prozent weniger Erlös als vor einem Jahr. Schlussendlich rang sich Conti zu einer neuen Prognose für das auslaufende Jahr durch. Der Umsatz dürfte 37,5 Milliarden Euro erreichen und damit gut 15 Prozent unter dem Vorjahr liegen. Die um Sondereffekte wie Umbaukosten bereinigte Gewinnspanne soll noch bei rund 3 Prozent liegen, nach 7,4 Prozent vor einem Jahr.</p>

                                    <p> Ex-Konzernchef Degenhart hatte zuletzt kein glückliches Händchen mehr. In den vergangenen Jahren türmten sich die Probleme, schon vor Corona. Dazu zählen die Schwäche des chinesischen Marktes durch den Zollstreit, Milliardenabschreibungen wegen trüberer Marktaussichten für die kommenden Jahre und der heftig umstrittene Großumbau, der bis zu 30.000 der aktuell 234.000 Jobs im Konzern betreffen wird.</p>

                                    <h6>Komplette Werke werden für Renditeziele geopfert</h6>
                                    <p>Der Sparkurs soll die laufenden Kosten senken und Conti bei der Rendite zu alter Stärke führen. Aber erst einmal wird er viel Geld verschlingen, etwa für Abfindungen und Vorruhestandsregelungen - für dieses Jahr und das kommende zusammengenommen 1,2 Milliarden Euro. Dass komplette - und laut Arbeitnehmerangaben profitable - Werke wie die Reifenfabrik in Aachen dichtgemacht werden sollen, sorgt dabei für erheblichen Zündstoff unterm Konzerndach. Es heißt, dies sei auch für das Management schmerzhaft. Aber die Ziele ließen keine Wahl.</p>

                                    <p> Den Konfliktherd muss nun Setzer einhegen, nachdem Degenhart sich nach eigenen Angaben aus gesundheitlichen Gründen zurückgezogen hat. Bisher läuft die Verständigung mit den Arbeitnehmern über das genaue Wie und Wann des Umbaus mehr als holprig. Die IG Metall etwa brach Anfang Dezember die Gespräche ab. Der Chef der IG Bergbau Chemie Energie (IG BCE), Michael Vassiliadis, drohte angesichts des Endes im Werk Aachen: „Dieser Stellenabbau wird teuer.“ Allein in Deutschland stehen rund 13.000 Arbeitsplätze bei Conti im Feuer. Eine Beschäftigungssicherung ist bei den Hannoveranern nicht vereinbart.</p>
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