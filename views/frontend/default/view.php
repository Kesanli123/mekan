<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\Mekan\models\Mekan */

$this->title = $model->mekanID;
$this->params['breadcrumbs'][] = ['label' => 'Mekans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mekan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mekanID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mekanID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mekanID',
            'mekanNumarası',
            'bulunduguFakulte',
            'demirbasListesi:ntext',
        ],
    ]) ?>

</div>
