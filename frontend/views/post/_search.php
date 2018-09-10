<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Category;

?>

<div class="post-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'title')
        ->textInput(['placeholder' => 'Search by title'])
        ->label(false) ?>

    <?= $form->field($model, 'category_id')
        ->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name'), [
            'prompt' => 'Select Category'
        ])->label(false) ?>

    <div class="form-group btn-group btn-group-justified">
        <div class="btn-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="btn-group">
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>