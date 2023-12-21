<?php
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var $this yii\web\View **/
/** @var $model app\models\Product **/

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products List', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="product-view text-center">
  <h1>
    <?= Html::encode($this->title) ?>
  </h1>

  <p><b>Description:</b>
    <?= Html::encode($model->description) ?>
  </p>
  <p><b>Price: </b>$
    <?= Html::encode($model->price) ?>
  </p>
  <p><b>Created at: </b>
    <?= Html::encode($model->create_date) ?>
  </p>
  <p><b>Updated at: </b>
    <?= Html::encode($model->update_date) ?>
  </p>

  <div class="text-center">
    <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-outline-primary', 'style' => 'margin-right: 5px;']) ?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
      'class' => 'btn btn-outline-danger',
      'data' => [
        'confirm' => 'Are you sure you want to delete this product?',
        'method' => 'post',
      ],
    ]) ?>
  </div>
</div>