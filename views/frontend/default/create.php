<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\Mekan\models\Mekan */

$this->title = 'Create Mekan';
$this->params['breadcrumbs'][] = ['label' => 'Mekans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mekan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
