<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 18.03.2019
 * Time: 21:35
 */

namespace app\widgets;


use yii\base\Widget;

class Indicator extends Widget
{
    public $id;
    public $name;
    public $lang;

    public function run()
    {
        return $this->render('indicator',[
            'id'=>$this->id,
            'name'=>$this->name,
            'lang'=>$this->lang
        ]);
    }

}