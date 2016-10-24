<?php
/**
 * 文件名：AddViews.php
 * 文件说明://定义一个增加浏览次数的行为
 * 时间: 2016/10/24.16:16
 */

namespace common\befaviors;

use yii\base\Behavior;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;
use yii\db\BaseActiveRecord;

class AddViews extends AttributeBehavior
{

    public $id;//id
    public $views;//查看次数

    public function init()
    {
        parent::init();

        if (empty($this->attributes)) {
            $this->attributes = [
                BaseActiveRecord::EVENT_AFTER_FIND => [$this->views],
            ];
        }
    }


    public function add()
    {
        dd('adddd');
    }

}