<?php
use app\widgets\Indicator;

$indicator_names = [
    'ru' => [
          'revenue'=>'Выручка',
          'ebitda'=>'EBITDA',
          'costs'=>'Операционные расходы',
          'profit'=>'Чистая прибыль',
          'flow'=>'ЧДП(ОД)*'
    ],
    'en' => [
        'revenue'=>'Revenue',
        'ebitda'=>'EBITDA',
        'costs'=>'Operating expenses',
        'profit'=>'Profit',
        'flow'=>'NCFO*'
    ],
];

$lang = $this->params['lang'];
if($lang!='en' && $lang!='ru') $lang='ru';

$indicator_data = <<<JS
    var indicator_lang = '$lang'
    var indicator_data = {
        2017: [
            {'id':'revenue', 'value':'948.3', 'trend': 0, 'bar_height': 74},
            {'id':'ebitda', 'value':'292.8', 'trend': 0, 'bar_height': 45},
            {'id':'costs', 'value':'(797.6)', 'trend': 0, 'bar_height': 62},
            {'id':'profit', 'value':'121.2', 'trend': 0, 'bar_height': 31},
            {'id':'flow', 'value':'212.4', 'trend': 0, 'bar_height': 39}
        ],
        2018: [
            {'id':'revenue', 'value':'1,021.6', 'trend': 3, 'bar_height': 100},
            {'id':'ebitda', 'value':'306.3', 'trend': 2, 'bar_height': 60},
            {'id':'costs', 'value':'(869.3)', 'trend': 3, 'bar_height': 85},
            {'id':'profit', 'value':'124.7', 'trend': 1, 'bar_height': 40},
            {'id':'flow', 'value':'238.6', 'trend': 2, 'bar_height': 55}
        ],
        'root_bar_heights': {
            'revenue': 100,
            'ebitda': 60,
            'costs': 85,
            'profit': 40,
            'flow': 55
        }
    };
JS;

$this->registerJs($indicator_data, yii\web\View::POS_END);
$this->registerJsFile('/js/index.js',  ['depends' => [\yii\web\JqueryAsset::className()]]);

if($lang=='en') $this->title = 'ROSSETI. Financial results 2018';
else $this->title = 'ГК Россети. Финансовая отчетность 2018';

?>

<div class="mp-top-line">
    <div class="mp-top-line__years">
        <ul>
            <li><a class="ac_change-year" data-year="2017">2017</a></li>
            <li><a class="ac_change-year" data-year="2018">2018</a></li>
        </ul>
    </div>
    <div class="mp-top-line__soc">
        <ul>
            <li><a href="https://twitter.com/home?status=http%3A//ar17.rosseti.ru/ru/home" target="_blank"><img src="/images/common/soc-tw.svg"></a></li>
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//ar17.rosseti.ru/ru/home" target="_blank"><img src="/images/common/soc-fb.svg"></a></li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
<div class="mp-db-anchor">
    <div class="clearfix"></div>
    <div style="float: left; height: 100%; padding-bottom: 50px">
    <?=Indicator::widget(['name'=>$indicator_names[$lang]['revenue'],'id'=>'ind_revenue', 'lang'=>$lang])?>
    <div class="mp-db-anchor__fix"></div>
    </div>
    <div class="mp-main-pic"></div>
    <div class="mp-next-page">
        <?php
            if($lang=='en') $next_page='/en/about';
            else $next_page='/about';
        ?>
        <a href="<?=$next_page?>"><img src="/images/common/next-page.svg"></a>
    </div>
</div>
<div class="mb-db-area">
    <div class="mb-db-area__item">
        <?=Indicator::widget(['name'=>$indicator_names[$lang]['ebitda'], 'id'=>'ind_ebitda', 'lang'=>$lang])?>
    </div>
    <div class="mb-db-area__item">
        <?=Indicator::widget(['name'=>$indicator_names[$lang]['costs'], 'id'=>'ind_costs', 'lang'=>$lang])?>
    </div>
    <div class="mb-db-area__item">
        <?=Indicator::widget(['name'=>$indicator_names[$lang]['profit'], 'id'=>'ind_profit', 'lang'=>$lang])?>
    </div>
    <div class="mb-db-area__item">
        <?=Indicator::widget(['name'=>$indicator_names[$lang]['flow'], 'id'=>'ind_flow', 'lang'=>$lang])?>
    </div>
</div>
<div class="clearfix"></div>
<?php if($lang=='en') { ?>
    <div class="mp-metric-info">Net cash flows from operating activities</div>
<?php } else { ?>
    <div class="mp-metric-info">Чистый поток денежных средств от операционной деятельности</div>
<?php } ?>