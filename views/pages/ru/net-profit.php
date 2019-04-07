<?php
use yii\helpers\Html;
?>
<h1><?=Html::encode($this->title)?></h1>
<div class="metric-page">

    <div class="metric-line-short">
        <?=\app\widgets\Metric::widget([
            'lang'=>'ru',
            'major'=>true,
            'year'=>'2018',
            'value'=>124.7,
            'max_value'=>124.7,
            'delta'=>'+3,5 млрд (2,9%)'
        ])?>
        <?=\app\widgets\Metric::widget([
            'lang'=>'ru',
            'major'=>false,
            'year'=>'2017',
            'value'=>121.2,
            'max_value'=>124.7
        ])?>

    </div>
</div>