<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $news_id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $image_link
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content', 'image_link', 'created_at', 'updated_at'], 'required'],
            [['content'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'description', 'image_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'image_link' => 'Image Link',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function getNews(){
        $data = News::find()->where('status =1')->limit(3)->all();
        return $data;
    }

    public function getAllNews(){
        $data = News::find()->where('status =1')->all();
        return $data;
    }

    public function getNewsDetail($id){
        $data = News::find()->where(['news_id'=>$id])->one();
        return $data;
    }

    public function getRecentNews($limit=4){
        $data = News::find()->limit($limit)->orderBy('news_id DESC')->asArray()->all();
        return $data;
    }
    
}



