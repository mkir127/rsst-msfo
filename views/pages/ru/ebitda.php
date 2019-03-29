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
            'delta'=>'+13,4 млрд (4,6%)'
        ])?>
        <?=\app\widgets\Metric::widget([
            'lang'=>'ru',
            'major'=>false,
            'year'=>'2017*',
            'value'=>292.8,
            'max_value'=>306.3
        ])?>

    </div>

    <div class="footnote">
        <div class="footnote__num">*</div>
        <div class="footnote__text">Произведен перерасчет некоторых показателей за 2017 год с учетом ретроспективных корректировок в условиях действующей учетной политики (в основном изменение величины основных средств ПАО «ФСК ЕЭС» в связи с корректировкой денежных потоков от технологического присоединения при проведении теста на обесценение).</div>
    </div>

</div>