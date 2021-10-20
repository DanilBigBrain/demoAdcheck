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
    <?php if($showBanner == true) { ?>
        <?php if($fixedBanner == true) { ?><div id="sticky-anchor"></div><?php } ?>
        <div class="row-wrapper ads"  <?php if($fixedBanner == true) { ?>id="header-banner-sticky"<?php } ?>>
            <div class="row">
                <div class="columns" id="ad-wrapper">
                    <?php include('assets/adinfo.php'); ?>
                    <img src="<?php switch ($adId) {
                        case 2:
                            echo $bannerV2;
                            break; case 3:
                            echo $bannerV3;
                            break; default:
                            echo $bannerDefault;
                    } ?>" alt="Banner Header">
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
                                <p><strong><?php echo ($page->load()[0]); ?></strong></p>
                            </div>
                            <div class="textBlock">
                                <?php foreach($page->load() as $key => $val) {
                                    if($key === 0) continue;
                                        echo "<p>".$val."</p>";
                                } ?>
                            </div>
                        </div>
                    </article>
                    <?php if ($j = 1) { break; } ?>
                <?php } ?>
                <!-- ------ Video ------ -->
                <div class="column small-24">
                    <h4>Sehen sie auch:</h4>
                    <h2>Der Buckel-Trick: Das ist die beste Büro-Übung gegen Rückenschmerzen</h2>
                    <video id="example_video_1" src="assets/vod/der-buckel-trick.mp4" width = "640" height="480" controls
                           ads = '{"servers":[
                           {"apiAddress": "assets/vod/testads1.xml"}
                                 ],
                             "schedule":[
                            {"position":"pre-roll"}
                          ]
                        }'>
                    </video>
                    <span class="skipBtn">Skip</span>
                    <script>initAdsFor("example_video_1");</script>
                </div>
            </main>
            <!-- ------ Sidebar ------ -->
            <?php include ('assets/sidebar-upper.php'); ?>
        </div>
    </div>

    <!-- ------ Footer ------ -->
    <?php include_once ('assets/footer.php'); ?>

</body>
</html>