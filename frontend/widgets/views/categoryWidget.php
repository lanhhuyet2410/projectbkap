<div class="aa-sidebar-widget">
    <h3>Category</h3>
    <ul class="aa-catg-nav">
    <?php 
    	foreach ($dataCat as $key => $value) {
     ?>
	    <li><a href="<?= Yii::$app->urlManager->baseUrl ?>/product/listproduct?id=<?= $value['cat_id'] ?>"><?= $value['cat_name'] ?></a></li>
	 <?php } ?>
    </ul>
</div>