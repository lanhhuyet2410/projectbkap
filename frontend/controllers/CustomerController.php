<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Customer;


class CustomerController extends \yii\web\Controller
{


    public function actionIndex()
    {
        return $this->render('index');
    }

  
    public function actionView()
    {
        return $this->render('view', [
            'model' => $this->findModel(Yii::$app->user->identity->id),
        ]);
    }

    public function actionUpdate()
    {
        $model = $this->findModel(Yii::$app->user->identity->id);

        if ($model->load(Yii::$app->request->post())) {
            $time = time();
            $model->updated_at = $time;
            if($model->password != ''){
                $model->setPassword(Yii::$app->request->post('Customer')['password']);
                $model->generateAuthKey();
                $model->generatePasswordResetToken();
            }

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    protected function findModel($id)
    {
        if (($model = Customer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
