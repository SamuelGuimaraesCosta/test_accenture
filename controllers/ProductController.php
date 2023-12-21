<?php

namespace app\controllers;

use Yii;
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

  public function actionCreate()
  {
    $model = new Product();

    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      $response = $model->save();

      if ($response) {
        Yii::$app->session->setFlash('success', 'New Product succesfuly created!');

        return $this->redirect(['product/index']);
      } else {
        Yii::$app->session->setFlash('error', 'New Product was an error!');
      }
    } else {
      return $this->render('product-form', ['model' => $model]);
    }
  }

  public function actionDelete($id)
  {
    $model = Product::find()->where(['id' => $id])->one();

    $response = $model->delete();

    if ($response) {
      Yii::$app->session->setFlash('success', 'Your Product was succesfuly deleted from your List!');

      return $this->redirect(['product/index']);
    } else {
      Yii::$app->session->setFlash('error', 'There was an error while deleting the product from your list.');
    }
  }

  public function actionUpdate($id)
  {
    $model = Product::find()->where(['id' => $id])->one();

    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      $response = $model->update();

      if ($response) {
        Yii::$app->session->setFlash('success', 'Your Product was succesfuly updated!');

        return $this->redirect(['product/index']);
      } else {
        Yii::$app->session->setFlash('error', 'There was an error while updating the product from your list.');
      }
    } else {
      return $this->render('product-form', ['model' => $model]);
    }
  }
}