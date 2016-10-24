<?php
/**
 * 文件名：CategoryController.php
 * 文件说明:
 * 时间: 2016/10/24.13:10
 */

namespace backend\controllers;

use common\models\Category;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        dd(Category::parents(12));
        dd(Category::tree());
    }
}