<div class="aa-sidebar-widget">
    <h3>Factory</h3>
    <ul class="aa-catg-nav">
    <?php 
    	foreach ($dataFactory as $key => $value) {
     ?>
	    <li><a href="<?= Yii::$app->urlManager->baseUrl ?>/product/listbyfactory?id=<?= $value['factory_id'] ?>"><?= $value['factory_name'] ?></a></li>
	 <?php } ?>
    </ul>
</div>