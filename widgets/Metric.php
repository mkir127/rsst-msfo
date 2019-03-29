<?php
namespace app\widgets;


use yii\base\Widget;

class Metric extends Widget
{
    public $lang;
    public $major;
    public $year;
    public $value;
    public $max_value;
    public $delta;

    public function run()
    {
        return $this->render('metric',[
            'lang'=>$this->lang,
            'major'=>$this->major?true:false,
            'year'=>$this->year,
            'value'=>$this->value,
            'delta'=>$this->delta,
            'inner_bar_width'=>(int)(180/$this->max_value*$this->value),
        ]);
    }

}