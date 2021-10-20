<?php  // Asset: Sidebar.php ?>

<aside class="column small-12 medium-4 medium-offset-1">
    <!-- ------ Sport ------ -->
    <div class="cat-wrapper ads">
        <h2>Sport</h2>
        <?php $dataSource = $rssSports->loadFeed(); $imageSource = $rssSports->loadImages(); ?>
        <?php for ($i = 1; $i <= 9; $i++ ) { ?>
            <?php include('assets/article-small.php'); ?>
        <?php } ?>
    </div>
</aside>
