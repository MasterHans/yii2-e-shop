<?php

namespace app\controllers;


use app\models\Product;

class ProductController extends AppController
{
    public function actionView($id)
    {
        //Lazy load
        $product = Product::findOne($id);
        //Eager load
//        $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        return $this->render('view', compact('product', $product));
    }

}