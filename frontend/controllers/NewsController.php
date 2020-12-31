<?php

namespace frontend\controllers;
use yii\data\Pagination;

class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $judul = \common\models\News::find();
        
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $judul->count(),
        ]);
    
        $news = \common\models\News::find()
            ->where(['status' => 2])
            ->orderBy('id_news DESC')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
    
        return $this->render('index',[
            'judul' => $judul,
            'news' => $news,
            'pagination' => $pagination,]);
    }

    public function actionNewsDetail($id_news)
    {
        $news = \common\models\News::find()
        ->where([ 'id_news' => $id_news])
        ->orderBy('id_news DESC')
        ->limit(1)
        ->all();
    //  echo '<pre>'; die(var_dump($pages));exit;
        return $this->render('news-detail', [
        'news' => $news,
        ]);

    }

}
