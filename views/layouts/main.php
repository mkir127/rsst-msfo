<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$this->registerJsFile('/js/common/common.js',  ['depends' => [\yii\web\JqueryAsset::className()]]);

$lang = isset($this->params['lang'])?$this->params['lang']:'ru';
if($lang!='en' && $lang!='ru') $lang='ru';

$page = isset($this->params['page'])?$this->params['page']:'';

if(isset($this->params['main_page'])) {
    $is_main_page = $this->params['main_page'] ? true : false;
}
else $is_main_page=false;

$main_tag_classes = [];
if($is_main_page) $main_tag_classes[]='main-page';

if($lang=='en') $main_tag_classes[]='lang_en';
else $main_tag_classes[]='lang_ru';

if($main_tag_classes) {
    $main_tag_classes = ' class="'.implode(' ',$main_tag_classes).'"';
}
else $main_tag_classes='';

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
    <link rel="icon" type="image/png" href="/icon.png">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body<?=$main_tag_classes?>>
<?php $this->beginBody() ?>

<div class="wrap">

    <div class="main-menu" id="main-menu">
        <div class="main-menu__close">
            <img src="/images/common/close-menu.svg">
        </div>
        <div class="main-menu__logo">
            <a href="<?=$lang=='en'?'/en/':'/'?>"><img src="/images/common/logo.svg"></a>
        </div>
        <?php
        $main_menu_items = (new \app\models\MainMenu)->getMenuItems($lang);
        $current_page=isset($this->params['current_page'])?$this->params['current_page']:'';
        ?>
        <ul>
            <?php
            $menu_number = 1;
            if($lang=='en') $lang_prefix = '/en/';
            else $lang_prefix = '/';
            foreach ($main_menu_items as $item) {
                if($item['items']) {
                    echo '<li><div class="number">0'.$menu_number.'</div><div class="title">'.$item['name'].'</div><ul>';
                    foreach ($item['items'] as $sub_item) {
                        echo '<li><a href="'.$lang_prefix.$sub_item['url'].'"'.($current_page==$sub_item['url']?' class="sel"':'').'><div>'.$sub_item['name'].'</div></a></li>';
                    }
                    echo '</ul></li>';
                }
                else {
                    echo '<li><div class="number">0'.$menu_number.'</div><a href="'.$lang_prefix.$item['url'].'"'.($current_page==$item['url']?' class="sel"':'').'><div>'.$item['name'].'</div></a></li>';
                }
                $menu_number++;
            }
            ?>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="header__left">
                <div class="header__logo-bar">
                    <a id="ac_menu-btn" class="header__logo-bar__menu"><img src="/images/common/menu-sign.svg"></a>
                    <a class="header__logo-bar__sign" href="<?=$lang=='en'?'/en/':'/'?>"><img src="/images/common/logo-sm.svg"></a>
                </div>
                <?php
                    $layout_title=$lang=='en'?'Financial results 2018':'Финансовая отчестность 2018';
                    if($is_main_page) echo "<h1>$layout_title</h1>";
                    else echo "<div class=\"header_title\">$layout_title</div>";
                    ?>
            </div>
            <div class="header__right">
                <ul class="header__menu">
                    <li><a href="<?='/'.$page?>"<?=$lang=='ru'?' class="sel"':''?>>RU</a></li>
                    <li><a href="<?='/en/'.$page?>"<?=$lang=='en'?' class="sel"':''?>>EN</a></li>
                    <li class="header__menu__contacts"><a href="<?=$lang=='en'?'/en/contacts':'/contacts'?>"><?=$lang=='en'?'Contacts':'Контакты'?></a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <?= $content ?>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer__menu">
            <ul>
                <li class="footer__menu__contacts"><a href="<?=$lang=='en'?'/en/contacts':'/contacts'?>"><?=$lang=='en'?'Contacts':'Контакты'?></a></li>
                <li class="footer__menu__print"><a href="javascript:window.print(); void 0;"><img src="/images/common/print.svg"></a></li>
                <li><a href="http://www.rosseti.ru" target="_blank"><img src="/images/common/globe.svg"></a></li>
            </ul>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
