<?php include("config.php"); include("scripts/subpage.php")?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include ('assets/head.php'); ?>
    <title>Adcheck</title>
</head>
<body>

<?php $id = 0;
$subpage_0 = new subPage();
$subpage_0->url = "https://www.focus.de/politik/ausland/agenda-gegen-wahlergebnis-im-wuergegriff-haelt-trump-seine-partei-in-der-spur_id_12769103.html";
$subpage_0->loadSubPage();
?>

<!-- header ---------------------------->
<?php include ('assets/header.php'); ?>

<!-- main ---------------------------->
<div class="grid-wrapper">
    <div class="grid-container">
        <div class="grid-x">
            <main class="cell small-12 medium-7">
                <?php foreach ($rssNews->loadFeed()->channel->item as $item) { ?>
                    <article class="main-article">

                        <?php if($access == "lim") { ?>
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
                                    <p><strong>Vielleicht geht es noch vor Weihnachten los mit dem Impfen in Deutschland. Und allmählich nimmt die Debatte, wer zuerst vom knappen Impfstoff profitieren soll, Fahrt auf. Politikerinnen und Politiker sind da auffällig still. Sie wissen, warum.</strong></p>
                                </div>
                                <div class="textBlock">
                                    <p>Da musste der Bundesgesundheitsminister bei allem Ernst der Lage doch kurz lachen. Als Jens Spahn (CDU) vor einigen Wochen gefragt wurde, ob er definitiv eine Impfpflicht ausschließen könne, schaute er etwas amüsiert. Der Grund: Seit langem schließt er immer, immer und immer wieder eine solche Pflicht aus. Ihm ist schon seit Langem klar: Sobald der Impfstoff endlich verfügbar ist, wird der stärkste Druck genau von der anderen Seite kommen – von allen, die möglichst bald zum Zug kommen wollen: „Ich“, „wir“ „zuerst“, „schnell“.</p>

                                    <p>Noch ist nicht ganz genau ermittelt, wie viel Schutz das Vakzin von Biontech und Pfizer bietet, das vielleicht schon um die Weihnachtstage in Deutschland gespritzt werden kann. Geschweige denn, wie lange der Schutz exakt vorhält. Doch bald schon dürften mit voller Wucht die Debatten aufbrechen, wer in den ersten Runden geimpft wird. Davon gibt es bisher nur eine leise Ahnung.</p>


                                    <h6>Je gef&auml;hrdeter desto schneller</h6>
                                        <p>Die St&auml;ndige Impfkommission (Stiko) hat sich Gedanken gemacht, wer Vorrang haben soll. Zun&auml;chst w&uuml;rden demnach Bewohner von Senioren- und Altenpflegeheimen und Menschen &uuml;ber 80 geimpft. Dann alle Kr&auml;fte, die in medizinischen Einrichtungen besonders stark einer Infektionsgefahr ausgesetzt sind sowie Besch&auml;ftigte in der Altenpflege, die direkten Kontakt zu Bewohnern haben. Es geht hier um 8,6 Millionen Menschen in dieser ersten Gruppe.</p>

                                    <p> Dann sollen &ndash; gestaffelt &ndash; die anderen Gruppen zum Zug kommen. Menschen, die in Obdachlosenheimen t&auml;tig sind oder enge Kontakte zu Schwangeren haben, werden eher geimpft als Lehrerinnen und Erzieher und die wiederum eher als Polizisten oder Feuerwehrleute.</p>

                                    <p>Eine Leitidee: Menschen mit besonders hohem Risiko f&uuml;r schwere oder t&ouml;dlichen Krankheitsverlauf sollen Vorrang bekommen.</p>

                                    <h6>Wenn Politiker sich zur&uuml;ckhalten beim Impfen</h6>
                                    <p>Die meisten Politikerinnen und Politiker betonen in diesen Tagen, dass sie dem Rat dieser Experten folgen wollen. Sie wissen, was sie da tun. Genauer: Was sie nicht tun. Denn bricht offener Streit &uuml;ber Vorrang beim Impfen aus, dann k&ouml;nnen sie schneller, als es ihnen lieb ist, zu S&uuml;ndenb&ouml;cken werden. Was gerecht und fair ist, ist eine Entscheidung von enormer Tragweite. Das Ziel von Regierung und Koalition: Die Gesellschaft soll beisamen bleiben.</p>

                                    <p> Dass es da Debatten geben wird, liegt auf der Hand. Sollten Polizisten vielleicht auch als allererste zum Zug kommen? Oder: K&ouml;nnen die ganz Fitten in den einzelnen Gruppen vielleicht doch l&auml;nger warten? Wird innerhalb einer Gruppe die alleinerziehende Mutter von drei Kindern vor dem gleichaltrigen Single geimpft? Die Bedeutung der einen Gruppe zu betonen, hei&szlig;t in dieser Lage: die Bedeutung einer anderen etwas niedriger zu taxieren. Politiker h&uuml;ten sich genau davor. Den Rat der Stiko-Experten m&uuml;ssen nicht alle teilen, er ist aber transparent.</p>

                                    <h6>Niedergelassene &Auml;rzte sind entt&auml;uscht</h6>
                                    <p>Andere haben durchaus reagiert. Der Verband der niedergelassenen &Auml;rzte Deutschlands (Virchowbund) jedenfalls ist emp&ouml;rt &uuml;ber die Vorschl&auml;ge der St&auml;ndigen Impfkommission. Rettungsdienst und Notaufnahmen h&auml;tten zwar &#8222;richtigerweise&ldquo; die h&ouml;chste Priorisierung bekommen, dass der kassen&auml;rztliche Notdienst zwei Stufen niedriger eingestuft wird, r&uuml;gt aber der Vorsitzende Dirk Heinrich. &#8222;Dass im Kassen&auml;rztlichen Notdienst und in den Praxen niedergelassener Allgemein&auml;rzte bis heute rund 94 Prozent aller Corona-Abstriche gemacht werden, blendet die Stiko-Beschlussempfehlung v&ouml;llig aus&ldquo;, klagt er. &#8222;Besonders bizarr&ldquo; findet er die Einstufung aller &uuml;brigen niedergelassenen &Auml;rzte, die laut Stiko nur ein &#8218;moderates Expositionsrisiko&lsquo; haben, sprich: den Virusgefahren nur m&auml;&szlig;ig ausgesetzt sind.</p>


                                    <h6>&#8222;Ein bisschen fassungslos&ldquo;</h6>
                                    <p>Der Vorsitzende des Hartmannbundes, Klaus Reinhardt, reagierte &#8222;ein bisschen fassungslos&ldquo; auf die Empfehlung der Stiko. Wer &Auml;rztinnen und &Auml;rzten in der ambulanten Versorgung in der Sparte &#8222;unter ferner liefen&ldquo; einsortiere, beweise nicht nur mangelnde Wertsch&auml;tzung gegen&uuml;ber diesen Kollegen, sondern auch &#8222;gravierende Unkenntnis von den Abl&auml;ufen in der Praxis&ldquo;, r&uuml;gt er. Kernbotschaft: So nicht, nicht mit uns.</p>

                                    <h6>Viele B&uuml;rger melden sich</h6>
                                    <p> Vor diesem Hintergrund ist es nicht erstaunlich, dass selbst Oppositionspolitiker &auml;u&szlig;erst zur&uuml;ckhaltend sind mit &#8222;eigener Kreativit&auml;t&ldquo;, wenn es darum geht, wer zuerst rankommt. Sie fordern aber nicht nur eine Debatte, sondern eine echte Abstimmung. In &#8222;Fragen von Leben und Tod&ldquo; m&uuml;sse der Bundestag entscheiden, sagt der FDP-Fraktionschef Christian Lindner. Er fordert ein Gesetz statt einer blo&szlig;en Verordnung. Auch sein Kollege von den Gr&uuml;nen, Anton Hofreiter, h&auml;lt ein Gesetz f&uuml;r den besseren Weg.</p>

                                    <p>Mit eigenen Vorschl&auml;gen, wer Vorrang haben soll, aber halten sie sich bisher zur&uuml;ck. Es gebe die schwierige Aufgabe, &#8222;innerhalb der ersten Gruppe eine Priorisierung der Priorisierung vornehmen zu m&uuml;ssen&ldquo;, sagt die FDP-Gesundheitspolitikerin Christine Aschenberg-Dugnus. Die Liberalen wollen den Empfehlungen der Stiko folgen. Ihr Parteifreund Michael Theurer berichtet von &#8222;sehr vielen Zuschriften von Gruppen, die Zugang zum Impfstoff m&ouml;chten&ldquo;. Das wird den Kollegen in anderen Parteien kaum anders ergehen...</p>

                                    <h6>&#8222;Riesiges Problem&ldquo;, wenn &Auml;rzte ausfallen</h6>
                                    <p>Bei der eigentlichen Debatte um die Priorisierung bleibt die Politik weitgehend in Deckung. Vielleicht ist es bezeichnend, dass einer der &auml;ltesten Parlamentarier, der 78-j&auml;hrige Bundestagspr&auml;sident Wolfgang Sch&auml;uble, sich zu Wort gemeldet hat? Sch&auml;uble muss nichts mehr werden, er ist schon was, die protokollarische Nr. 2 im Staate. Seine Meinung: &#8222;Ich pers&ouml;nlich w&uuml;rde die Menschen, die mit Infizierten arbeiten m&uuml;ssen oder mit Alten und Kranken zu tun haben, an der ersten Stelle priorisieren.&ldquo; Sie tr&uuml;gen ein extrem hohes Risiko, sich mit Corona zu infizieren. Und wenn zu viele &Auml;rztinnen, &Auml;rzte und Pflegekr&auml;fte ausfielen, stehe man vor einem &#8222;riesigen Problem&ldquo;.</p>

                                    <p>Und zum Ranking unter den Politikern hat sich Sch&auml;uble auch seine Gedanken gemacht: Bundestagsabgeordnete sollten &#8222;ebenso eingestuft und behandelt werden&ldquo; wie etwa Mitglieder der Bundesregierung&ldquo;, meint er. Die h&auml;tten ebenso Staatsfunktionen inne wie die Verfassungsorgane der Exekutive und der Judikative, schrieb Sch&auml;uble in einem Brief an die Fraktionen.</p>

                                    <h6>Debatte um Corona-Impfstoff: Wer ist systemrelevant?</h6>
                                        <p>Schon bei den ersten Corona-Auflagen kam die Debatte auf, welche Berufsgruppen wie wichtig und welche systemrelevant sind. Zum Beispiel f&uuml;r die Frage der Kita-Notbetreuung. Da wurde die Bedeutung der Besch&auml;ftigten in der Energie- oder Lebensmittelversorgung diskutiert, der Mitarbeiter der M&uuml;llabfuhr oder der Lehrer, in manchen L&auml;ndern galten zudem Journalisten als systemrelevant &ndash; da gab es viele Kriterien, bundesweit einheitlich waren sie nicht.</p>

                                    <p> In den n&auml;chsten Wochen und Monaten k&ouml;nnte weitere, emotional aufgeladene Debatten ins Haus stehen. Bei der Priorisierung im Detail k&ouml;nne es im Verlauf der Zulassung der Impfstoffe noch zu &#8222;Anpassungen&ldquo; kommen, hie&szlig; es schon vor einigen Tagen auis dem Bundesgesundheitsministerium. Es sei schlie&szlig;lich denkbar, dass ein Impfstoff in einer bestimmten Altersgruppe eine bessere Wirksamkeit zeige. Aber auch das ist nicht auszuschlie&szlig;en: Wird der Protest von einer Gruppe zu stark, kann auch das zu Verschiebungen bei den Priorit&auml;ten f&uuml;hren. Endg&uuml;ltig festlegen soll die Priorit&auml;ten das Gesundheitsministerium in einer Verordnung. Das jedenfalls ist bisher der Plan.</p>

                                    <p>Beim medizinischen Personal insgesamt h&auml;lt sich &uuml;brigens das Gedr&auml;nge bisher in Grenzen. 73 Prozent der &Auml;rzte und knapp 50 Prozent der Pflegenden hierzulande w&uuml;rden sich aktuell impfen lassen. Das ergab eine Umfrage der Deutschen Gesellschaft f&uuml;r Internistische Intensivmedizin und Notfallmedizin (DGIIN) und der Deutschen Interdisziplin&auml;ren Vereinigung f&uuml;r Intensiv- und Notfallmedizin (DIVI), aus der das Deutsche &Auml;rzteblatt zitiert.</p>

                                    <p> Auch f&uuml;r die Profis also gilt: Den einen kann es nicht schnell genug gehen. Die anderen haben es nicht so eilig. Die Debatte l&auml;uft gerade erst an. Sie kann noch hitzig werden.<br />
                                    </p>
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