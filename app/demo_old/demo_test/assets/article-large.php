<?php if( !empty($dataSource) && !empty($imageSource) ) { ?>

    <article class="main-article">
    
        <div class="entry-image">
            <img src="<?php echo $imageSource[$i]; ?>">
            
        </div>
        
        <div class="entry-content">
       
            <h4><?php echo $dataSource->channel->item[$i]->category; ?></h4>
         
            <h2><?php echo $dataSource->channel->item[$i]->title; ?></h2>
            <p class="entry-teaser"><?php echo $dataSource->channel->item[$i]->description; ?></p>
            
        </div>
       
        <div class="entry-footer text-right">
            <small class="greydate"> <?php echo date("d.m.y, h:i", strtotime($dataSource->channel->item[$i]->pubDate)); ?> Uhr | <?php echo(rand(1,30));?> Kommentare</small>
        </div>
    </article>
<?php } ?>