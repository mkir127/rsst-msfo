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
            'value'=>1021.6,
            'max_value'=>1021.6,
            'delta'=>'+73,3 млрд (7,7%)'
        ])?>
        <?=\app\widgets\Metric::widget([
            'lang'=>'ru',
            'major'=>false,
            'year'=>'2017*',
            'value'=>948.3,
            'max_value'=>1021.6
        ])?>

</div>

<h2 class="revenue-details-header">Структура выручки</h2>
<div class="metric-line">
    <div class="metric-ci">
        <div class="metric-ci__title">Передача<br>электроэнергии</div>
        <div class="metric-ci__graph">
            <div class="metric-ci__circle"></div>
        </div>
        <div class="metric-ci__value">&nbsp;80,8%</div>
    </div>

    <div class="metric-ci">
        <div class="metric-ci__title">Продажа электроэнергии<br>и мощности</div>
        <div class="metric-ci__graph">
            <div class="metric-ci__circle metric-ci__circle_l2"></div>
        </div>
        <div class="metric-ci__value">&nbsp;11,7%</div>
    </div>

    <div class="metric-ci">
        <div class="metric-ci__title">Услуги по технологическому<br>присоединению к электросетям</div>
        <div class="metric-ci__graph">
            <div class="metric-ci__circle metric-ci__circle_l3"></div>
        </div>
        <div class="metric-ci__value">&nbsp;5,2%</div>
    </div>

    <div class="metric-ci">
        <div class="metric-ci__title">Прочая&nbsp;выручка**</div>
        <div class="metric-ci__graph">
            <div class="metric-ci__circle metric-ci__circle_l4"></div>
        </div>
        <div class="metric-ci__value">&nbsp;2,9%</div>
    </div>
</div>

<div class="footnote">
    <div class="footnote__num">*</div>
    <div class="footnote__text">Произведен перерасчет некоторых показателей за 2017 год с учетом ретроспективных корректировок в условиях действующей учетной политики (в основном изменение величины основных средств ПАО «ФСК ЕЭС» в связи с корректировкой денежных потоков от технологического присоединения при проведении теста на обесценение).</div>
</div>

    <div class="footnote">
        <div class="footnote__num">**</div>
        <div class="footnote__text">В состав прочей выручки входит в основном выручка от строительных услуг, аренды, услуг по ремонту и техническому обслуживанию.</div>
    </div>

</div>