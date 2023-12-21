<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = $model->isNewRecord ? 'Create New Product' : 'Update Product';
$this->params['breadcrumbs'][] = ['label' => 'Products List', 'url' => ['product/index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="product-form">
  <h1 class="text-center text-wrap fw-bolder text-decoration-underline">
    <?= Html::encode($this->title) ?>
  </h1>

  <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
  <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
  <?= $form->field($model, 'price')->textInput(['maxlength' => true, 'minLength' => true]) ?>
  
  <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create New Product' : 'Update Product', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
  </div>
  <?php ActiveForm::end(); ?>
</div>