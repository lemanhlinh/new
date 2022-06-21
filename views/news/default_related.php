<?php
    if(isset($relate_news_list)){ ?>
        <div class="box-related-new">
            <h4 class="title-module-related">
                <?php echo FSText::_('Bài liên quan'); ?>
            </h4>
            <div class="new-related row-item">
                <div class="row">
                    <?php
                    foreach($relate_news_list as $item){
                        $link = FSRoute::_('index.php?module=news&view=news&code='.$item -> alias.'&ccode='.$item->category_alias.'&id='.$item->id);
                        $image_large = URL_ROOT.str_replace('original','original',$item->image);
                        $image_resized = URL_ROOT.str_replace('original','resized',$item->image);
                        ?>
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
                </div>
            </div>
        </div>
<?php } ?>