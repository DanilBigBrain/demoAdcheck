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
                                    <p><strong>Der neue Continental-Chef Nikolai Setzer hat sich f??r seinen Job an der Konzernspitze viel vorgenommen: In mehreren Hightech-Bereichen will er das Tempo erh??hen, gleichzeitig soll sich der Autozulieferer und Reifenhersteller auf vorhandene St??rken besinnen.</strong></p>
                                </div>
                                <div class="textBlock">


                                    <p>Mit dieser Mischstrategie will der Manager, der k??rzlich Elmar Degenhart bei dem Dax -Unternehmen aus Hannover abl??ste, auch den schwierigen Spagat aus Wachstum bei Software und Elektronik sowie Einsparungen auf den klassischen Gebieten hinbekommen.</p>

                                    <p> Bei einem ???Kapitalmarkttag??? informiert der Neue am Mittwoch Anleger und Branchenexperten ??ber seine Ziele. Wie bei anderen Konzernen aus der Branche scheint das Schlimmste der Corona-Pandemie bei Conti ??berstanden, w??hrend es f??r viele kleine Zulieferfirmen immer enger wird. Doch nun steht in Deutschland erneut ein weitreichender Shutdown an, der das ??ffentliche Leben bremst. Schon im Fr??hjahr waren die Autobauer als wichtigste Kunden von Continental hart getroffen, als Autoh??user ??ber mehrere Wochen schlie??en mussten.</p>


                                    <h6>Conti hat Umsatzminus deutlich einged??mmt - niedriger bereinigter Jahresgewinn wird anvisiert</h6>
                                    <p>Nach dem Einbruch im zweiten Quartal sah es im dritten Jahresviertel wieder besser aus, zumindest im Tagesgesch??ft. Nach einem Umsatzminus von rund 40 Prozent im Vorquartal waren es j??ngst noch rund 7 Prozent weniger Erl??s als vor einem Jahr. Schlussendlich rang sich Conti zu einer neuen Prognose f??r das auslaufende Jahr durch. Der Umsatz d??rfte 37,5 Milliarden Euro erreichen und damit gut 15 Prozent unter dem Vorjahr liegen. Die um Sondereffekte wie Umbaukosten bereinigte Gewinnspanne soll noch bei rund 3 Prozent liegen, nach 7,4 Prozent vor einem Jahr.</p>

                                    <p> Ex-Konzernchef Degenhart hatte zuletzt kein gl??ckliches H??ndchen mehr. In den vergangenen Jahren t??rmten sich die Probleme, schon vor Corona. Dazu z??hlen die Schw??che des chinesischen Marktes durch den Zollstreit, Milliardenabschreibungen wegen tr??berer Marktaussichten f??r die kommenden Jahre und der heftig umstrittene Gro??umbau, der bis zu 30.000 der aktuell 234.000 Jobs im Konzern betreffen wird.</p>

                                    <h6>Komplette Werke werden f??r Renditeziele geopfert</h6>
                                    <p>Der Sparkurs soll die laufenden Kosten senken und Conti bei der Rendite zu alter St??rke f??hren. Aber erst einmal wird er viel Geld verschlingen, etwa f??r Abfindungen und Vorruhestandsregelungen - f??r dieses Jahr und das kommende zusammengenommen 1,2 Milliarden Euro. Dass komplette - und laut Arbeitnehmerangaben profitable - Werke wie die Reifenfabrik in Aachen dichtgemacht werden sollen, sorgt dabei f??r erheblichen Z??ndstoff unterm Konzerndach. Es hei??t, dies sei auch f??r das Management schmerzhaft. Aber die Ziele lie??en keine Wahl.</p>

                                    <p> Den Konfliktherd muss nun Setzer einhegen, nachdem Degenhart sich nach eigenen Angaben aus gesundheitlichen Gr??nden zur??ckgezogen hat. Bisher l??uft die Verst??ndigung mit den Arbeitnehmern ??ber das genaue Wie und Wann des Umbaus mehr als holprig. Die IG Metall etwa brach Anfang Dezember die Gespr??che ab. Der Chef der IG Bergbau Chemie Energie (IG BCE), Michael Vassiliadis, drohte angesichts des Endes im Werk Aachen: ???Dieser Stellenabbau wird teuer.??? Allein in Deutschland stehen rund 13.000 Arbeitspl??tze bei Conti im Feuer. Eine Besch??ftigungssicherung ist bei den Hannoveranern nicht vereinbart.</p>
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