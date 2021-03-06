<?php include("config.php"); include("scripts/subpage.php")?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include ('assets/head.php'); ?>
    <title>Adcheck</title>
</head>
<body>

<?php
$subpage_2 = new subPage();
$subpage_2->url = "https://www.focus.de/finanzen/boerse/exklusive-auswertung-zeigt-wer-100-euro-im-monat-spart-hat-871-euro-zusatz-rente-wenn-sie-eine-regel-beachten_id_12773236.html";
$subpage_2->loadSubPage();
$id = 2; ?>

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
                                    <p><strong>Wie sch??tzen wir in diesem Jahr unsere Familie zu Weihnachten? Wie reisen wir am sichersten an? Und wie sinnvoll ist ein Antigen-Schnelltest vor dem Verwandtenbesuch? Die Antworten auf die wichtigsten Fragen zum Weihnachtsfest in Corona-Zeiten.</strong></p>
                                </div>
                                <div class="textBlock">
                                    <p>Weihnachten f??llt mit der zweiten Corona-Welle zusammen. Daher haben sich Bund und L??nder darauf geeinigt, dass private Zusammenk??nfte in den Tagen vom 24. bis zum 26. Dezember auf einen Hausstand und vier zus??tzliche Personen begrenzt sein sollen. Kinder bis 14 Jahre sind von dieser Regel ausgenommen. Zudem herrschen in einigen Bundesl??ndern Ausgangssperren nach 21 Uhr. Auch wenn Feiern in ganz kleiner Runde m??glich sind, sind viele Menschen unsicher, was sicher ist und was nicht. Die wichtigsten Fakten im ??berblick.</p>

                                    <h6>An Weihnachten mit den Kindern zu Oma und Opa? Wie sch??tzt man die Risikogruppen am besten?</h6>
                                    <p>"Wer an Weihnachten Verwandte besucht, sollte dringend eine Selbstisolation vor Weihnachten in Erw??gung ziehen, um das Ansteckungsrisiko zu verringern. Das gilt generell und insbesondere wenn die Angeh??rigen ein erh??htes Risiko f??r einen schweren Covid-Verlauf haben, da sie beispielsweise ??lter sind oder eine Vorerkrankung haben???, erkl??rt der M??nchner Chefarzt Clemens Wendtner.</p>

                                    <p>Der Zeitraum von der Ansteckung bis zum Auftreten der ersten Symptome betrage in der Regel bei Covid-19 f??nf bis sechs Tage, bis zu 45 Prozent der Erkrankungen verlaufe symptomlos. Daher, r??t Wendtner, ???sollte der Isolationszeitraum im Idealfall zehn Tage oder mehr betragen.??? Denn bis zur Symptomentwicklung sei die Viruslast und damit die Ansteckungsgefahr am h??chsten. Auch wenn jemand keine Symptome entwickelt sei die Ansteckungsgefahr f??r weitere Personen nach zwei Wochen deutlich geringer.</p>

                                    <p>Selbst wenn Sie sich nicht zehn Tage isolieren k??nnen, sollten Sie dennoch versuchen, sich so lange wie m??glich im Voraus nicht mehr mit anderen Menschen zu treffen. ???Jeder Tag Selbstisolation gibt ein St??ck mehr Sicherheit???, sagt der Chef-Infektiologe der M??nchen Klinik Schwabing.</p>

                                    <p>???Am Tag vor der Abfahrt zu Oma und Opa sollten alle Familienmitglieder nochmal ??berpr??fen, ob sie symptomfrei sind ??? das hei??t: kein Husten, keine erh??hte Temperatur, kein Kopfweh oder Durchfall, die Weihnachtspl??tzchen riechen und schmecken noch wie sie sollen???, r??t der M??nchner Mediziner, der die ersten deutschen Corona-Patienten behandelt hat. Au??erdem empfiehlt er jedem, auf sein Bauchgef??hl zu h??ren: ???Wer kein gutes Gef??hl beim gro??elterlichen Weihnachtsbesuch hat, ist in diesem Jahr sicher nicht der Einzige, der ganz darauf verzichtet ??? und Oma und Opa stattdessen die Videotelefonie erkl??rt.???</p>

                                    <h6>Wie reise ich am sichersten an?</h6>
                                    <p>???Aus infektiologischer Sicht ist sicherlich das Auto das bevorzugte Verkehrsmittel f??r die Weihnachtstage???, erkl??rt Wendtner. Allerdings sollten Sie dem Mediziner zufolge auch da folgende Regeln beachten:</p>
                                    <ul>
                                        <li>Innerhalb des Fahrzeugs sollte kein Kontakt zu Menschen aus anderen Haushalten bestehen.</li>
                                        <li>Keine Fahrgemeinschaften bilden, da sie die vorherige Isolation zunichte machen.</li>
                                        <li>Alle Familienmitglieder, die sich im Auto befinden, sollten ihre Kontakte in den Tagen zuvor weitm??glichst reduziert haben.</li>
                                        <li>Alle Familienmitglieder im Auto sollten symptomfrei sein.</li>
                                        <li>Ist ein Risikopatient im Auto, kann das Tragen von Schutzmasken sowie regelm????iges L??ften sinnvoll sein.</li>
                                        <li>Ich habe kein Auto. Wie kann ich mich auf der Anreise im Zug sch??tzen?</li>
                                        <li>Laut Wendtner lohnt es sich, in gute Schutzausr??stung zu investieren. Denn im Zug k??nne der Mindestabstand nicht immer eingehalten werden. Seien viele Menschen auf l??ngere Zeit in Waggons, die schlecht zu bel??ften sind, bestehe zudem ein erh??htes Infektionsrisiko.</li>
                                    </ul>

                                    <p>Der M??nchner Chefarzt r??t daher zu zertifizierten Masken statt selbstgen??htem Mund-Nasen-Schutz oder Schals: ???Ich w??rde mindestens einen chirurgischen Einmal-Mund-Nasen-Schutz empfehlen, man sieht die typischerweise blauen Masken ja immer ??fter. Diese k??nnen aber schnell durchfeuchten und dann ist der Schutz eingeschr??nkt. F??r l??ngere Fahrten ist daher eine FFP2-Maske sicherlich die noch bessere Wahl, die mindestens 94 Prozent der Aerosole aus der Luft filtert und den Tr??ger sowie die Mitreisenden damit maximal sch??tzt. Nach der Fahrt sollte man die Maske entsorgen und die H??nde waschen und desinfizieren.???</p>

                                    <h6>Wie sinnvoll ist ein Antigentest Tage im Voraus?</h6>
                                    <p>???Ein negatives Testergebnis in maximal 30 Minuten und im Anschluss sorgenfrei an Weihnachten die Urgro??mutter besuchen ??? so sch??n das w??re, entspricht das innerhalb unserer verf??gbaren Testm??glichkeiten aktuell leider nicht der Realit??t???, sagt Wendtner. Der Goldstandard unter den Test sei weiterhin der PCR-Test, der allerdings im Labor ausgewertet werden muss. Wer sich also nicht in strenge vorherige Selbstquarant??ne begeben kann, ist laut Wendtner mit einem PCR-Test besser beraten als mit einem Antigentest. In vielen Hausarztpraxen ist das auf eigene Kosten m??glich. Es lohnt sich aber, fr??hzeitig Kontakt aufzunehmen.</p>

                                    <p>Der Antigen-Schnelltest sei weniger zuverl??ssig und nur f??r maximal 24 Stunden ???aussagekr??ftig???, erl??utert der Experte, ???wer am Montag den Test macht und am Donnerstagabend zu Verwandten f??hrt, m??sste den Test demnach am Donnerstagvormittag zur Sicherheit wiederholen. Antigen-Schnelltests schlagen au??erdem vor allem bei bereits bestehenden Symptomen an und k??nnen hier sinnvoll sein, um unspezifische Erk??ltungssymptome einzuordnen.???</p>

                                    <h6>Was tun, wenn jemand in der Familie Erk??ltungssymptome zeigt?</h6>
                                    <p>Von Familienbesuchen an Weihnachten ist dringend abzuraten, wenn Sie krank sind. Mit Fieber, trockenem Husten und Co. sollten Sie die Verwandten nicht besuchen.</p>

                                    <p>???Wer eindeutig krank ist, sollte sich auskurieren und im Sinne der Liebsten auf ein pers??nliches Treffen verzichten, denn neben Covid-19 gibt es weitere Viruserkrankungen, die man seiner Familie nicht gerne an den Weihnachtsbaum bringen m??chte???, r??t der Experte.</p>

                                    <h6>Wie viel ???AHA??? braucht es unterm Weihnachtsbaum?</h6>
                                    <p>Beim Familientreffen an Weihnachten immer 1,5 Meter Abstand zu halten, erscheint schwierig. Trotzdem empfiehlt Wendtner, dass die ???AHA???-Regeln auch dann nicht vergessen werden sollten. ???H??ndewaschen und Handhygiene sollten auch an den Weihnachtstagen weiterverfolgt werden, zur Begr????ung haben sich ja mittlerweile Formeln fernab des Handschlags fest etabliert. Und nicht zuletzt gilt bei l??ngerem Beisammensein auf engem Raum: L??ften, l??ften, l??ften.???</p>

                                    <h6>Was sollte ich an den Feiertagen bei einem Verdacht auf eine andere ernste Erkrankung tun?</h6>
                                    <p>Auch in Corona-Zeiten gilt: Z??gern Sie nicht und rufen Sie sofort den Notruf 112 an, wenn Sie den Verdacht haben, etwa einen Herzinfarkt zu haben. Viele Menschen z??gern aufgrund der Corona-Pandemie, den Notarzt zu rufen. ???Ein fataler Irrtum, der im schlimmsten Fall Leben kosten kann???, warnt der Herzspezialist Thomas Voigtl??nder, stellvertretender Vorstandsvorsitzender der Deutschen Herzstiftung. Denn bei einem Herzinfarkt z??hle jede Minute.</p>

                                    <p>???Die derzeit hohen Zahlen an Corona-Infektionen d??rfen nicht wie im Fr??hling dazu f??hren, dass Menschen bei Verdacht auf Herzinfarkt oder bei anderen notfallartigen Symptomen den lebenswichtigen Notruf 112 oder den Weg in die Notfallambulanz scheuen: entweder aus Angst vor einer Ansteckung mit dem Coronavirus oder wegen bef??rchteter Kapazit??tsengp??sse in den Kliniken???, sagt der Kardiologe und Intensivmediziner. In jedem Jahr fordert der Herzinfarkt laut dem Deutschen Herzbericht 2019 in Deutschland ??ber 46.000 Todesopfer.</p>
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