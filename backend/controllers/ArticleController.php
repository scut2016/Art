<?php
/**
 * 文件名：ArticleController.php
 * 文件说明:
 * 时间: 2016/10/25.9:34
 */

namespace backend\controllers;

use common\models\Article;

use yii\db\ActiveRecord;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class ArticleController extends Controller
{
    function actionIndex()
    {
       $art= Article::findOne(11);
        dd($art);
        $art->art_title='121212';
        dd($art->save());
    }

    public function behaviors()
    {
        return [
          
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'add'],
                'rules' => [
                    // 允许认证用户
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // 默认禁止其他用户
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['get'],
                    'add' => ['post'],
                ],
            ],
        ];
    }
}