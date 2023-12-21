<?php

/** @var yii\web\View $this */

use yii\bootstrap5\html;

$this->title = 'Basic CRUD Accenture Test';
?>
<div class="site-index">

  <div class="jumbotron text-center bg-transparent mt-5 mb-5">
    <h1 class="display-4">Shopping List CRUD Example</h1>

    <p class="lead">Welcome to the Shopping List CRUD example for Accenture test.</p>

    <?php
    echo Html::a('Go Shopping!', ['/product/index'], ['class' => 'btn btn-outline-success btn-lg']);
    ?>

<p class="lead">EN-US: If you want to follow the entire development of this application, <a href="https://github.com/SamuelGuimaraesCosta/test_accenture" target="_blank">access here</a></p>
<p class="lead">PT-BR: Se você desejar acompanhar todo o desenvolvimento desta aplicação, <a href="https://github.com/SamuelGuimaraesCosta/test_accenture" target="_blank">acesse aqui</a></p>
  </div>

  <div class="body-content">
  </div>
</div>