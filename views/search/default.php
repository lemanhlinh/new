<?php
global $tmpl;
$tmpl->addStylesheet('cat', 'modules/news/assets/css');
$keyword = FSInput::get('keyword');
$page = FSInput::get('page');
$title = 'Tìm kiếm với từ khóa "' . $keyword . '"';
if (!$page)
    $tmpl->addTitle($title);
else
    $tmpl->addTitle($title . ' - Trang ' . $page);

$total = count($list);

$str_meta_des = $keyword;

for ($i = 0; $i < $total; $i ++) {
    $item = $list[$i];
    $str_meta_des .= ',' . $item->title;
}
$tmpl->addMetakey($str_meta_des);
$tmpl->addMetades($str_meta_des);
$Itemid = 4;
?>
<div class="new-contents">
    <aside class="newslist-content">

        <div class="list_new_top">
            <h1 class="title-new-blog">
                <span><?php echo FSText::_('Kết quả tìm kiếm cho từ khóa') . ' "' . $keyword . '"'; ?></span>
            </h1>
                <?php
                if ($total) {
                    foreach ($list as $item) {
                        $link = FSRoute::_('index.php?module=news&view=news&code='.$item->alias.'&id='.$item->id);
                        $image = URL_ROOT.str_replace('original','small',$item->image);
                        $image_large = URL_ROOT.str_replace('original','large',$item->image);
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
                        <?php
                    }
                    if ($pagination)
                        echo $pagination->showPagination(3);
                } else {
                    echo "Không có kết quả nào cho từ khóa <strong>" . $keyword . "</strong>";
                }
                ?>
        </div>
    </aside>
</div>