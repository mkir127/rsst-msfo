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
            'value'=>1021.6,
            'max_value'=>1021.6,
            'delta'=>'+73.3 bn (7.7%)'
        ])?>
        <?=\app\widgets\Metric::widget([
            'lang'=>'en',
            'major'=>false,
            'year'=>'2017',
            'value'=>948.3,
            'max_value'=>1021.6
        ])?>

</div>

<h2 class="revenue-details-header">Revenue Structure in 2018</h2>
<div class="metric-line">
    <div class="metric-ci">
        <div class="metric-ci__title">Electricity transmission<br>and distribution</div>
        <div class="metric-ci__graph">
            <div class="metric-ci__circle"></div>
        </div>
        <div class="metric-ci__value">&nbsp;81%</div>
    </div>

    <div class="metric-ci">
        <div class="metric-ci__title">Electricity and<br>capacity sales</div>
        <div class="metric-ci__graph">
            <div class="metric-ci__circle metric-ci__circle_l2"></div>
        </div>
        <div class="metric-ci__value">&nbsp;12%</div>
    </div>

    <div class="metric-ci">
        <div class="metric-ci__title">Network connection<br>services</div>
        <div class="metric-ci__graph">
            <div class="metric-ci__circle metric-ci__circle_l3"></div>
        </div>
        <div class="metric-ci__value">&nbsp;5%</div>
    </div>

    <div class="metric-ci">
        <div class="metric-ci__title">Other&nbsp;revenue*</div>
        <div class="metric-ci__graph">
            <div class="metric-ci__circle metric-ci__circle_l4"></div>
        </div>
        <div class="metric-ci__value">&nbsp;2%</div>
    </div>
</div>

    <div class="footnote">
        <div class="footnote__num">*</div>
        <div class="footnote__text">Other revenue mainly includes revenue from construction services, leases, and repair and maintenance services.</div>
    </div>

</div>