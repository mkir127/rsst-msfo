<?php

namespace app\controllers;


use app\models\MainMenu;
use yii\base\ViewNotFoundException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex($lang)
    {
        $this->view->params['main_page'] = true;
        $this->view->params['lang'] = ($lang=='en'?'en':'ru');
        \Yii::$app->language = $lang;
        return $this->render('index');
    }

    public function actionPage($lang, $page) {

        $lang = ($lang == 'en' ? 'en' : 'ru');
        $this->view->params['lang'] = $lang;
        $this->view->params['current_page'] = $page;
        \Yii::$app->language = $lang;
        if(preg_match('~^[\w-]+$~',$page)) {
            \Yii::$app->view->title = (new MainMenu())->titleByTag($lang, $page);
            $this->view->params['page'] = $page;
            try {
                return $this->render('@app/views/pages/' . $lang . '/' . $page);
            }
            catch (ViewNotFoundException $e) {
                throw new NotFoundHttpException('Page not found');
            }

        }
        else throw new NotFoundHttpException('Page not found. Wrong url.');
    }
}
