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
    <?php if($mediumRectangle2 == true && $medRec) { ?>
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


    <?php if($mediumRectangle == true && $medRec) { ?>
        <div class="cat-wrapper ads" id="medium-rectangle">
        <video  height="auto" width="98%" preload="auto" autoplay="true" loop="true" muted="muted" >
   <source   src="<?php switch($medRec){
       case 1:
        echo $medRecV4;
       
        break; case 2:
            echo $medRecV5;
            break; case 3: $medRecV6;
            break;
   }?>"type="video/mp4"; codecs="theora, vorbis">
   
   
  </video>
        </div>
    <?php } ?>

</aside>
