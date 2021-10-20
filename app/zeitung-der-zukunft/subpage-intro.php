<?php include("config.php"); include("scripts/subpage.php")?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include ('assets/head.php'); ?>
    <title>Adcheck | Subpage</title>
</head>
<body>

    <?php $page->url = "https://www.focus.de/finanzen/boerse/tausende-mitarbeiter-muessen-gehen-stellenabbau-bei-daimler-interne-dokumente-zeigen-wie-das-kuendigungsgespraech-laeuft_id_11932178.html"; ?>

    <!-- header ---------------------------->
    <?php include ('assets/header.php'); ?>
    
    <!-- main ---------------------------->
    <div class="grid-wrapper">
        <div class="grid-container">
            <div class="grid-x">
                <main class="cell small-12 medium-7">
                    <?php $j = 0; foreach ($rssNews->loadFeed()->channel->item as $item) { ?>
                        <article class="main-article">
                            <div class="breadcrumbs">
                                <small>Nachrichten <i class="material-icons md-18">keyboard_arrow_right</i> <?php echo $item->category; ?></small>
                            </div>
                            <div class="entry-header">
                                <h4><?php echo $item->category; ?></h4>
                                <h2><?php echo $item->title; ?></h2>
                                <img src="<?php // echo $array[$j]; $j++; ?>">
                            </div>
                            <div class="entry-image">
                                <img src="<?php echo $rssNews->loadImages()[$j]; $j++; ?>">
                            </div>
                            <div class="entry-footer">
                                <p class="greydate"><?php echo $item->pubDate; ?></p>
                            </div>
                            <div class="entry-content">
                                <div class="leadIn">
                                    <p><strong><?php echo($subpage_intro->loadSubPage()[0]); ?></strong></p>
                                </div>
                                <div class="textBlock">
                                    <?php foreach($subpage_intro->loadSubPage() as $key => $val) {
                                        if($key === 0) continue;
                                            echo "<p>".$val."</p>";
                                    } ?>
                                </div>
                            </div>
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