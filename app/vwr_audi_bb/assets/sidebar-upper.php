<?php  // Asset: Sidebar.php ?>

<aside class="cell small-12 medium-4 medium-offset-1">
    <!-- ------ Finance ------ -->
    <div class="cat-wrapper" id="finance">
        <h2>Finanzen</h2>
        <?php $dataSource = $rssFinance->loadFeed(); $imageSource = $rssFinance->loadImages(); ?>
        <?php for ($i = 0; $i <= 2; $i++ ) { ?>
            <?php include('assets/article-small.php'); ?>
        <?php } ?>
    </div>

    <!-- ------ Ad – Medium Rectangle ------ -->
    <?php if($mediumRectangle == true && $medRec) { ?>
        <div class="cat-wrapper ads" id="medium-rectangle">
            <img src="<?php switch ($medRec) {
                case 2:
                    echo $medRecV2;
                    break; case 3:
                    echo $medRecV3;
                    break; default:
                    echo $medRecV1;
            } ?>" alt="Medium Rectangle">
        </div>
    <?php } ?>

</aside>
