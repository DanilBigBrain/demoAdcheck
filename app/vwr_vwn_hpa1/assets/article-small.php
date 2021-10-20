<?php
/**
 * Template file for small articles e.g. in sidebar
 */
?>
<?php if( !empty($dataSource) && !empty($imageSource) ) { ?>
    <article class="article-small">
        <div class="entry-image">
            <img src="<?php echo $imageSource[$i]; ?>">
        </div>
        <div class="entry-content">
            <h4><?php echo $dataSource->channel->item[$i]->category; ?></h4>
            <h3><?php echo $dataSource->channel->item[$i]->title; ?></h3>
        </div>
        <div class="entry-footer text-right">
            <small class="greydate"> <?php echo date("d.m.y, h:i", strtotime($dataSource->channel->item[$i]->pubDate)); ?> Uhr | <?php echo(rand(1,30));?> Kommentare</small>
        </div>
    </article>
<?php } ?>