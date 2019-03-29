<?php
namespace app\models;


use yii\base\Model;

class MainMenu extends Model
{
    private $_menu = [
        'ru' => [
            ['name'=>'О компании', 'url'=>'about', 'items' => null],
            ['name'=>'Основные показатели', 'url'=>'', 'items' => [
                ['name'=>'Выручка', 'url'=>'revenue'],
                ['name'=>'EBITDA', 'url'=>'ebitda'],
                ['name'=>'Чистая прибыль', 'url'=>'net-profit']
            ]],
            ['name'=>'Основные события', 'url'=>'highlights', 'items' => null],
            ['name'=>'Консолидированный отчет о прибыли или убытке и прочем совокупном доходе', 'url'=>'report-1', 'items' => null],
            ['name'=>'Консолидированный отчет о финансовом положении', 'url'=>'report-2', 'items' => null],
            ['name'=>'Консолидированный отчет о движении денежных средств', 'url'=>'report-3', 'items' => null],
            ['name'=>'Консолидированный отчет об изменениях в капитале', 'url'=>'report-4', 'items' => null],
            ['name'=>'Аудиторское заключение независимого аудитора', 'url'=>'audit', 'items' => null]
        ],
        'en' => [
            ['name'=>'About Company', 'url'=>'about', 'items' => null],
            ['name'=>'Key Results', 'url'=>'', 'items' => [
                ['name'=>'Revenue', 'url'=>'revenue'],
                ['name'=>'EBITDA', 'url'=>'ebitda'],
                ['name'=>'Net profit', 'url'=>'net-profit']
            ]],
            ['name'=>'Highlights', 'url'=>'highlights', 'items' => null],
            ['name'=>'Consolidated Statement of Profit or Loss and Other Comprehensive Income', 'url'=>'report-1', 'items' => null],
            ['name'=>'Consolidated Statement of Financial Position', 'url'=>'report-2', 'items' => null],
            ['name'=>'Consolidated Statement of Cash Flows', 'url'=>'report-3', 'items' => null],
            ['name'=>'Consolidated Statement of Changes in Equity', 'url'=>'report-4', 'items' => null],
            ['name'=>'Independent Auditor’s Report', 'url'=>'audit', 'items' => null]
        ]
    ];

    public function getMenuItems($lang)
    {
        if($lang!='en' && $lang!='ru') $lang='ru';
        return $this->_menu[$lang];
    }

    public function titleByTag($lang, $tag)
    {
        $data = $this->_menu[$lang];
        foreach ($data as $item) {
            if($item['items']) {
                foreach ($item['items'] as $sub_item) {
                    if($sub_item['url']==$tag) return $sub_item['name'];
                }
            }
            elseif($item['url']==$tag) {
                return $item['name'];
            }
        }
        if($lang=='en') return 'Financial results 2018';
        else return 'Финансовая отчетность 2018';
    }


}