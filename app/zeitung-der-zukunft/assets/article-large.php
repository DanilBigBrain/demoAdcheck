<?php if( !empty($dataSource) && !empty($imageSource) ) { ?>
    <article class="main-article">
        <a href="subpage-<?php echo $subpage_id;?>.php?<?php echo $query; ?>">
            <div class="entry-image">
                <img src="<?php echo $imageSource[$i]; ?>">
            </div>
            <div class="entry-content">
                <?php if ($article_icon && ($subpage_id == 0 ||$subpage_id == 2 || $subpage_id == 3 || $subpage_id == 5)) { ?>
                    <img class="article-icon" src="assets/img/logo_small.svg">
                <?php } ?>
                <h4><?php echo $dataSource->channel->item[$i]->category; ?></h4>
                <h2><?php echo $dataSource->channel->item[$i]->title; ?></h2>
                <p class="entry-teaser"><?php echo $dataSource->channel->item[$i]->description; ?></p>
            </div>
            <div class="entry-footer text-right">
                <small class="greydate"> <?php echo date("d.m.y, h:i", strtotime($dataSource->channel->item[$i]->pubDate)); ?> Uhr | <?php echo(rand(1,30));?> Kommentare</small>
            </div>
        </a>
    </article>
<?php } ?>