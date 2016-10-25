<?php
/**
 * 文件名：Article.php
 * 文件说明:
 * 时间: 2016/10/25.9:34
 */

namespace common\models;

use common\befaviors\AddViews;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
   public function behaviors()
    {
        return [
            'addView'=>[
                    'class' => AddViews::className(),
                    'field'=>'art_view',
//                     'attributes' => [
//                        ActiveRecord::EVENT_AFTER_FIND => ['art_view'],
//                     ],
//        'value'=>function($event){
//            return $event->sender->art_view+1;
//        },
     ],];
    }
}