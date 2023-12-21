<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Product;

class ProductController extends Controller
{
  public function actionIndex()
  {
    $products = Product::find()->all();

    return $this->render('index', [
      'products' => $products,
    ]);
  }
}