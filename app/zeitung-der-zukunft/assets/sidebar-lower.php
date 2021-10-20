<?php  // Asset: Sidebar.php ?>

<aside class="column small-12 medium-4 medium-offset-1">
    <!-- ------ Ad – Medium Rectangle ------ -->
    <?php if($ads == 1) { ?>
        <div class="cat-wrapper ads" id="medium-rectangle">
            <img src="ads/telekom.gif">
        </div>
    <?php } ?>


    <!-- ------ Sport ------ -->
    <div class="cat-wrapper ads">
        <h2>Sport</h2>
        <?php $dataSource = $rssSports->loadFeed(); $imageSource = $rssSports->loadImages(); ?>
        <?php for ($i = 1; $i <= 3; $i++ ) { ?>
            <?php include('assets/article-small.php'); ?>
        <?php } ?>
    </div>
    <!-- ------ Ad – Medium Rectangle ------ -->
    <?php if($ads == 1) { ?>
        <div class="cat-wrapper ads" id="medium-rectangle">
            <img src="ads/lexus.jpg">
        </div>
    <?php } ?>

</aside>
