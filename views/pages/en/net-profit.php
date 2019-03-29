<?php
use yii\helpers\Html;
?>
<h1><?=Html::encode($this->title)?></h1>
<div class="metric-page">

    <div class="metric-line-short">
        <?=\app\widgets\Metric::widget([
            'lang'=>'en',
            'major'=>true,
            'year'=>'2018',
            'value'=>124.7,
            'max_value'=>124.7,
            'delta'=>'+3.5 bn (2.9%)'
        ])?>
        <?=\app\widgets\Metric::widget([
            'lang'=>'en',
            'major'=>false,
            'year'=>'2017*',
            'value'=>121.2,
            'max_value'=>124.7
        ])?>

    </div>

    <div class="footnote">
        <div class="footnote__num">*</div>
        <div class="footnote__text">Some of the 2017 indicators are recalculated to take into account retroactive adjustments to the current accounting policy (primarily a change in the value of FGC UES’s fixed assets due to an adjustment to cash flows from network connection services as measured by an impairment test).</div>
    </div>

</div>