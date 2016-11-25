<?php 
	use frontend\widgets\categoryWidget;
  use frontend\models\News;
	$this->title = 'Tin tức';
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

  <!-- Blog Archive -->
  <section id="aa-blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-archive-area aa-blog-archive-2">
            <div class="row">
              <div class="col-md-9">
                <div class="aa-blog-content">
                  <div class="row">
                  	<?php foreach ($data as $key=> $value) {
              		?>
                    <div class="col-md-4 col-sm-4">
                      <article class="aa-latest-blog-single">
                        <figure class="aa-blog-img">                    
                          <a href="<?= Yii::$app->homeUrl.'news/detail?id='.$value['news_id'] ?>"><img alt="<?= $value['title'] ?>" src="<?= $value['image_link'] ?>"></a>  
                            <figcaption class="aa-blog-img-caption">
                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                            <span href="javascript:void(0)"><i class="fa fa-clock-o"></i><?php echo date('d-m-Y',$value['created_at']);?></span>
                          </figcaption>                          
                        </figure>
                        <div class="aa-blog-info">
                          <h3 class="aa-blog-title"><a href="<?= Yii::$app->homeUrl.'news/detail?id='.$value['news_id']; ?>"><?= $value['title']; ?></a></h3>
                          <p><?= $value['description'] ?>.</p> 
                          <a class="aa-read-mor-btn" href="<?= Yii::$app->homeUrl.'news/detail?id='.$value['news_id']; ?>">Read more <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                      </article>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <!-- Blog Pagination -->
                <!-- <div class="aa-blog-archive-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a aria-label="Previous" href="#">
                          <span aria-hidden="true">«</span>
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a aria-label="Next" href="#">
                          <span aria-hidden="true">»</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div> -->
            </div>
            <div class="col-md-3">
                <aside class="aa-blog-sidebar">
                  <?= categoryWidget::widget(); ?>
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
                            <p><?php echo date('d-m-Y',$value['created_at']);?></p>
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