<?php  // Asset: Sidebar.php ?>

<aside class="cell small-12 medium-4 medium-offset-1">
    <!-- ------ Finance ------ -->
    <div class="cat-wrapper" id="finance">
        <h2>Finanzen</h2>
        <?php $dataSource = $rssFinance->loadFeed(); $imageSource = $rssFinance->loadImages(); ?>
        <?php for ($i = 0; $i <= 9; $i++ ) { ?>
            <?php include('assets/article-small.php'); ?>
        <?php } ?>
    </div>
</aside>
