<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Encyclopedia */

$this->title = $model->name_pedia;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Encyclopedias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encyclopedia-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $model->article ?>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_pedia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_pedia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pedia',
            'name_pedia',
            'category',
            'article:ntext',
            'ph_pedia',
            'temp_pedia',
            'gbr_ency',
            [
             'label'=>'Picture',
             'format'=>'raw',
             'value'=>Html::img(Yii::$app->request->baseUrl.'/img-ency/'.$model->gbr_ency,['width'=>'100px']),
            ],
        ],
    ]) ?>

</div>
