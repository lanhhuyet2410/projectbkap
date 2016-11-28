<?php 
  $this->title = 'Tin tức';
  use frontend\widgets\categoryWidget;
  use frontend\widgets\factoryWidget;
  use frontend\models\News;
?>
<section id="aa-catg-head-banner">
    <img src="<?= Yii::$app->homeUrl ?>/img/fashion/fashion-header-bg-2.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
          <div class="aa-catg-head-banner-content">
            <h2>Blog Archive</h2>
            <ol class="breadcrumb">
                <li><a href="<?= Yii::$app->homeUrl ?>">Home</a></li>         
                <li class="active">Blog Archive</li>
            </ol>
          </div>
      </div>
  </div>
</section>
<!-- / catg header banner section -->

<!-- Blog Archive -->
<section id="aa-blog-archive">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-blog-archive-area">
          <div class="row">
            <div class="col-md-9">
              <!-- Blog details -->
              <div class="aa-blog-content aa-blog-details">
                <article class="aa-blog-content-single">
                  <h2><?= $data->title; ?></h2>
                   <div class="aa-article-bottom">
                    <div class="aa-post-author">
                      Posted By <a href="javascript:void(0)">admin</a>
                    </div>
                    <div class="aa-post-date">
                      <?php echo date('d-m-Y',$data->updated_at);?>
                    </div>
                  </div>
                  <figure class="aa-blog-img">
                    <a href="<?= Yii::$app->homeUrl.''.$data->news_id ?>"><img src="<?= $data->image_link; ?>" alt="<?= $data->title; ?>"></a>
                  </figure>
                  <p><?= $data->content; ?></p>
                  <div class="blog-single-bottom">
                    <div class="row">
                      <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="blog-single-tag">
                          <span>Tags:</span>
                          <a href="#">Fashion,</a>
                          <a href="#">Beauty,</a>
                          <a href="#">Lifestyle</a>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-single-social">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-linkedin"></i></a>
                          <a href="#"><i class="fa fa-google-plus"></i></a>
                          <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                </article>
                <!-- blog navigation -->
                <div class="aa-blog-navigation">
                  <a class="aa-blog-prev" href="<?= Yii::$app->homeUrl.''.$data->news_id ?>"><span class="fa fa-arrow-left"></span>Prev Post</a>
                  <a class="aa-blog-next" href="<?= Yii::$app->homeUrl.''.$data->news_id ?>">Next Post<span class="fa fa-arrow-right"></span></a>
                </div>
              </div>
            </div>

            <!-- blog sidebar -->
            <div class="col-md-3">
              <aside class="aa-blog-sidebar">
                <?= categoryWidget::widget(); ?>
                <?= factoryWidget::widget(); ?>
              </aside>
            </div>
            <div class="col-md-3">
              <aside class="aa-blog-sidebar">
                <div class="aa-sidebar-widget">
                  <h3>Recent Post</h3>
                  <div class="aa-recently-views">
                    <ul>
                    <?php 
                      $data = new News();
                      $data = $data->getRecentNews();
                      foreach ($data as $key => $value) {
                      
                    ?>
                      <li>
                        <a class="aa-cartbox-img" href="<?= Yii::$app->homeUrl.'news/detail?id='.$value['news_id'] ?>"><img src="<?= $value['image_link'] ?>" alt="<?= $value['title'] ?>"></a>
                        <div class="aa-cartbox-info">
                          <h4><a href="<?= Yii::$app->homeUrl.'news/detail?id='.$value['news_id'] ?>"><?= $value['title'] ?></a></h4>
                          <p><?php echo date('d-m-Y',$value['updated_at']);?></p>
                        </div>                    
                      </li>
                    <?php } ?>                             
                    </ul>
                  </div>                            
                </div>
              </aside>
            </div>
          </div>           
        </div>
      </div>
    </div>
  </div>
</section>