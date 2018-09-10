<?php

use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
?>

<?php Modal::begin([
    'id' => 'create-post-modal',
    'header' => 'Create new Post',
    'size' => Modal::SIZE_LARGE
]); ?>

<?= $this->render('_form', [
    'model' => $model
]) ?>

<?php Modal::end(); ?>