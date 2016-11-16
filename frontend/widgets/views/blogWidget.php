<section id="aa-latest-blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-latest-blog-area">
          <h2>LATEST BLOG</h2>
          <div class="row">
            <!-- single latest blog -->
            <?php
              foreach ($data as $key => $value) {
             ?>
            <div class="col-md-4 col-sm-4">
              <div class="aa-latest-blog-single">
                <figure class="aa-blog-img">                    
                  <a href="#"><img src="<?= $value['image_link'] ?>" alt="<?= $value['title'] ?>"></a>  
                    <figcaption class="aa-blog-img-caption">
                    <span href="#"><i class="fa fa-eye"></i>5K</span>
                    <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                    <a href="#"><i class="fa fa-comment-o"></i>20</a>
                    <span href="#"><i class="fa fa-clock-o"></i><?= $value['updated_at'] ?></span>
                  </figcaption>                          
                </figure>
                <div class="aa-blog-info">
                  <h3 class="aa-blog-title"><a href="#"><?= $value['title'] ?></a></h3>
                  <p><?= $value['description'] ?></p> 
                  <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>    
    </div>
  </div>
</section>