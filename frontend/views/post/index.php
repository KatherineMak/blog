<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use  yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
$js = <<<JS
	$(document).on('click', '#create-new-post-btn', function() {
		$.ajax({
			url: "/frontend/web/post/create",
			type: "POST",
			dataType: "html",
			success: function(data) {
				$('#modal-placeholder').html(data);
				$('#create-post-modal').modal('toggle');
			}
		});

		return false;
	});
JS;
$this->registerJs($js, View::POS_READY);
?>
<div class="post-index">
<div id="modal-placeholder"></div>
	
<div class="row">

        <div class="col-md-9">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'itemView' => '_view',
            ]) ?>
        </div>

        <div class="col-md-3">
            <h1>
                <?= Html::encode($this->title) ?>
            </h1>

            <?= $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a('Create new Post', [
                    '/post/create'
                ], [
					'id' => 'create-new-post-btn',
                    'class' => 'btn btn-success btn-block'
                ]) ?>
            </p>
        </div>

    </div>
</div>
