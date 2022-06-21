<?php
global $tmpl, $config;
$tmpl->addStylesheet('detail', 'modules/news/assets/css');
$tmpl->setMeta('og:image', URL_ROOT . $data->image);
?>
<div class="news_detail row-content">
    <div class="container">
        <div class="d-flex justify-content-between next-prev-post">
            <a href="#" onclick="window.history.go(-1); return false;"><i class="icon-angle-left"></i> Quay lại</a>
            <a href="">Bài tiếp theo <i class="icon-angle-right"></i></a>
        </div>
        <h1 class="news-title text-center"><?php echo $data->title; ?></h1>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="time-post">
                    <ul class="d-flex justify-content-center p-0">
                        <li class="list-unstyled name-author">Admin</li>
                        <li><?php echo show_datetime($data->created_time); ?></li>
                        <li>
                            <img src="<?php echo URL_ROOT.'images/share.svg'; ?>" alt="">
                            <a href="">
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <summary class="contents-summary list-unstyled">
                    <?php echo $data->summary; ?>
                </summary><!-- END: .contents-detail-content -->
                <div class='description row-item'>
                    <?php echo $data->content; ?>
                </div><!-- END: .news-detail-content -->
                <?php include 'default_related.php'; ?>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
        </div>
        <div class="d-flex justify-content-between next-prev-post">
            <a href="#" onclick="window.history.go(-1); return false;"><i class="icon-angle-left"></i> Quay lại</a>
            <a href="">Bài tiếp theo <i class="icon-angle-right"></i></a>
        </div>
    </div>
</div><!-- END: .news_detail -->