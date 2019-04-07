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
            'value'=>306.3,
            'max_value'=>306.3,
            'delta'=>'+13,5 млрд (4,6%)'
        ])?>
        <?=\app\widgets\Metric::widget([
            'lang'=>'ru',
            'major'=>false,
            'year'=>'2017',
            'value'=>292.8,
            'max_value'=>306.3
        ])?>

    </div>
</div>