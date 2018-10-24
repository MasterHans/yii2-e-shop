<?php
/**
 * Created by PhpStorm.
 * User: sag
 * Date: 08.10.2018
 * Time: 20:58
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    protected function setMets($title = null, $keywords = null, $description = null)
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }
}