<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="de">
<head>

    <?php include ('assets/head.php'); ?>
    <title>Page</title>

</head>

<body>

    <!-- ------ Header ------ -->
    <?php include ('assets/header.php'); ?>

    <!-- ------ Ad – Header Banner ------ -->
    <?php if($showBanner == true && $banner) { ?>
        <?php if($fixedBanner == true) { ?><div id="sticky-anchor"></div><?php } ?>
        <div class="row-wrapper ads"  <?php if($fixedBanner == true) { ?>id="header-banner-sticky"<?php } ?>>
            <div class="row">
                <div class="columns" id="ad-wrapper">
                    <?php include('assets/adinfo.php'); ?>
                    <img id="headerBanner" src="<?php switch ($banner) {
                        case 1:
                            echo $bannerV1;
                            break;
                        case 2:
                            echo $bannerV2;
                            break;
                        case 3:
                            echo $bannerV3;
                            break;
                        case 4:
                            echo $bannerV4;
                            break;
                    } ?>" alt="Header Banner Ad">
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- ------ Main ------ -->
    <div class="row-wrapper">
        <div class="row">

            <main class="column small-24 medium-16">
                <?php $j = 0; foreach ($rssNews->loadFeed()->channel->item as $item) { ?>
                    <article class="main-article">

                        <?php if($article == 2) { ?>

                        <div class="breadcrumbs">
                            <small>Nachrichten <i class="material-icons md-18">keyboard_arrow_right</i> Politik</small>
                        </div>
                        <div class="entry-header">
                            <h4>Vorher ignoriert, jetzt beklatscht></h4>
                            <h2>Krankenschwester über Corona-Heuchelei: "Eigentlich genau jetzt kündigen"</h2>
                        </div>
                        <div class="entry-image">
                            <img src="assets/img/ko.jpg">
                        </div>
                        <div class="entry-content">
                            <p>Schon seit Jahren kämpfen deutsche Krankenhäuser mit Personalmangel, Pflegekräfte werden schlecht bezahlt. Bis zur Corona-Krise hat das viele Deutsche kaum interessiert. Jetzt wird das medizinische Personal beklatscht. Eine Krankenschwester hat nun einen wütenden Appell an die Gesellschaft gerichtet.</p>
                            <p>Um die Ausbreitung des Coronavirus einzudämmen, wurden hierzulande harte Maßnahmen getroffen. Ausgangsbeschränkungen, Kontaktverbote und die Absage von Veranstaltungen sollen dabei helfen, die Infiziertenrate so gering wie möglich zu halten. Dadurch soll ein massiver Ansturm von Corona-Patienten auf deutsche Kliniken verhindert und allen Betroffenen eine angemessene medizinische Versorgung ermöglicht werden.</p>
                            <p>Nina Magdalena Böhmer ist 28 Jahre alt und als Krankenschwester in Berlin tätig. Genau wie zahlreiche ihrer Kollegen arbeitet sie in diesen Tagen bis an die Grenze der eigenen Belastbarkeit. Dass sich aktuell Menschen auf Balkonen verabreden und für den Einsatz des Gesundheitspersonals in der Corona-Krise applaudieren, findet sie eine "nette Geste", wie sie im "Tagesspiegel" schreibt. Auf Facebook drückte sie ihre Meinung kurz zuvor weniger diplomatisch aus: "Euren Applaus könnt ihr euch sonstwohin stecken", schreib sie dort. In dem Artikel des "Tagesspiegel" schildert Böhmer nun jedoch auch, warum sie die derzeitige Situation frustriert.</p>
                            <h6>"Pflegenotstand ist seit Jahren bekannt, passiert ist nix"</h6>
                            <p>"Ab nächster Woche hätte ich eigentlich Urlaub, aber ich habe mich freiwillig gemeldet, um weiterzuarbeiten", schreibt die 28-Jährige. Der Grund: Man bereite sich auf einen Ansturm an Patienten vor. Auch wenn derzeit alle möglichen Maßnahmen ergriffen würden, um die Corona-Rate gering zu halten. Die Empfehlung, die das Robert-Koch-Institut (RKI) vergangene Woche abgab, macht Böhmer wütend.</p>
                            <p>Denn die Quarantäneregeln für medizinisches Personal sollen gelockert werden: „Medizinisches Personal muss künftig nach engem ungeschützten Kontakt zu COVID-19-Erkrankten nicht mehr so lange in Quarantäne und darf bei dringendem Bedarf in Klinik oder Praxis arbeiten, solange keine Symptome auftreten“, sagte RKI-Präsident Lothar Wieler auf einer Pressekonferenz. Für Böhmer ist klar: So könne man viele Menschen anstecken.</p>
                            <p>Den Mindestabstand von zwei Metern, wie er in Supermärkten oder beim Spazieren gehen gefordert werde, einzuhalten, sei für die 28-Jährige als Krankenschwester kaum möglich. "Wie soll ich anderthalb Meter Abstand halten, wenn ich eine Person wasche oder ihr Blut abnehme? Das finde ich fahrlässig", schreibt sie. Sie kritisiert auch die Personalsituation im Gesundheitswesen. "Der Pflegenotstand ist ja seit Jahren bekannt. Es gab Berichte, Talkshow-Diskussionen, passiert ist nix", moniert sie im "Tagesspiegel".</p>
                            <h6>Böhmer zu Corona-Heuchelei: "Eigentlich sollten genau jetzt alle Pflegekräfte kündigen"</h6>
                            <p>Teilweise müsse sich Böhmer mit einem Pflegeschüler um 40 Patienten kümmern, in der Altenpflege sei es noch schlimmer. So bleibe vieles auf der Strecke. "Toll wäre es, ich hätte nur zehn oder sogar fünf Patienten, für die ich zuständig wäre. Dann hätte ich Spaß an der Arbeit", erklärt die 28-Jährige. Mit Blick auf die Corona-Krise bemängelt sie den Mangel an Schutzausrüstung, der auch in dem Berliner Krankenhaus, in dem sie arbeite, vorherrsche.</p>
                            <p>Sie habe häufig einen Mundschutz oder Kittel für mehrere Patienten verwenden müssen - "für keine Seite besonders hygienisch", wie die 28-Jährige berichtet. Damit die Pflege als Beruf attraktiver werde, müsse man sie auch besser bezahlen, meint Böhmer. Das sei in den vergangenen Jahren aber nicht geschehen, und auch jetzt liege der Lohn in systemrelevanten Berufen wie der Pflege 15 bis 20 Prozent unter dem anderer Jobs.</p>
                            <p>"Eigentlich sollten genau jetzt alle Pflegekräfte ihren Job kündigen", meint Böhmer. Um das medizinische Personal in der Corona-Krise zu unterstützen, helfe Klatschen wenig. Man müsse Petitionen unterschreiben und Parteien wählen, die die Pflege fördern wollen. Denn Applaus sei zwar "ganz nett", bewege aber letztlich wenig.</p>

                            <?php } elseif ($article == 1) { ?>
                            <div class="breadcrumbs">
                                <small>Nachrichten <i class="material-icons md-18">keyboard_arrow_right</i> Politik</small>
                            </div>
                            <div class="entry-header">
                                <h4>Verbesserungen im Pflegesystem</h4>
                                <h2>Auf einmal beklatscht, vorher ignoriert: Was Pflegekräften wirklich helfen würde</h2>
                            </div>
                            <div class="entry-image">
                                <img src="assets/img/ko.jpg">
                            </div>
                            <div class="entry-content">
                                <p>Sie sind die Helden der Corona-Pandemie: Was Ärzte und Pfleger in diesen Tagen leisten, bringt viele an die Grenzen ihrer Belastbarkeit. In der Gesellschaft wächst unterdessen das Bewusstsein für die Bedeutung dieses Berufsstands. Viele Menschen verabreden sich zum Klatschen oder Singen am Fenster, um Solidarität mit Ärzten und Pflegekräften zu demonstrieren.</p>
                                <p>Doch darüber können gerade Menschen in Pflegeberufen oft nur müde lächeln. Zu lange wurde ihrem Beruf die angemessene gesellschaftliche und vor allem finanzielle Anerkennung verwehrt. „Klatschen ja, aber bitte auch endlich konkrete Maßnahmen“, hallt es aus verschiedenen Ecken des Internet.</p>
                                <p>Thomas Müller war selbst mehr als 15 Jahre in der Pflege tätig, bevor er sich mit seiner Firma Curassist selbstständig machte und nun freiberufliche Pflegekräfte und Pflegebedürftige durch das Dickicht bürokratischer Hürden zueinander führt. Woran das Pflegesystem in Deutschland krankt und wie man Pflegeberufe endlich attraktiver macht, weiß Müller ganz genau.</p>
                                <h6>Pflege: Angemessene Bezahlung ist Grundvoraussetzung</h6>
                                <p>„Pflege verdient eine bessere Bezahlung“, erklärte Bundesgesundheitsminister Jens Spahn, als er Ende Januar die Anhebung des Pflegemindestlohns bekanntgab. Bis zum 1. April 2022 steigen die Stundensätze deswegen auf 11,20 € (Pflegehilfskraft) respektive 15,40 € (Pflegefachkraft). Bezieht eine Pflegekraft also Mindestlohn, liegt ihr Bruttoeinkommen mindestens zwischen 2175 € und 2669€.</p>
                                <p>Das Problem: Weit über Mindestlohn zahlt heute kaum ein Arbeitgeber, kritisiert Experte Müller. „Die Erhöhung des Mindestlohns hat letztendlich dazu geführt, dass sich viele Krankenhäuser, Altenheime, ambulante Pflegedienste oder Krankenkassen, jetzt daran orientieren."</p>
                                <h6>Fachkenntnisse der Pflegekräfte müssen honoriert werden</h6>
                                <p>Statt eine faire Bezahlung zu gewährleisten, vermittelt der undifferenzierte Mindestlohn nach Müllers Meinung eine ganz andere, gefährliche Botschaft: „Jeder kann Pflege.“ Genau das sei jedoch nicht der Fall. Um Pflegeberufe attraktiver zu machen, müsste sich die Bezahlung endlich an den Fachkenntnissen der Pflegekräfte anpassen, fordert der Experte. Und weiter: „Die Fachkompetenz der einzelnen Pflegekräfte wird nicht honoriert. Wenn ich mich beispielsweise als Pflegekraft zum Wundmanager weiterbilden lasse und diese Expertise erwerbe, werde ich deswegen in der Regel nicht besser bezahlt. Bei Ärzten ist das völlig anders.“ Weiterbildungen müssten sich nicht nur im Lebenslauf, sondern auch auf dem Gehaltszettel bemerkbar machen.</p>
                                <p>Selbstständigkeit für Pfleger nur unter größten Mühen möglich</p>
                                <p>Dass sich Lohnzahlungen in der Pflege allzu oft im Bereich des Pflegemindestlohns bewegen, hängt auch mit dem beschränkten Zugang zu Selbstständigkeit zusammen. Verlässt man als Pflegekraft das Angestelltenverhältnis, „kann ich meine Fachkenntnisse quasi nicht mehr anbieten“, moniert Müller. Es entstehe ein Abhängigkeitsverhältnis, weil sich Krankenkassen häufig weigern, Zahlungen für freie Pflegekräfte zu übernehmen.</p>
                                <p>Die Gründe dafür sieht Müller insbesondere in der mangelnden Anerkennung von Abschlüssen sowie bürokratischen Hürden, obwohl die entsprechenden Paragrafen des Sozialgesetzbuches sehr konkret seien. Stattdessen herrsche ein laxer Umgang mit dem Gesetz, was dazu führe, „dass das Ziel, Karriere zu machen, oder gar der Traum von der Selbständigkeit in der Pflege nicht existieren“. Mit einer konsequenten Umsetzung der Gesetzgebung wäre bereits viel gewonnen.</p>
                                <h6>Pflege braucht mehr Personal auf den Stationen</h6>
                                <p>Für das angestellte Pflegepersonal auf den Krankenhausstationen gibt es zusätzliche Herausforderungen. So planen viele Kliniken gerade nachts mit minimalem Personalaufwand.</p>
                                <p>Ein Pfleger in Alleinverantwortung für eine gesamte Station sei nach Aussage Müllers demnach keine Seltenheit: „Die Pflegekraft muss permanent Angst haben, dass jemand verstirbt, während sie mit der Betreuung eines anderen Patienten beschäftigt ist. Diese chronische Unterbesetzung geht auf die Psyche.“ Mehr Personal würde das Problem lösen.</p>
                                <p>Angemessener Lohn, Selbständigkeit und ein Personalschlüssel oberhalb des Minimums – die Maßnahmen, um Pflegeberufe attraktiver zu machen, sind erkennbar. Womöglich liefert die Corona-Krise den Anstoß für wirkliche Veränderung.</p>
                                <p>Klatschen kann man dann natürlich immer noch.

                                <?php } ?>

                    </article>
                    <?php if ($j = 1) { break; } ?>
                <?php } ?>

            </main>
            <!-- ------ Sidebar ------ -->
            <aside class="column small-24 medium-8">
                <!-- ------ Finance ------ -->
                <div class="cat-wrapper" id="finance">
                    <h2>Finanzen</h2>
                    <?php $dataSource = $rssFinance->loadFeed(); $imageSource = $rssFinance->loadImages(); ?>
                    <?php for ($i = 0; $i <= 2; $i++ ) { ?>
                        <?php include('assets/article-small.php'); ?>
                    <?php } ?>
                </div>0 Uhr 
            </aside>
        </div>
    </div>

    <!-- ------ Footer ------ -->
    <?php include_once ('assets/footer.php'); ?>

</body>
</html>