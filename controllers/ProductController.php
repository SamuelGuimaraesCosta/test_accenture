<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Product;
use yii\bootstrap5\Alert;

class ProductController extends Controller
{
  public function actionIndex()
  {
    $products = Product::find()->all();

    return $this->render('index', [
      'products' => $products,
    ]);
  }

  public function actionCreate()
  {
    $model = new Product();

    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      $response = $model->save();

      if($response) {
        Yii::$app->session->setFlash('success', 'New Product succesfuly created!');

        return $this->redirect(['product/index']);
      } else {
        Yii::$app->session->setFlash('error', 'New Product was an error!');
      }
    } else {
      return $this->render('product-form', ['model' => $model]);
    }
  }
}