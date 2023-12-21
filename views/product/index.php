<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Products List';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="text-center text-wrap fw-bolder">
    <?= Html::encode($this->title) ?>
  </h1>
  <?= Html::a('New Product', ['/product/create'], ['class' => 'btn btn-outline-success btn-lg']); ?>
</div>
<div class="product-index">
  <div class="container">
    <?php if (!empty($products)): ?>
      <?php
      echo '<div class="row">';
      foreach ($products as $product) {
        echo '<div class="col-md-6 mb-4">';
        echo '<div class="flex-column justify-content-between h-100 rounded p-3 border text-center text-wrap text-truncate">';
        echo '<div>';
        echo '<h3 class="text-wrap fw-bolder text-decoration-underline">' . Html::a(Html::encode($product->name), ['/product/view']) . '</h3>';
        echo '<p class="text-wrap">' . Html::encode($product->description) . '</p>';
        echo '<p>Price: $' . Html::encode($product->price) . '</p>';
        echo '</div>';
        echo '<div class="mt-auto text-center">';
        echo Html::a('Edit', ['product/update', 'id' => $product->id], ['class' => 'btn btn-outline-primary', 'style' => 'margin-right: 5px;']);
        echo Html::a('Delete', ['product/delete', 'id' => $product->id], [
          'class' => 'btn btn-outline-danger',
          'data' => [
            'confirm' => 'Tem certeza que deseja excluir este produto?',
            'method' => 'post',
          ],
        ]);
        echo '</div>';

        echo '</div>';
        echo '</div>';
      }
      echo '</div>';
      ?>
    <?php else: ?>
      <div class="alert alert-warning text-center text-wrap fw-bolder" role="alert">
        There are no products available at the moment.
      </div <?php endif; ?> </div>
  </div>