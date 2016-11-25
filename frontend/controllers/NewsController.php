<?php

namespace frontend\controllers;
use frontend\models\News;

class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$data = new News();
    	$data = $data->getAllNews();
        return $this->render('index',['data'=>$data]);
    }

    public function actionDetail($id)
    {
    	$data = new News();
    	$data = $data->getNewsDetail($id);
        return $this->render('detail',['data'=>$data]);
    }
}
