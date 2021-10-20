<?php  // Asset: Sidebar.php ?>

<aside class="column small-24 medium-8">
    <!-- ------ Finance ------ -->
    <div class="cat-wrapper" id="finance">
        <h2>Finanzen</h2>
        <?php $dataSource = $rssFinance->loadFeed(); $imageSource = $rssFinance->loadImages(); ?>
        <?php for ($i = 0; $i <= 2; $i++ ) { ?>
            <?php include('assets/article-small.php'); ?>
        <?php } ?>
    </div>

    <!-- ------ Ad – Medium Rectangle ------ -->
    <?php if($showUpperMediumRectangle == true) { ?>
        <div class="cat-wrapper ads" id="medium-rectangle">
            <img src="<?php echo $upperMedRectangle; } ?>" alt="Medium Rectangle">
        </div>


</aside>
