<?php
	global $tmpl;
	$tmpl -> addStylesheet('cat','modules/news/assets/css');
	$total = count($list);
    $Itemid = 7;
	FSFactory::include_class('fsstring');	
?>
<aside class="new-contents">
    <div class="newslist-content">
        <div class="head-block-new">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 line-top">
                    <?php foreach ($list as $k => $item) { ?>
                        <?php $link = FSRoute::_("index.php?module=news&view=news&id=" . $item->id . "&code=" . $item->alias . "&ccode=" . $item->category_alias); ?>
                        <?php if ($k ==  0){ ?>
                            <div class="position-relative">
                                <figure>
                                    <img class="img-fluid" src="<?php echo URL_ROOT. str_replace('original', 'resized', $item->image); ?>" onerror="this.src = '/images/no-image.jpg';" />
                                </figure>
                                <a class="new-item stretched-link" href='<?php echo $link ?>' title="<?php echo $item->title ?>">
                                    <h4 class="title"><?php echo $item->title; ?></h4>
                                </a>
                                <p class="time-new"><?php echo show_datetime($item->created_time); ?></p>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div><!-- END: item-news -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 line-top-item">
                    <?php foreach ($list as $k => $item) { ?>
                        <?php $link = FSRoute::_("index.php?module=news&view=news&id=" . $item->id . "&code=" . $item->alias . "&ccode=" . $item->category_alias); ?>
                        <?php if( $k < 3 && $k != 0){ ?>
                            <div class="position-relative">
                                <figure>
                                    <img class="img-fluid" src="<?php echo URL_ROOT. str_replace('original', 'resized', $item->image); ?>" onerror="this.src = '/images/no-image.jpg';"/>
                                </figure>
                                <a class="new-item stretched-link" href='<?php echo $link ?>' title="<?php echo $item->title ?>"  >
                                    <h4 class="title"><?php echo $item->title; ?></h4>
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div><!-- END: item-news -->
            </div>
        </div>

        <div class="list_new_top">
            <h2 class="title-new-blog">Tin tức mới nhất</h2>
            <?php foreach ($list as $k => $item) { ?>
                <?php $link = FSRoute::_("index.php?module=news&view=news&id=" . $item->id . "&code=" . $item->alias . "&ccode=" . $item->category_alias); ?>
                <?php if ($k >= 3){ ?>
                    <div class="list-content-new position-relative">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <figure>
                                    <img class="img-fluid" src="<?php echo URL_ROOT. str_replace('original', 'resized', $item->image); ?>" onerror="this.src = '/images/no-image.jpg';"/>
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <a class="new-item stretched-link" href='<?php echo $link ?>' title="<?php echo $item->title ?>"  >
                                    <h4 class="title"><?php echo $item->title; ?></h4>
                                </a>
                                <p class="time-new"><?php echo show_datetime($item->created_time); ?></p>
                                <p class="summary-new-blog"><?php echo $item->summary; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div><!-- END: item-news -->
    </div>
    <div class="clearfix"></div>
    <?php if(isset($pagination)) echo $pagination->showPagination(3);?>
    <div class="clearfix"></div>
</aside>