<aside class="column small-24 medium-8">

    <!-- ------ Ad – Lower Medium Rectangle ------ -->
    <?php if($showLowerMediumRectangle == true && $medRectangle) { ?>
        <div class="cat-wrapper ads" id="medium-rectangle">
            <img src="<?php switch ($medRectangle) {
                case 1:
                    echo $medRectangleV1;
                    break;
                case 2:
                    echo $medRectangleV2;
                    break;
            } ?>" alt="Medium Rectangle">
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
</aside>
