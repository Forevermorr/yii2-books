<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Books */
/* @var $allauthor app\models\Authors */

$this->title = 'Create Books';
$this->params['breadcrumbs'][] = ['label' => 'Книги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'allauthor' => $allauthor,
    ]) ?>

</div>
