<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\Encyclopedia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encyclopedia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_pedia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'article')->widget(CKEditor::className(), [
      'editorOptions' => ElFinder::ckeditorOptions('imagebrowser',[/* Some CKEditor Options */]), 
     ]) ?>

    <?= $form->field($model, 'ph_pedia')->textInput() ?>

    <?= $form->field($model, 'temp_pedia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
