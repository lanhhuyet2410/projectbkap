<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Subscribe;


class SubscribeController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$model = new Subscribe();
    	if (Yii::$app->request->post()) {
    		$model->email = Yii::$app->request->post('subscribe');
    		$time = time();
	        $model->created_at = $time;
	        $model->updated_at = $time;
    		$model->save();
            return $this->redirect(['/']);
    	}
    }

}
