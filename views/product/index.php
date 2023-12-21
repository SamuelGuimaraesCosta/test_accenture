<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Products List';
$this->params['breadcrumbs'][] = $this->title;

?>

<h1 class="text-center text-wrap fw-bolder text-decoration-underline">
  <?= Html::encode($this->title) ?>
</h1>
<div class="product-index">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="list-group">
          <?php foreach ($products as $product): ?>
            <li class="list-group-item">
              <?= Html::encode($product->name) ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>