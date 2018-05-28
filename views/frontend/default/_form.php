<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\Mekan\models\Mekan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mekan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mekanNumarası')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bulunduguFakulte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'demirbasListesi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
